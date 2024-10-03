<?php

namespace App\Http\Controllers;

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
        return view('data');
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
}
