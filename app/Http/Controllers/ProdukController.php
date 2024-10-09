<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::get();
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
            'url_gambar' => 'required',
            'nama_penjual' => 'required',
            'kontak_penjual' => 'required',
            'deskripsi' => 'required'
        ]);

        Produk::create($request->all());

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk created successfully.');
    }

    public function edit(Produk $produk)
    {
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
            'url_gambar' => 'required',
            'nama_penjual' => 'required',
            'kontak_penjual' => 'required',
            'deskripsi' => 'required'
        ]);

        $produk = Produk::find($id);
        $produk->update($request->all());

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk updated successfully');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk deleted successfully');
    }
}
