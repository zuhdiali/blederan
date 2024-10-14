<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function kabar()
    {
        $kabars = Informasi::where('kategori', 'kabar')->get();
        return view('admin.informasi.kabar', compact('kabars'));
    }

    public function eduwisata()
    {
        $eduwisatas = Informasi::where('kategori', 'eduwisata')->get();
        return view('admin.informasi.eduwisata', compact('eduwisatas'));
    }

    public function create()
    {
        return view('admin.informasi.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_informasi' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg,webp',
            'deskripsi' => 'required'
        ]);
        // dd($request->all());

        $filename = NULL;
        $path = NULL;

        if ($request->has('gambar')) {

            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/informasi/';
            $file->move($path, $filename);
        }

        Informasi::create([
            'nama_informasi' => $request->nama_informasi,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'kategori' => $request->kategori,
            'gambar' => $filename,
            'deskripsi' => $request->deskripsi
        ]);

        // if ($request->hasFile('gambar')) {
        //     $file = $request->file('gambar');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('uploads/', $filename);
        //     // $request->merge(['gambar' => $filename]);
        // }
        // // dd($request->all());
        // Informasi::create($request->all());

        if ($request->kategori == 'kabar') {
            return redirect()->route('admin-kabar')
                ->with('success', 'Kabar berhasil ditambahkan.');
        } else {
            return redirect()->route('admin-eduwisata')
                ->with('success', 'Eduwisata berhasil ditambahkan.');
        }
    }

    public function edit($id)
    {
        $informasi = Informasi::find($id);
        return view('admin.informasi.edit', compact('informasi'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_informasi' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'gambar' => 'nullable|mimes:png,jpg,jpeg,webp',
            'deskripsi' => 'required'
        ]);

        $filename = NULL;
        $path = NULL;

        $informasi = Informasi::find($id);
        if ($request->has('gambar')) {

            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;
            $informasi->gambar = $filename;
            $path = 'uploads/informasi/';
            $file->move($path, $filename);
        }


        $informasi->nama_informasi = $request->nama_informasi;
        $informasi->jumlah = $request->jumlah;
        $informasi->tanggal = $request->tanggal;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->save();

        if ($informasi->kategori == 'kabar') {
            return redirect()->route('admin-kabar')
                ->with('success', 'Kabar berhasil diubah.');
        } else {
            return redirect()->route('admin-eduwisata')
                ->with('success', 'Eduwisata berhasil diubah.');
        }
    }

    public function destroy($id)
    {
        $informasi = Informasi::find($id);
        $informasi->delete();

        if ($informasi->kategori == 'kabar') {
            return redirect()->route('admin-kabar')
                ->with('success', 'Kabar berhasil dihapus.');
        } else {
            return redirect()->route('admin-eduwisata')
                ->with('success', 'Eduwisata berhasil dihapus.');
        }
    }
}
