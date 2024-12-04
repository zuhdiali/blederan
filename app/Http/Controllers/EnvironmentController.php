<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Environment;
use Illuminate\Support\Facades\Auth;

class EnvironmentController extends Controller
{
    public function index()
    {
        $environment = null;
        $environment = Environment::where('id_desa', Auth::user()->id_desa)->first();
        // dd($environment->id);
        return view('admin.environment.index', compact('environment'));
    }

    public function create()
    {
        return view('admin.environment.create');
    }

    public function store(Request $request)
    {   
        return redirect()->route('admin.environment.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa' => 'required|string|max:50',
            'tagline' => 'nullable|string|max:100',
            'gambar_logo' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'warna_font_logo' => 'required|string',
            'ada_sejarah' => 'required|boolean',
            'sejarah' => 'nullable|string',
            'ada_peta' => 'required|boolean',
            'peta' => 'nullable|string',
            'ada_publikasi' => 'required|boolean',
            'ada_akomodasi' => 'required|boolean',
            'ada_produk' => 'required|boolean',
            'ada_eduwisata' => 'required|boolean',
            'ada_jadwal' => 'required|boolean',
            'bg_utama' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'bg_kabar_1' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'bg_kabar_2' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'bg_kabar_3' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'bg_kabar_4' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'bg_data_kependudukan' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'bg_data_perumahan' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'bg_data_kesehatan' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'bg_data_pendidikan' => 'nullable|mimes:jpg,jpeg,png,svg|max:2048',
            'facebook_username' => 'nullable|string',
            'instagram_username' => 'nullable|string',
            'twitter_username' => 'nullable|string',
            'youtube_username' => 'nullable|string',
            'facebook_url' => 'nullable|string',
            'instagram_url' => 'nullable|string',
            'twitter_url' => 'nullable|string',
            'youtube_url' => 'nullable|string',
            'maps_desa' => 'nullable|string|max:600',
            'maps_kantor_desa' => 'nullable|string|max:600',
        ]);

        $environment = Environment::where('id_desa', $id)->first();
        // dd($environment);

