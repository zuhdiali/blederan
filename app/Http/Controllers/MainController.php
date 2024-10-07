<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function produk()
    {
        return view('produk');
    }

    public function artikel()
    {
        return view('artikel');
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
        $kependudukan = DB::table('tabulasis')->where('kategori','=',1)->get();
        $perumahan = DB::table('tabulasis')->where('kategori','=',2)->get();
        // dd($perumahan);
        $kesehatan = DB::table('tabulasis')->where('kategori','=',3)->get();
        $pendidikan = DB::table('tabulasis')->where('kategori','=',4)->get();
        $pekerjaan = DB::table('tabulasis')->where('kategori','=',5)->get();

        return view('data2', [
            'kependudukan' => $kependudukan,
            'perumahan' => $perumahan,
            'kesehatan' => $kesehatan,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan
        ]);
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
