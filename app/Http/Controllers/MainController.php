<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use App\Models\Informasi;
use Illuminate\Support\Facades\DB;

use App\Models\Produk;
use App\Models\Tabulasi;
use App\Models\Environment;

class MainController extends Controller
{
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
        $kabarTerkini = DB::table('informasis')->where('kategori', 'kabar')->where('tanggal','<=',now())->where('id_desa', $id_desa)->orderBy('tanggal', 'desc')->limit(4)->get();
        $kabars = DB::table('informasis')->where('kategori', 'kabar')->where('tanggal','<=',now())->where('id_desa', $id_desa)->orderBy('tanggal', 'desc')->paginate(3);
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
        return view('publikasi', compact('id_desa', 'environment'));
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
            $data[$value] = Tabulasi::where('kategori', $key)->where('highlight', 0)->where('id_desa', $id_desa)->get();
            $highlight_data['highlight_' . $value] = Tabulasi::where('kategori', $key)->where('highlight', 1)->where('id_desa', $id_desa)->get();
        }
        
        return view('data2', array_merge($data, $highlight_data, ['id_desa' => $id_desa, 'environment' => $environment]));
        // return view('data2', compact('kependudukan', 'perumahan', 'kesehatan', 'pendidikan', 'pekerjaan', 'highlight_kependudukan', 'highlight_perumahan', 'highlight_kesehatan', 'highlight_pendidikan'));
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
}
