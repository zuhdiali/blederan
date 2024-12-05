<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use App\Models\Informasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Carbon;
use Illuminate\Http\Client\RequestException;
use App\Models\Produk;
use App\Models\Tabulasi;
use App\Models\Environment;
use App\Models\Publikasi;

class MainController extends Controller
{
    public function landing()
    {
        $environments = Environment::where('id_desa', '<>', 999999)->get();
        $kecamatans = Environment::select('nama_kecamatan')->where('nama_kecamatan', '<>', 'Dummy')->distinct()->orderBy('nama_kecamatan')->get();
        $desas = Environment::selectRaw('Distinct(nama_desa), id_desa, nama_kecamatan')->where('id_desa', '<>', 999999)->orderBy('nama_desa')->get();
        return view('index', compact('environments', 'kecamatans', 'desas'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id_desa)
    {
        $environment = Environment::where('id_desa', $id_desa)->first();
        $produks = Produk::where('id_desa', $id_desa)->get();
        $akomodasis = Akomodasi::where('id_desa', $id_desa)->get();
        $eduwisatas = Informasi::where('kategori', 'eduwisata')->where('id_desa', $id_desa)->get();
        $eduwisatas_berlalu = Informasi::where('kategori', 'eduwisata')
            ->where('tanggal', '<', now())
            ->where('id_desa', $id_desa)
            ->orderBy('tanggal', 'desc')
            ->get();
            // dd($eduwisatas_berlalu);
        return view('welcome', compact('produks', 'akomodasis', 'eduwisatas', 'eduwisatas_berlalu', 'id_desa', 'environment'));
    }

    // public function produk($id_desa)
    // {
    //     return view('produk');
    // }

    public function kabar($id_desa)
    {   
        $environment = Environment::where('id_desa', $id_desa)->first();
        $gambar_kabar = [];
        array_push($gambar_kabar, $environment->bg_kabar_1);
        // dd($gambar_kabar);
        array_push($gambar_kabar, $environment->bg_kabar_2);
        array_push($gambar_kabar, $environment->bg_kabar_3);
        array_push($gambar_kabar, $environment->bg_kabar_4);
        // dd($gambar_kabar);
        $kabarTerkini = DB::table('informasis')->where('kategori', 'kabar')->whereDate('tanggal','<=',Carbon::today()->toDateString())->where('id_desa', $id_desa)->orderBy('tanggal', 'desc')->limit(4)->get();
        $kabars = DB::table('informasis')->where('kategori', 'kabar')->whereDate('tanggal','<=',Carbon::today()->toDateString())->where('id_desa', $id_desa)->orderBy('tanggal', 'desc')->paginate(3);
        return view('kabar', compact('kabarTerkini', 'kabars', 'id_desa', 'environment', 'gambar_kabar'));
    }

    public function sejarah($id_desa)
    {   
        $environment = Environment::where('id_desa', $id_desa)->first();
        return view('sejarah', compact('id_desa',  'environment'));
    }

    public function peta($id_desa)
    {   
        $environment = Environment::where('id_desa', $id_desa)->first();
        return view('peta', compact('id_desa', 'environment'));
    }

    public function publikasi($id_desa)
    {
        $environment = Environment::where('id_desa', $id_desa)->first();
        $publikasis = Publikasi::where('id_desa', $id_desa)->get();
        return view('publikasi', compact('id_desa', 'environment', 'publikasis'));
    }

    public function medsos($id_desa)
    {
        $environment = Environment::where('id_desa', $id_desa)->first();
        return view('medsos', compact('id_desa', 'environment'));
    }

    public function data($id_desa)
    {
        // QUERY SEBELUMNYA
        // $kependudukan = DB::table('tabulasis as t1')
        //                 ->join(DB::raw('(SELECT id_table, MAX(tanggal) AS max_tanggal FROM tabulasis GROUP BY id_table) as t2'), function($join) {
        //                     $join->on('t1.id_table', '=', 't2.id_table')
        //                         ->on('t1.tanggal', '=', 't2.max_tanggal');
        //                 })
        //                 ->where('t1.kategori', 1)
        //                 ->where('highlight', 0)
        //                 ->select('t1.judul_tabel', 't1.data', 't1.metadata', 't1.tanggal', 't1.kategori', 't1.id_table')
        //                 ->get();
        // QUERY SEBELUMNYA

        $kependudukan = DB::table('tabulasis')->where('kategori','=',1)->get();
        $perumahan = DB::table('tabulasis')->where('kategori','=',2)->get();
        $kesehatan = DB::table('tabulasis')->where('kategori','=',3)->get();
        $pendidikan = DB::table('tabulasis')->where('kategori','=',4)->get();
        $pekerjaan = DB::table('tabulasis')->where('kategori','=',5)->get();

        return view('data', [
            'kependudukan' => $kependudukan,
            'perumahan' => $perumahan,
            'kesehatan' => $kesehatan,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan
        ]);
    }

    public function data2($id_desa)
    {
        $environment = Environment::where('id_desa', $id_desa)->first();
        $categories = [1 => 'kependudukan', 2 => 'perumahan', 3 => 'kesehatan', 4 => 'pendidikan', 5 => 'pekerjaan'];
        $data = [];
        $highlight_data = [];

        foreach ($categories as $key => $value) {
            $data[$value] = Tabulasi::where('kategori', $key)->where('highlight', 0)->where('id_desa', $id_desa)->orderBy('tanggal', 'desc')->whereRaw("tanggal like '%".  date('Y-m')."%'")->get();
            $highlight_data['highlight_' . $value] = Tabulasi::where('kategori', $key)->where('highlight', 1)->where('id_desa', $id_desa)->whereRaw("tanggal like '%".  date('Y-m')."%'")->get();
        }
        $response = array_merge($data, $highlight_data, ['id_desa' => $id_desa, 'environment' => $environment]);
        if (count($response['kependudukan']) == 0) {
            $this->getDataAPI($id_desa);
            $categories = [1 => 'kependudukan', 2 => 'perumahan', 3 => 'kesehatan', 4 => 'pendidikan', 5 => 'pekerjaan'];
            $data = [];
            $highlight_data = [];
    
            foreach ($categories as $key => $value) {
                $data[$value] = Tabulasi::where('kategori', $key)->where('highlight', 0)->where('id_desa', $id_desa)->orderBy('tanggal', 'desc')->whereRaw("tanggal like '%".  date('Y-m')."%'")->get();
                $highlight_data['highlight_' . $value] = Tabulasi::where('kategori', $key)->where('highlight', 1)->where('id_desa', $id_desa)->whereRaw("tanggal like '%".  date('Y-m')."%'")->get();
            }
            return view('data2', array_merge($data, $highlight_data, ['id_desa' => $id_desa, 'environment' => $environment]));
        } 
        // dd(array_merge($data, $highlight_data, ['id_desa' => $id_desa, 'environment' => $environment]));
        return view('data2', array_merge($data, $highlight_data, ['id_desa' => $id_desa, 'environment' => $environment]));
    }

    public function downloadPublikasi($id_desa)
    {
        $file="/uploads/publikasi/Profil Desa Lengkap.pdf";
        // $file = glob(public_path('uploads/publikasi/Profil Desa Lengkap.pdf'));
        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'filename.pdf', $headers);
        // return view('download_publikasi', compact('files'));
    }

    public function layoutArtikel($id_desa)
    {
        return view('layout_artikel');
    }

    public function desaCantik($id_desa)
    {
        return view('artikels.20241003_desa_cantik');
    }

    public function kampungSayur($id_desa)
    {
        return view('artikels.20241003_kampung_sayur');
    }

    public function santunan($id_desa)
    {
        return view('artikels.20241003_santunan');
    }

    public function penghargaan($id_desa)
    {
        return view('artikels.20241003_penghargaan');
    }

    public function test($id_desa)
    {
        // $user = DB::table('admins')->get();
        return view('test');
    }

    public function test2($id_desa)
    {
        // $user = DB::table('admins')->get();
        return view('test2');
    }

    public function getDataAPI($id_desa)
    {
        $environment = Environment::where('id_desa', $id_desa)->first();
        try {
            // request ke API
            $response = Http::withOptions([
                'verify' => false,
            ])->get(env('API_URL') . '/posts/3307'. $id_desa . date('Y'));
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
                    'id_desa' => $id_desa], 
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
            // return view('data2', compact('id_desa', 'environment'));
        } catch (RequestException $e) {
            Log::error('RequestException: ' . $e->getMessage());
            // Alert::error('Gagal', 'Gagal memperbarui data! '. $e->getMessage());
            // return view('data2', compact('id_desa', 'environment'))->with('error', 'Terjadi kesalahan! '.$e->getMessage());;
        } catch (\Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
            // Alert::error('Terjadi kesalahan!', 'Terjadi kesalahan! '.$e->getMessage());
            // return view('data2', compact('id_desa', 'environment'))->with('error', 'Terjadi kesalahan! '.$e->getMessage());
        }
    }

}
