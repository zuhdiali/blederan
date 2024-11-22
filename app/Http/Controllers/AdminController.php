<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Exception\RequestException;
use App\Models\User;
use App\Models\Produk;
use App\Models\Akomodasi;
use App\Models\Tabulasi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Environment;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('id_desa', Auth::user()->id_desa)->get();
        $produks = Produk::where('id_desa', Auth::user()->id_desa)->get();
        $akomodasis = Akomodasi::where('id_desa', Auth::user()->id_desa)->get();
        $data_terakhir = Tabulasi::where('id_desa', Auth::user()->id_desa)->orderBy('tanggal', 'desc')->first();
        $tgl_terakhir = $data_terakhir ? \Carbon\Carbon::parse($data_terakhir->tanggal)->locale('id')->translatedFormat('F Y') : null;
        // dd($tgl_terakhir);

        return view('admin.dashboard', [
            'jumlah_pengguna' => count($users),
            'jumlah_produk' => count($produks),
            'jumlah_akomodasi' => count($akomodasis),
            'tgl_terakhir' => $tgl_terakhir
        ]);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin-dashboard')->with("success", "Berhasil login! Selamat datang " . Auth::user()->name . "!");
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
            'password' => 'Email atau kata sandi salah.',
        ])->withInput();
    }

    public function daftar()
    {
        $desas = Environment::select('id_desa', 'nama_desa')->where('id_desa', '!=', '999999')->get();
        return view('auth.daftar', compact('desas'));
    }

    public function daftarPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User;

        // Jika yang login adalah superadmin, maka bisa memilih desa. Jika bukan, maka desa yang dipilih adalah desa yang login
        if(Auth::user()->id_desa == '999999') {
            $request->validate([
                'id_desa' => 'required',
            ]);
            $user->id_desa = $request->id_desa;
        } else {
            $user->id_desa = Auth::user()->id_desa;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            // Auth::login($user);
            return redirect(route('admin-manajemen-pengguna'))->with("success", "Akun berhasil didaftarkan!");
        }
        return redirect(route('daftar'))->with("error", "Gagal mendaftar")->withInput();
    }

    public function logout()
    {
        $id_desa = Auth::user()->id_desa;
        Auth::logout();
        return redirect(url('/', $id_desa))->with("success", "Berhasil logout!");
    }

    public function resetPassword($id)
    {
        $user = User::where('id', $id)->first();
        $user->desa = Environment::where('id_desa', $user->id_desa)->first();
        return view('auth.reset-password', compact('user'));
    }

    public function resetPasswordPost(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = User::where('id', $id)->first();
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            return redirect(route('admin-manajemen-pengguna'))->with("success", "Kata sandi berhasil diubah!");
        }
        return redirect(route('reset-password', $id))->with("error", "Gagal mengubah kata sandi")->withInput();
    }

    public function getDataAPI()
    {
        try {
            // request ke API
            $response = Http::withOptions([
                'verify' => false,
            ])->get(env('API_URL') . '/posts/3307'. Auth::user()->id_desa . date('Y'));
            $array_response = json_decode($response->body(), true);
            
            // looping insert data ke tabel tabulasi
            foreach ($array_response['data'] as $key => $value) {
                $tabulasi = new Tabulasi;
                $tabulasi->judul_tabel = $value['judul'];
                $tabulasi->data = json_encode($value["data"]);
                
                $tabulasi->tanggal = date('Y-m-1');
                switch ($value['kategori']) {
                    case 'kependudukan':
                    $tabulasi->kategori = 1;
                    break;
                    case 'perumahan':
                    $tabulasi->kategori = 2;
                    break;
                    case 'kesehatan':
                    $tabulasi->kategori = 3;
                    break;
                    case 'pendidikan':
                    $tabulasi->kategori = 4;
                    break;
                    case 'pekerjaan':
                    $tabulasi->kategori = 5;
                    break;
                    default:
                    $tabulasi->kategori = 99;
                    break;
                }
                if(array_key_exists('metadata', $value)) {
                    $tabulasi->metadata = json_encode($value['metadata']);
                }
                else {
                    $tabulasi->metadata = null;
                }
                $tabulasi->id_table = $value["id_query"]; // id_query dijadikan id_table
                Tabulasi::updateOrCreate(
                    ['tanggal' => date('Y-m-1'),
                    'id_table' => $value["id_query"],
                    'id_desa' => Auth::user()->id_desa], 
                    ['tanggal' => date('Y-m-1'),
                    'judul_tabel' => $tabulasi->judul_tabel,
                    'data' => $tabulasi->data,
                    'kategori' => $tabulasi->kategori,
                    'metadata' => $tabulasi->metadata,
                    'highlight' => $value['highlight']]
                );
                
                // $tabulasi->save();
            }
            // Alert::success('Sukses', 'Data berhasil diperbarui!');
            return redirect(route('admin-dashboard'))->with('success', 'Data berhasil diperbarui! ');
        } catch (RequestException $e) {
            Log::error('RequestException: ' . $e->getMessage());
            // Alert::error('Gagal', 'Gagal memperbarui data! '. $e->getMessage());
            return redirect(route('admin-dashboard'))->with('error', 'Gagal memperbarui data! '. $e->getMessage());
        } catch (\Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
            // Alert::error('Terjadi kesalahan!', 'Terjadi kesalahan! '.$e->getMessage());
            return redirect(route('admin-dashboard'))->with('error', 'Terjadi kesalahan! '.$e->getMessage());
        }
    }

    public function testApi()
    {
        $produks = Produk::get();
        return response()->json($produks);
    }


}
