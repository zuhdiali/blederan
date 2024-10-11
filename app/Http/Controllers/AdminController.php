<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Exception\RequestException;
use App\Models\User;
use App\Models\Produk;
use App\Models\Akomodasi;
use App\Models\Tabulasi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::get();
        $produks = Produk::get();
        $akomodasis = Akomodasi::get();

        return view('admin.dashboard', [
            'jumlah_pengguna' => count($users),
            'jumlah_produk' => count($produks),
            'jumlah_akomodasi' => count($akomodasis),
            
        ]);
    }

    public function forms()
    {
        return view('admin.forms');
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
        return view('auth.daftar');
    }

    public function daftarPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            // Auth::login($user);
            return back()->with("success", "Akun berhasil didaftarkan!");
        }
        return redirect(route('daftar'))->with("error", "Gagal mendaftar")->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('welcome'))->with("success", "Berhasil logout!");
    }

    public function getDataAPI()
    {
        try {
            $response = Http::get('http://192.168.1.10/api/posts/33071100142024');
            $array_response = json_decode($response->body(), true);
            // dd($array_response['data']);
            foreach ($array_response['data'] as $key => $value) {
            $tabulasi = new Tabulasi;
            $tabulasi->judul_tabel = $value['judul'];
            $tabulasi->data = json_encode($value[0]);
            
            $tabulasi->tanggal = now();
            switch ($value[1]['kategori']) {
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
            $tabulasi->metadata = json_encode($value[2]['metadata']);
            $tabulasi->save();
            }
            return redirect(route('admin-dashboard'))->with('success', 'Data berhasil diperbarui!');
        } catch (RequestException $e) {
            Log::error('RequestException: ' . $e->getMessage());
            return redirect(route('admin-dashboard'))->with('error', 'Gagal memperbarui data!');
        } catch (\Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
            return redirect(route('admin-dashboard'))->with('error', 'Terjadi kesalahan!');
        }
    }

    public function testApi()
    {
        $produks = Produk::get();
        return response()->json($produks);
    }


}
