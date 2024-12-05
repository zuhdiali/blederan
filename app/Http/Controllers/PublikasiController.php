<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;
use Illuminate\Support\Facades\Auth;

class PublikasiController extends Controller
{
    public function index()
    {
        $publikasis = Publikasi::where('id_desa', Auth::user()->id_desa)->orderBy('created_at', 'desc')->get();
        return view('admin.publikasi.index', compact('publikasis'));
    }

    public function download($id)
    {
        $publikasi = Publikasi::find($id);
        $file = public_path()."/uploads/publikasi/".$publikasi->file;

        $headers = [
                'Content-Type' => 'application/pdf',
            ];

        return response()->file($file, $headers);
    }

    public function create()
    {
        return view('admin.publikasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_publikasi' => 'required',
            'file_publikasi' => 'required|mimes:pdf'
        ]);

        $filename = NULL;
        $path = NULL;

        if ($request->has('file_publikasi')) {

            $file = $request->file('file_publikasi');
            $extension = $file->getClientOriginalExtension();

            $filename =  Auth::user()->environment->nama_desa."_".time() . '.' . $extension;

            $path = 'uploads/publikasi/';
            $file->move($path, $filename);
        }

        Publikasi::create([
            'nama_publikasi' => $request->nama_publikasi,
            'id_desa' => Auth::user()->id_desa,
            'file' => $filename
        ]);

        return redirect()->route('admin-publikasi')
            ->with('success', 'Publikasi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $publikasi = Publikasi::find($id);
        return view('admin.publikasi.edit', compact('publikasi'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_publikasi' => 'required',
            'file_publikasi' => 'nullable|mimes:pdf'
        ]);

        $filename = NULL;
        $path = NULL;

        $publikasi = Publikasi::find($id);
        if ($request->has('file_publikasi')) {

            $file = $request->file('file_publikasi');
            $extension = $file->getClientOriginalExtension();

            $filename =  Auth::user()->environment->nama_desa."_".time() . '.' . $extension;
            $publikasi->file = $filename;
            $path = 'uploads/publikasi/';
            $file->move($path, $filename);
        }

        $publikasi->nama_publikasi = $request->nama_publikasi;
        $publikasi->save();

        return redirect()->route('admin-publikasi')
            ->with('success', 'Publikasi berhasil diubah.');
    }

    public function destroy($id)
    {
        $publikasi = Publikasi::find($id);
        $publikasi->delete();

        return redirect()->route('admin-publikasi')
            ->with('success', 'Publikasi berhasil dihapus');
    }
}
