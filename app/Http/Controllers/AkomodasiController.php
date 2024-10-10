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
        
        $request->validate([
            'nama_akomodasi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar_akomodasi' => 'nullable|mimes:png,jpg,jpeg,webp',
            'nama_pemilik' => 'required',
            'kontak_pemilik' => 'required'
        ]);

        $filename = NULL;
        $path = NULL;

        if ($request->has('gambar_akomodasi')) {

            $file = $request->file('gambar_akomodasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/akomodasi/';
            $file->move($path, $filename);
        }
        
        Akomodasi::create([
            'nama_akomodasi' => $request->nama_akomodasi,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'stok' => $request->stok,
            'gambar_akomodasi' => $filename,
            'nama_pemilik' => $request->nama_pemilik,
            'kontak_pemilik' => $request->kontak_pemilik,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('admin-akomodasi')
            ->with('success', 'Akomodasi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $akomodasi = Akomodasi::find($id);
        return view('admin.akomodasi.edit', compact('akomodasi'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_akomodasi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar_akomodasi' => 'nullable|mimes:png,jpg,jpeg,webp',
            'nama_pemilik' => 'required',
            'kontak_pemilik' => 'required'
        ]);

        $filename = NULL;
        $path = NULL;

        $akomodasi = Akomodasi::find($id);
        if ($request->has('gambar_akomodasi')) {

            $file = $request->file('gambar_akomodasi');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;
            $akomodasi->gambar_akomodasi = $filename;
            $path = 'uploads/akomodasi/';
            $file->move($path, $filename);
        }

        $akomodasi->nama_akomodasi = $request->nama_akomodasi;
        $akomodasi->harga = $request->harga;
        $akomodasi->stok = $request->stok;
        $akomodasi->nama_pemilik = $request->nama_pemilik;
        $akomodasi->kontak_pemilik = $request->kontak_pemilik;
        $akomodasi->deskripsi = $request->deskripsi;
        $akomodasi->save();

        return redirect()->route('admin-akomodasi')
            ->with('success', 'Akomodasi berhasil diubah.');
    }

    public function destroy($id)
    {
        $akomodasi = Akomodasi::find($id);
        $akomodasi->delete();

        return redirect()->route('admin-akomodasi')
            ->with('success', 'Akomodasi deleted successfully');
    }
}
