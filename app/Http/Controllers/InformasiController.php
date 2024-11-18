<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function kabar()
    {
        $kabars = Informasi::where('kategori', 'kabar')->orderBy('tanggal','desc')->get();
        return view('admin.informasi.kabar', compact('kabars'));
    }

    public function eduwisata()
    {
        $eduwisatas = Informasi::where('kategori', 'eduwisata')->orderBy('tanggal','desc')->get();
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
            'judul' => 'required',
            'instansi_terlibat' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'kategori' => 'required',
            'gambar' => 'nullable|mimes:png,jpg,jpeg,webp,svg'
        ]);

        $tanggal = $request->tanggal . ' ' . $request->jam_mulai;
        $tanggal_selesai = $request->tanggal . ' ' . $request->jam_selesai;
        $filename = NULL;
        $path = NULL;

        if ($request->has('gambar')) {

            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/informasi/';
            $file->move($path, $filename);
        }
        else {
            $filename = 'default_informasi.svg';
        }

        Informasi::create([
            'judul' => $request->judul,
            'instansi_terlibat' => $request->instansi_terlibat,
            'jumlah' => $request->jumlah,
            'tanggal' => $tanggal,
            'tanggal_selesai' => $tanggal_selesai,
            'kategori' => $request->kategori,
            'gambar' => $filename,
            'deskripsi' => $request->deskripsi
        ]);

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
            'judul' => 'required',
            'instansi_terlibat' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'gambar' => 'nullable|mimes:png,jpg,jpeg,webp,svg'
        ]);
        $tanggal = $request->tanggal . ' ' . $request->jam_mulai;
        $tanggal_selesai = $request->tanggal . ' ' . $request->jam_selesai;

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

        $informasi->judul = $request->judul;
        $informasi->instansi_terlibat = $request->instansi_terlibat;
        $informasi->jumlah = $request->jumlah;
        $informasi->tanggal = $tanggal;
        $informasi->tanggal_selesai = $tanggal_selesai;
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
        if ($informasi->gambar != "default_informasi.svg") {
            $file_path = asset('uploads/informasi/' . $informasi->gambar);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
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
