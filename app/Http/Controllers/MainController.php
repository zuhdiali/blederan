<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use App\Models\Informasi;
use Illuminate\Support\Facades\DB;

use App\Models\Produk;
use App\Models\Tabulasi;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produks = Produk::get();
        $akomodasis = Akomodasi::get();
        $eduwisatas = Informasi::where('kategori', 'eduwisata')->get();
        $eduwisatas_berlalu = Informasi::where('kategori', 'eduwisata')
            ->where('tanggal', '<', now())
            ->orderBy('tanggal', 'desc')
            ->get();
        return view('welcome', compact('produks', 'akomodasis', 'eduwisatas', 'eduwisatas_berlalu'));
    }

    // public function produk()
    // {
    //     return view('produk');
    // }

    public function kabar()
    {   
        $kabarTerkini = DB::table('informasis')->where('kategori', 'kabar')->where('tanggal','<=',now())->orderBy('tanggal', 'desc')->limit(4)->get();
        $kabars = DB::table('informasis')->where('kategori', 'kabar')->where('tanggal','<=',now())->orderBy('tanggal', 'desc')->paginate(3);
        return view('kabar', compact('kabarTerkini', 'kabars'));
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function peta()
    {
        return view('peta');
    }

    public function publikasi()
    {
        return view('publikasi');
    }

    public function medsos()
    {
        return view('medsos');
    }

    public function data()
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

    public function data2()
    {
        // $kependudukan = DB::table('tabulasis')->where('kategori','=',1)->get();
        // $perumahan = DB::table('tabulasis')->where('kategori','=',2)->get();
        // $kesehatan = DB::table('tabulasis')->where('kategori','=',3)->get();
        // $pendidikan = DB::table('tabulasis')->where('kategori','=',4)->get();
        // $pekerjaan = DB::table('tabulasis')->where('kategori','=',5)->get();

        // $highlight_kependudukan = DB::table('tabulasis')->where('kategori', 1)->where('highlight', 1)->get();
        // $highlight_perumahan = DB::table('tabulasis')->where('kategori', 2)->where('highlight', 1)->get();
        // $highlight_kesehatan = DB::table('tabulasis')->where('kategori', 3)->where('highlight', 1)->get();
        // $highlight_pendidikan = DB::table('tabulasis')->where('kategori', 4)->where('highlight', 1)->get();

        
        $categories = [1 => 'kependudukan', 2 => 'perumahan', 3 => 'kesehatan', 4 => 'pendidikan', 5 => 'pekerjaan'];
        $data = [];
        $highlight_data = [];

        foreach ($categories as $key => $value) {
            $data[$value] = Tabulasi::where('kategori', $key)->where('highlight', 0)->get();
            $highlight_data['highlight_' . $value] = Tabulasi::where('kategori', $key)->where('highlight', 1)->get();
        }
        
        return view('data2', array_merge($data, $highlight_data));
        // return view('data2', compact('kependudukan', 'perumahan', 'kesehatan', 'pendidikan', 'pekerjaan', 'highlight_kependudukan', 'highlight_perumahan', 'highlight_kesehatan', 'highlight_pendidikan'));
    }

    public function downloadPublikasi()
    {
        $file="/uploads/publikasi/Profil Desa Lengkap.pdf";
        // $file = glob(public_path('uploads/publikasi/Profil Desa Lengkap.pdf'));
        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'filename.pdf', $headers);
        // return view('download_publikasi', compact('files'));
    }

    public function layoutArtikel()
    {
        return view('layout_artikel');
    }

    public function desaCantik()
    {
        return view('artikels.20241003_desa_cantik');
    }

    public function kampungSayur()
    {
        return view('artikels.20241003_kampung_sayur');
    }

    public function santunan()
    {
        return view('artikels.20241003_santunan');
    }

    public function penghargaan()
    {
        return view('artikels.20241003_penghargaan');
    }

    public function test()
    {
        // $user = DB::table('admins')->get();
        return view('test');
    }

    public function test2()
    {
        // $user = DB::table('admins')->get();
        return view('test2');
    }
}
