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
}
