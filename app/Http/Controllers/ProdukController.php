<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
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
        // dd($request->all());
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
            'gambar_produk' => 'nullable|mimes:png,jpg,jpeg,webp',
            'nama_penjual' => 'required',
            'kontak_penjual' => 'required'
        ]);
        
        $filename = NULL;
        $path = NULL;

        if($request->has('gambar_produk')){

            $file = $request->file('gambar_produk');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/produk/';
            $file->move($path, $filename);
        }

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'stok' => $request->stok,
            'gambar_produk' => $filename,
            'nama_penjual' => $request->nama_penjual,
            'kontak_penjual' => $request->kontak_penjual,
            'deskripsi' => $request->deskripsi
        ]);

        // if ($request->hasFile('gambar_produk')) {
        //     $file = $request->file('gambar_produk');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('uploads/', $filename);
        //     // $request->merge(['gambar_produk' => $filename]);
        // }
        // // dd($request->all());
        // Produk::create($request->all());

        return redirect()->route('admin-produk')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
            'gambar_produk' => 'nullable|mimes:png,jpg,jpeg,webp',
            'nama_penjual' => 'required',
            'kontak_penjual' => 'required'
        ]);

        $filename = NULL;
        $path = NULL;

        $produk = Produk::find($id);
        if($request->has('gambar_produk')){

            $file = $request->file('gambar_produk');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $produk->gambar_produk = $filename;
            $path = 'uploads/produk/';
            $file->move($path, $filename);
        }
        
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->satuan = $request->satuan;
        $produk->stok = $request->stok;
        // $produk->gambar_produk = $filename;
        $produk->nama_penjual = $request->nama_penjual;
        $produk->kontak_penjual = $request->kontak_penjual;
        $produk->deskripsi = $request->deskripsi;
        $produk->save();

        return redirect()->route('admin-produk')
            ->with('success', 'Produk berhasil diubah.');  
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return redirect()->route('admin-produk')
            ->with('success', 'Produk deleted successfully');
    }
}
