<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use App\Models\Informasi;
use Illuminate\Support\Facades\DB;

use App\Models\Produk;

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
        return view('welcome', compact('produks', 'akomodasis', 'eduwisatas'));
    }

    // public function produk()
    // {
    //     return view('produk');
    // }

    public function kabar()
    {   
        $kabarTerkini = DB::table('informasis')->where('kategori', 'kabar')->orderBy('tanggal', 'desc')->limit(4)->get();
        $kabars = DB::table('informasis')->where('kategori', 'kabar')->orderBy('tanggal', 'desc')->get();
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

    public function data()
    {
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
        $kependudukan = DB::table('tabulasis as t1')
                        ->join(DB::raw('(SELECT id_table, MAX(tanggal) AS max_tanggal FROM tabulasis GROUP BY id_table) as t2'), function($join) {
                            $join->on('t1.id_table', '=', 't2.id_table')
                                ->on('t1.tanggal', '=', 't2.max_tanggal');
                        })
                        ->where('t1.kategori', 1)
                        ->select('t1.judul_tabel', 't1.data', 't1.metadata', 't1.tanggal', 't1.kategori', 't1.id_table')
                        ->get();
                        $perumahan = DB::table('tabulasis')->where('kategori','=',2)->get();
        $perumahan = DB::table('tabulasis as t1')
                        ->join(DB::raw('(SELECT id_table, MAX(tanggal) AS max_tanggal FROM tabulasis GROUP BY id_table) as t2'), function($join) {
                            $join->on('t1.id_table', '=', 't2.id_table')
                                ->on('t1.tanggal', '=', 't2.max_tanggal');
                        })
                        ->where('t1.kategori', 2)
                        ->select('t1.judul_tabel', 't1.data', 't1.metadata', 't1.tanggal', 't1.kategori', 't1.id_table')
                        ->get();

        
        $kesehatan = DB::table('tabulasis as t1')
                    ->join(DB::raw('(SELECT id_table, MAX(tanggal) AS max_tanggal FROM tabulasis GROUP BY id_table) as t2'), function($join) {
                        $join->on('t1.id_table', '=', 't2.id_table')
                            ->on('t1.tanggal', '=', 't2.max_tanggal');
                    })
                    ->where('t1.kategori', 3)
                    ->select('t1.judul_tabel', 't1.data', 't1.metadata', 't1.tanggal', 't1.kategori', 't1.id_table')
                    ->get();

        $pendidikan = DB::table('tabulasis as t1')
                    ->join(DB::raw('(SELECT id_table, MAX(tanggal) AS max_tanggal FROM tabulasis GROUP BY id_table) as t2'), function($join) {
                        $join->on('t1.id_table', '=', 't2.id_table')
                            ->on('t1.tanggal', '=', 't2.max_tanggal');
                    })
                    ->where('t1.kategori', 4)
                    ->select('t1.judul_tabel', 't1.data', 't1.metadata', 't1.tanggal', 't1.kategori', 't1.id_table')
                    ->get();

        $pekerjaan = DB::table('tabulasis as t1')
                    ->join(DB::raw('(SELECT id_table, MAX(tanggal) AS max_tanggal FROM tabulasis GROUP BY id_table) as t2'), function($join) {
                        $join->on('t1.id_table', '=', 't2.id_table')
                            ->on('t1.tanggal', '=', 't2.max_tanggal');
                    })
                    ->where('t1.kategori', 5)
                    ->select('t1.judul_tabel', 't1.data', 't1.metadata', 't1.tanggal', 't1.kategori', 't1.id_table')
                    ->get();
        // dd($pendidikan);
        return view('data2', [
            'kependudukan' => $kependudukan,
            'perumahan' => $perumahan,
            'kesehatan' => $kesehatan,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan
        ]);
    }

    public function downloadPublikasi()
    {
        $file= public_path(). "/uploads/publikasi/Profil Desa Lengkap.pdf";
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