        if($request->hasFile('gambar_logo')){
            $gambar_logo = $request->file('gambar_logo');
            $gambar_logo_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $gambar_logo->getClientOriginalName());
            $gambar_logo->move('images', $gambar_logo_name);
        } else {
            $gambar_logo_name = $environment->gambar_logo;
        }

        if($request->hasFile('gambar_sejarah')){
            $gambar_sejarah = $request->file('gambar_sejarah');
            $gambar_sejarah_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $gambar_sejarah->getClientOriginalName());
            $gambar_sejarah->move('images', $gambar_sejarah_name);
        } else {
            $gambar_sejarah_name = $environment->gambar_sejarah;
        }

        if($request->hasFile('gambar_peta')){
            $gambar_peta = $request->file('gambar_peta');
            $gambar_peta_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $gambar_peta->getClientOriginalName());
            $gambar_peta->move('images', $gambar_peta_name);
        } else {
            $gambar_peta_name = $environment->gambar_peta;
        }

        if($request->hasFile('bg_utama')){
            $bg_utama = $request->file('bg_utama');
            $bg_utama_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_utama->getClientOriginalName());
            $bg_utama->move('images', $bg_utama_name);
        } else {
            $bg_utama_name = $environment->bg_utama;
        }

        if($request->hasFile('bg_kabar_1')){
            $bg_kabar_1 = $request->file('bg_kabar_1');
            $bg_kabar_1_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_kabar_1->getClientOriginalName());
            $bg_kabar_1->move('images', $bg_kabar_1_name);
        } else {
            $bg_kabar_1_name = $environment->bg_kabar_1;
        }

        if($request->hasFile('bg_kabar_2')){
            $bg_kabar_2 = $request->file('bg_kabar_2');
            $bg_kabar_2_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_kabar_2->getClientOriginalName());
            $bg_kabar_2->move('images', $bg_kabar_2_name);
        } else {
            $bg_kabar_2_name = $environment->bg_kabar_2;
        }

        if($request->hasFile('bg_kabar_3')){
            $bg_kabar_3 = $request->file('bg_kabar_3');
            $bg_kabar_3_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_kabar_3->getClientOriginalName());
            $bg_kabar_3->move('images', $bg_kabar_3_name);
        } else {
            $bg_kabar_3_name = $environment->bg_kabar_3;
        }

        if($request->hasFile('bg_kabar_4')){
            $bg_kabar_4 = $request->file('bg_kabar_4');
            $bg_kabar_4_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_kabar_4->getClientOriginalName());
            $bg_kabar_4->move('images', $bg_kabar_4_name);
        } else {
            $bg_kabar_4_name = $environment->bg_kabar_4;
        }

        if($request->hasFile('bg_data_kependudukan')){
            $bg_data_kependudukan = $request->file('bg_data_kependudukan');
            $bg_data_kependudukan_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_data_kependudukan->getClientOriginalName());
            $bg_data_kependudukan->move('images', $bg_data_kependudukan_name);
        } else {
            $bg_data_kependudukan_name = $environment->bg_data_kependudukan;
        }

        if($request->hasFile('bg_data_perumahan')){
            $bg_data_perumahan = $request->file('bg_data_perumahan');
            $bg_data_perumahan_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_data_perumahan->getClientOriginalName());
            $bg_data_perumahan->move('images', $bg_data_perumahan_name);
        } else {
            $bg_data_perumahan_name = $environment->bg_data_perumahan;
        }

        if($request->hasFile('bg_data_kesehatan')){
            $bg_data_kesehatan = $request->file('bg_data_kesehatan');
            $bg_data_kesehatan_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_data_kesehatan->getClientOriginalName());
            $bg_data_kesehatan->move('images', $bg_data_kesehatan_name);
        } else {
            $bg_data_kesehatan_name = $environment->bg_data_kesehatan;
        }

        if($request->hasFile('bg_data_pendidikan')){
            $bg_data_pendidikan = $request->file('bg_data_pendidikan');
            $bg_data_pendidikan_name = str_replace(" ", "_", $request->nama_desa)."_".time()."_".str_replace(" ", "_", $bg_data_pendidikan->getClientOriginalName());
            $bg_data_pendidikan->move('images', $bg_data_pendidikan_name);
        } else {
            $bg_data_pendidikan_name = $environment->bg_data_pendidikan;
        }

        Environment::where('id_desa', $id)->update([
            'nama_desa' => $request->nama_desa,
            'tagline' => $request->tagline,
            'gambar_logo' => $gambar_logo_name,
            'warna_font_logo' => $request->warna_font_logo,
            'ada_sejarah' => $request->ada_sejarah,
            'sejarah' => $request->sejarah,
            'gambar_sejarah' => $gambar_sejarah_name,
            'ada_peta' => $request->ada_peta,
            'peta' => $request->peta,
            'gambar_peta' => $gambar_peta_name,
            'ada_publikasi' => $request->ada_publikasi,
            'ada_akomodasi' => $request->ada_akomodasi,
            'ada_produk' => $request->ada_produk,
            'ada_eduwisata' => $request->ada_eduwisata,
            'ada_jadwal' => $request->ada_jadwal,
            'bg_utama' => $bg_utama_name,
            'bg_kabar_1' => $bg_kabar_1_name,
            'bg_kabar_2' => $bg_kabar_2_name,
            'bg_kabar_3' => $bg_kabar_3_name,
            'bg_kabar_4' => $bg_kabar_4_name,
            'bg_data_kependudukan' => $bg_data_kependudukan_name,
            'bg_data_perumahan' => $bg_data_perumahan_name,
            'bg_data_kesehatan' => $bg_data_kesehatan_name,
            'bg_data_pendidikan' => $bg_data_pendidikan_name,
            'facebook_username' => $request->facebook_username,
            'instagram_username' => $request->instagram_username,
            'twitter_username' => $request->twitter_username,
            'youtube_username' => $request->youtube_username,
            'facebook_url' => $request->facebook_url,
            'instagram_url' => $request->instagram_url,
            'twitter_url' => $request->twitter_url,
            'youtube_url' => $request->youtube_url,
            'maps_desa' => $request->maps_desa,
            'maps_kantor_desa' => $request->maps_kantor_desa,
        ]);
        
        return redirect()->route('admin-environment')->with('success', 'Website berhasil diperbarui.');
    }
}
