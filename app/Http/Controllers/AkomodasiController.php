<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use Illuminate\Http\Request;


class AkomodasiController extends Controller
{
    public function index()
    {
        $akomodasis = Akomodasi::get();
        return view('admin.akomodasi.index', compact('akomodasis'));
    }

    public function create()
    {
        return view('admin.akomodasi.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar_produk' => 'nullable|mimes:png,jpg,jpeg,webp',
            'nama_pemilik' => 'required',
            'kontak_pemilik' => 'required'
        ]);

        $filename = NULL;
        $path = NULL;

        if ($request->has('gambar_produk')) {

            $file = $request->file('gambar_produk');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/produk/';
            $file->move($path, $filename);
        }

        Akomodasi::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'stok' => $request->stok,
            'gambar_produk' => $filename,
            'nama_pemilik' => $request->nama_pemilik,
            'kontak_pemilik' => $request->kontak_pemilik,
            'deskripsi' => $request->deskripsi
        ]);

        // if ($request->hasFile('gambar_produk')) {
        //     $file = $request->file('gambar_produk');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('uploads/', $filename);
        //     // $request->merge(['gambar_produk' => $filename]);
        // }
        // // dd($request->all());
        // Akomodasi::create($request->all());

        return redirect()->route('admin-produk')
            ->with('success', 'Akomodasi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Akomodasi::find($id);
        return view('admin.akomodasi.edit', compact('produk'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
            'gambar_produk' => 'nullable|mimes:png,jpg,jpeg,webp',
            'nama_pemilik' => 'required',
            'kontak_pemilik' => 'required'
        ]);

        $filename = NULL;
        $path = NULL;

        $produk = Akomodasi::find($id);
        if ($request->has('gambar_produk')) {

            $file = $request->file('gambar_produk');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;
            $produk->gambar_produk = $filename;
            $path = 'uploads/produk/';
            $file->move($path, $filename);
        }

        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->satuan = $request->satuan;
        $produk->stok = $request->stok;
        // $produk->gambar_produk = $filename;
        $produk->nama_pemilik = $request->nama_pemilik;
        $produk->kontak_pemilik = $request->kontak_pemilik;
        $produk->deskripsi = $request->deskripsi;
        $produk->save();

        return redirect()->route('admin-produk')
            ->with('success', 'Akomodasi berhasil diubah.');
    }

    public function destroy($id)
    {
        $produk = Akomodasi::find($id);
        $produk->delete();

        return redirect()->route('admin-produk')
            ->with('success', 'Akomodasi deleted successfully');
    }
}
