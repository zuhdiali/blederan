<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabar;

class KabarController extends Controller
{
    public function index()
    {
        $kabars = Kabar::all();
        // dd($kabars);
        return view('admin.kabar.index', compact('kabars'));
    }

    public function create()
    {
        return view('admin.kabar.create');
    }

    public function show($id)
    {
        $kabar = Kabar::find($id);
        if (is_null($kabar)) {
            return view('errors.404', ['message' => 'Kabar not found']);
        }
        return view('admin.kabar.show', compact('kabar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required',
            'tanggal' => 'required',
            'text1' => 'required',
            'gambar1' => 'required|mimes:png,jpg,jpeg,webp',
            'gambar2' => 'nullable|mimes:png,jpg,jpeg,webp',
            'gambar3' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);

        $filename1 = $filename2 = $filename3 = NULL;
        $path = NULL;

        if ($request->has('gambar1')) {
            $file1 = $request->file('gambar1');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $extension1;
            $path = 'uploads/kabar/';
            $file1->move($path, $filename1);
        }

        if ($request->has('gambar2')) {
            $file2 = $request->file('gambar2');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = time() . '.' . $extension2;
            $path = 'uploads/kabar/';
            $file2->move($path, $filename2);
        }

        if ($request->has('gambar3')) {
            $file3 = $request->file('gambar3');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3 = time() . '.' . $extension3;
            $path = 'uploads/kabar/';
            $file3->move($path, $filename3);
        }

        Kabar::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal,
            'text1' => $request->text1,
            'gambar1' => $filename1,
            'text2' => $request->text2,
            'gambar2' => $filename2,
            'text3' => $request->text3,
            'gambar3' => $filename3,
        ]);

        return redirect()->route('admin-kabar')->with('success', 'Kabar created successfully');
    }

    public function edit($id)
    {
        $kabar = Kabar::find($id);
        if (is_null($kabar)) {
            return view('errors.404', ['message' => 'Kabar not found']);
        }
        return view('admin.kabar.edit', compact('kabar'));
    }

    // perlu dibenahi
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required',
            'tanggal' => 'required',
            'text1' => 'required',
            'gambar1' => 'required|mimes:png,jpg,jpeg,webp',
            'gambar2' => 'nullable|mimes:png,jpg,jpeg,webp',
            'gambar3' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);

        $filename1 = $filename2 = $filename3 = NULL;
        $path = NULL;

        if ($request->has('gambar1')) {
            $file1 = $request->file('gambar1');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $extension1;
            $path = 'uploads/kabar/';
            $file1->move($path, $filename1);
        }

        if ($request->has('gambar2')) {
            $file2 = $request->file('gambar2');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = time() . '.' . $extension2;
            $path = 'uploads/kabar/';
            $file2->move($path, $filename2);
        }

        if ($request->has('gambar3')) {
            $file3 = $request->file('gambar3');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3 = time() . '.' . $extension3;
            $path = 'uploads/kabar/';
            $file3->move($path, $filename3);
        }

        // $kabar->update($validatedData);
        return redirect()->route('admin-kabar')->with('success', 'Kabar updated successfully');
    }

    public function destroy($id)
    {
        $kabar = Kabar::find($id);
        if (is_null($kabar)) {
            return redirect()->route('admin-kabar')->with('error', 'Kabar not found');
        }
        $kabar->delete();
        return redirect()->route('admin-kabar')->with('success', 'Kabar deleted successfully');
    }
}
