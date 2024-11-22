@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">Manajemen Website</h3>
        <h6 class="op-7 mb-2">Halaman Pengelolaan Website </h6>
      </div>
      {{-- @if(Auth::user()->id_desa == "999999")
      <div class="ms-md-auto py-2 py-md-0">
        <a href="{{route('admin-tambah-environment')}}" class="btn btn-primary btn-round">Tambah website</a>
      </div>
      @endif --}}
    </div>

    <div class="row">
      <div class="col">
        <div class="card p-5">
          <h3 class=" mb-5">Formulir Update Website</h3>
            <form action="{{ url('admin-update-environment', Auth::user()->id_desa) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3 row form-group {{$errors->has('nama_desa') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="nama_desa" class="form-label"><h5>Nama Desa</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="nama_desa" name="nama_desa" value="{{ $environment->nama_desa }}" required>
                  @if ($errors->has('nama_desa'))
                    <small  class="form-text text-muted">{{ $errors->first('nama_desa') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('tagline') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="tagline" class="form-label"><h5>Tagline</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="tagline" name="tagline" value="{{ $environment->tagline }}" required>
                  @if ($errors->has('tagline'))
                    <small  class="form-text text-muted">{{ $errors->first('tagline') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('gambar_logo') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="gambar_logo" class="form-label"><h5>Gambar Logo</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar logo saat ini:
                      <img src="{{asset('images/'.$environment->gambar_logo)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="gambar_logo" name="gambar_logo" value="{{ $environment->gambar_logo }}">
                      @if ($errors->has('gambar_logo'))
                        <small  class="form-text text-muted">{{ $errors->first('gambar_logo') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('warna_font_logo') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="warna_font_logo" class="form-label"><h5>Warna Font di Logo</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="warna_font_logo" name="warna_font_logo" value="{{ $environment->warna_font_logo }}" required>
                  @if ($errors->has('warna_font_logo'))
                    <small  class="form-text text-muted">{{ $errors->first('warna_font_logo') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('ada_sejarah') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="ada_sejarah" class="form-label"><h5>Ketersediaan Sejarah</h5></label>
                </div>
                <div class="col-md-9">
                  <select class="form-control" id="ada_sejarah" name="ada_sejarah" required>
                    <option value="1" {{ $environment->ada_sejarah == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $environment->ada_sejarah == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                  </select>
                  @if ($errors->has('ada_sejarah'))
                    <small  class="form-text text-muted">{{ $errors->first('ada_sejarah') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('ada_peta') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="ada_peta" class="form-label"><h5>Ketersediaan Peta</h5></label>
                </div>
                <div class="col-md-9">
                  <select class="form-control" id="ada_peta" name="ada_peta" required>
                    <option value="1" {{ $environment->ada_peta == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $environment->ada_peta == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                  </select>
                  @if ($errors->has('ada_peta'))
                    <small  class="form-text text-muted">{{ $errors->first('ada_peta') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('ada_publikasi') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="ada_publikasi" class="form-label"><h5>Ketersediaan Publikasi</h5></label>
                </div>
                <div class="col-md-9">
                  <select class="form-control" id="ada_publikasi" name="ada_publikasi" required>
                    <option value="1" {{ $environment->ada_publikasi == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $environment->ada_publikasi == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                  </select>
                  @if ($errors->has('ada_publikasi'))
                    <small  class="form-text text-muted">{{ $errors->first('ada_publikasi') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('ada_akomodasi') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="ada_akomodasi" class="form-label"><h5>Ketersediaan Akomodasi</h5></label>
                </div>
                <div class="col-md-9">
                  <select class="form-control" id="ada_akomodasi" name="ada_akomodasi" required>
                    <option value="1" {{ $environment->ada_akomodasi == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $environment->ada_akomodasi == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                  </select>
                  @if ($errors->has('ada_akomodasi'))
                    <small  class="form-text text-muted">{{ $errors->first('ada_akomodasi') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('ada_produk') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="ada_produk" class="form-label"><h5>Ketersediaan Produk</h5></label>
                </div>
                <div class="col-md-9">
                  <select class="form-control" id="ada_produk" name="ada_produk" required>
                    <option value="1" {{ $environment->ada_produk == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $environment->ada_produk == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                  </select>
                  @if ($errors->has('ada_produk'))
                    <small  class="form-text text-muted">{{ $errors->first('ada_produk') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('ada_eduwisata') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="ada_eduwisata" class="form-label"><h5>Ketersediaan Eduwisata</h5></label>
                </div>
                <div class="col-md-9">
                  <select class="form-control" id="ada_eduwisata" name="ada_eduwisata" required>
                    <option value="1" {{ $environment->ada_eduwisata == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $environment->ada_eduwisata == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                  </select>
                  @if ($errors->has('ada_eduwisata'))
                    <small  class="form-text text-muted">{{ $errors->first('ada_eduwisata') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('ada_jadwal') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="ada_jadwal" class="form-label"><h5>Ketersediaan Jadwal Eduwisata</h5></label>
                </div>
                <div class="col-md-9">
                  <select class="form-control" id="ada_jadwal" name="ada_jadwal" required>
                    <option value="1" {{ $environment->ada_jadwal == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $environment->ada_jadwal == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                  </select>
                  @if ($errors->has('ada_jadwal'))
                    <small  class="form-text text-muted">{{ $errors->first('ada_jadwal') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('sejarah') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="sejarah" class="form-label"><h5>Teks Sejarah</h5></label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control" id="sejarah" name="sejarah" rows="5" required>{{ $environment->sejarah }}</textarea>
                  @if ($errors->has('sejarah'))
                    <small  class="form-text text-muted">{{ $errors->first('sejarah') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('peta') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="peta" class="form-label"><h5>Teks Peta</h5></label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control" id="peta" name="peta" rows="5" required>{{ $environment->peta }}</textarea>
                  @if ($errors->has('peta'))
                    <small  class="form-text text-muted">{{ $errors->first('peta') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('facebook_username') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="facebook_username" class="form-label"><h5>Facebook Username</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="facebook_username" name="facebook_username" value="{{ $environment->facebook_username }}" required>
                  @if ($errors->has('facebook_username'))
                    <small  class="form-text text-muted">{{ $errors->first('facebook_username') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('facebook_url') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="facebook_url" class="form-label"><h5>Facebook URL</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="url" class="form-control" id="facebook_url" name="facebook_url" value="{{ $environment->facebook_url }}" required>
                  @if ($errors->has('facebook_url'))
                    <small  class="form-text text-muted">{{ $errors->first('facebook_url') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('instagram_username') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="instagram_username" class="form-label"><h5>Instagram Username</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="instagram_username" name="instagram_username" value="{{ $environment->instagram_username }}" required>
                  @if ($errors->has('instagram_username'))
                    <small  class="form-text text-muted">{{ $errors->first('instagram_username') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('instagram_url') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="instagram_url" class="form-label"><h5>Instagram URL</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="url" class="form-control" id="instagram_url" name="instagram_url" value="{{ $environment->instagram_url }}" required>
                  @if ($errors->has('instagram_url'))
                    <small  class="form-text text-muted">{{ $errors->first('instagram_url') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('twitter_username') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="twitter_username" class="form-label"><h5>Twitter Username</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="twitter_username" name="twitter_username" value="{{ $environment->twitter_username }}" required>
                  @if ($errors->has('twitter_username'))
                    <small  class="form-text text-muted">{{ $errors->first('twitter_username') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('twitter_url') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="twitter_url" class="form-label"><h5>Twitter URL</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="url" class="form-control" id="twitter_url" name="twitter_url" value="{{ $environment->twitter_url }}" required>
                  @if ($errors->has('twitter_url'))
                    <small  class="form-text text-muted">{{ $errors->first('twitter_url') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('youtube_username') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="youtube_username" class="form-label"><h5>Youtube Username</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="youtube_username" name="youtube_username" value="{{ $environment->youtube_username }}" required>
                  @if ($errors->has('youtube_username'))
                    <small  class="form-text text-muted">{{ $errors->first('youtube_username') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('youtube_url') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="youtube_url" class="form-label"><h5>Youtube URL</h5></label>
                </div>
                <div class="col-md-9">
                  <input type="url" class="form-control" id="youtube_url" name="youtube_url" value="{{ $environment->youtube_url }}" required>
                  @if ($errors->has('youtube_url'))
                    <small  class="form-text text-muted">{{ $errors->first('youtube_url') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('maps_desa') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="maps_desa" class="form-label"><h5>Google Maps Embed Wilayah Desa</h5></label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control" id="maps_desa" name="maps_desa" rows="4" required>{{ $environment->maps_desa }}</textarea>
                  @if ($errors->has('maps_desa'))
                    <small  class="form-text text-muted">{{ $errors->first('maps_desa') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('maps_kantor_desa') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="maps_kantor_desa" class="form-label"><h5>Google Maps Embed Kantor Desa</h5></label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control" id="maps_kantor_desa" name="maps_kantor_desa" rows="4"  required>{{ $environment->maps_kantor_desa }}</textarea>
                  @if ($errors->has('maps_kantor_desa'))
                    <small  class="form-text text-muted">{{ $errors->first('maps_kantor_desa') }}</small>
                  @endif
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_utama') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_utama" class="form-label"><h5>Background Utama</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_utama)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_utama" name="bg_utama" />
                      @if ($errors->has('bg_utama'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_utama') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_kabar_1') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_kabar_1" class="form-label"><h5>Background Kabar 1</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_kabar_1)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_kabar_1" name="bg_kabar_1" />
                      @if ($errors->has('bg_kabar_1'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_kabar_1') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_kabar_2') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_kabar_2" class="form-label"><h5>Background Kabar 2</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_kabar_2)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_kabar_2" name="bg_kabar_2" />
                      @if ($errors->has('bg_kabar_2'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_kabar_2') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_kabar_3') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_kabar_3" class="form-label"><h5>Background Kabar 3</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_kabar_3)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_kabar_3" name="bg_kabar_3" />
                      @if ($errors->has('bg_kabar_3'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_kabar_3') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_kabar_4') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_kabar_4" class="form-label"><h5>Background Kabar 4</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_kabar_4)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_kabar_4" name="bg_kabar_4" value="{{ $environment->bg_kabar_4 }}">
                      @if ($errors->has('bg_kabar_4'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_kabar_4') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_data_kependudukan') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_data_kependudukan" class="form-label"><h5>Background Data Kependudukan</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_data_kependudukan)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_data_kependudukan" name="bg_data_kependudukan" >
                      @if ($errors->has('bg_data_kependudukan'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_data_kependudukan') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_data_perumahan') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_data_perumahan" class="form-label"><h5>Background Data Perumahan</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_data_perumahan)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_data_perumahan" name="bg_data_perumahan" />
                      @if ($errors->has('bg_data_perumahan'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_data_perumahan') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_data_kesehatan') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_data_kesehatan" class="form-label"><h5>Background Data Kesehatan</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_data_kesehatan)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_data_kesehatan" name="bg_data_kesehatan" />
                      @if ($errors->has('bg_data_kesehatan'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_data_kesehatan') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="mb-3 row form-group {{$errors->has('bg_data_pendidikan') ? 'has-error has-feedback' : ''}}">
                <div class="col-md-3">
                  <label for="bg_data_pendidikan" class="form-label"><h5>Background Data Pendidikan</h5></label>
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                      Gambar saat ini:
                      <img src="{{asset('images/'.$environment->bg_data_pendidikan)}}" alt="Logo Saat Ini" height="50" />
                    </div>
                    <div class="col-md-8">
                      Silakan unggah gambar baru jika ingin mengganti gambar logo.
                      <input type="file" class="form-control" id="bg_data_pendidikan" name="bg_data_pendidikan" />
                      @if ($errors->has('bg_data_pendidikan'))
                        <small  class="form-text text-muted">{{ $errors->first('bg_data_pendidikan') }}</small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <button type="button" class="btn btn-primary" id="konfirmasi-update">Perbarui Website</button>
            </form>
        </div>
      </div>
    </div>

    {{-- <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Website</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="multi-filter-select"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th style="width: 10%">Aksi</th>
                    <th scope="col">Nama Desa</th>
                    <th scope="col">Kode Desa</th>
                    <th scope="col">Tagline</th>
                    <th scope="col">Gambar Logo</th>
                    <th scope="col">Gambar Logo dan Nama Desa</th>
                    <th scope="col">Ketersediaan Profil</th>
                    <th scope="col">Teks Profil</th>
                    <th scope="col">Ketersediaan Sejarah</th>
                    <th scope="col">Teks Sejarah</th>
                    <th scope="col">Ketersediaan Peta</th>
                    <th scope="col">Teks Peta</th>
                    <th scope="col">Ketersediaan Publikasi</th>
                    <th scope="col">Ketersediaan Akomodasi</th>
                    <th scope="col">Ketersediaan Produk</th>
                    <th scope="col">Ketersediaan Eduwisata</th>
                    <th scope="col">Ketersediaan Jadwal Eduwisata</th>
                    <th scope="col">Facebook Username</th>
                    <th scope="col">Instagram Username</th>
                    <th scope="col">Twitter Username</th>
                    <th scope="col">Youtube Username</th>
                    <th scope="col">Facebook URL</th>
                    <th scope="col">Instagram URL</th>
                    <th scope="col">Twitter URL</th>
                    <th scope="col">Youtube URL</th>
                    <th scope="col">Embed Maps Wilayah Desa</th>
                    <th scope="col">Embed Maps Kantor Desa</th>
                    <th scope="col">Background Utama</th>
                    <th scope="col">Background Kabar 1</th>
                    <th scope="col">Background Kabar 2</th>
                    <th scope="col">Background Kabar 3</th>
                    <th scope="col">Background Kabar 4</th>
                    <th scope="col">Background Data 1</th>
                    <th scope="col">Background Data 2</th>
                    <th scope="col">Background Data 3</th>
                    <th scope="col">Background Data 4</th>
                  <th scope="col">Form</th>

                  </tr>
                </thead>
                <tbody>
                  <!-- Modal -->
                  <tr>
                    <div class="modal fade" id="{{'exampleModal'.$environment->id}}" tabindex="-1" aria-labelledby="{{'exampleModalLabel'.$environment->id}}" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="{{'exampleModalLabel'.$environment->id}}">Hapus Website</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah Anda yakin ingin menghapus Website <strong>{{$environment->name}}</strong> ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                            <form action="{{url('admin-hapus-environment/'.$environment->id)}}">
                              <button type="submit" class="btn btn-danger">Hapus Website</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <td>
                      <div class="form-button-action">
                        <form action="{{url('admin-edit-environment', $environment->id)}}">
                          <button
                            type="submit"
                            data-bs-toggle="tooltip"
                            title=""
                            class="btn btn-link btn-primary btn-lg"
                            data-original-title="Edit Environment"
                          >
                            <i class="fa fa-edit"></i>
                          </button>
                        </form>
                        <button
                          type="button"
                          title=""
                          class="btn btn-link btn-danger"
                          data-bs-toggle="modal" data-bs-target="{{'#exampleModal'.$environment->id}}" title="Hapus"
                          data-original-title="Hapus"
                        >
                          <i class="fa fa-times"></i>
                        </button>
                      </div>
                    </td>
                    <td>{{ $environment->nama_desa }}</td>
                    <td>{{ $environment->kode_desa }}</td>
                    <td>{{ $environment->tagline }}</td>
                    <td><img src="{{ asset('images/' . $environment->gambar_logo) }}" alt="Logo" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->gambar_logo_nama_desa) }}" alt="Logo and Name" width="50"></td>
                    <td>{{ $environment->ada_profil == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $environment->profil }}</td>
                    <td>{{ $environment->ada_sejarah == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $environment->sejarah }}</td>
                    <td>{{ $environment->ada_peta == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $environment->peta }}</td>
                    <td>{{ $environment->ada_publikasi == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $environment->ada_akomodasi == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $environment->ada_produk == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $environment->ada_eduwisata == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $environment->ada_jadwal == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $environment->facebook_username }}</td>
                    <td>{{ $environment->instagram_username }}</td>
                    <td>{{ $environment->twitter_username }}</td>
                    <td>{{ $environment->youtube_username }}</td>
                    <td>{{ $environment->facebook_url }}</td>
                    <td>{{ $environment->instagram_url }}</td>
                    <td>{{ $environment->twitter_url }}</td>
                    <td>{{ $environment->youtube_url }}</td>
                    <td>{{ $environment->maps_desa }}</td>
                    <td>{{ $environment->maps_kantor_desa }}</td>
                    <td><img src="{{ asset('images/' . $environment->bg_utama) }}" alt="Background Utama" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->bg_kabar_1) }}" alt="Background Kabar 1" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->bg_kabar_2) }}" alt="Background Kabar 2" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->bg_kabar_3) }}" alt="Background Kabar 3" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->bg_kabar_4) }}" alt="Background Kabar 4" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->bg_data_1) }}" alt="Background Data 1" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->bg_data_2) }}" alt="Background Data 2" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->bg_data_3) }}" alt="Background Data 3" width="50"></td>
                    <td><img src="{{ asset('images/' . $environment->bg_data_4) }}" alt="Background Data 4" width="50"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div> --}}

  </div>
</div>
@endsection

@section('script')
<script>
  //== Class definition
  var SweetAlert2Demo = (function () {
    //== Demos
    var initDemos = function () {
      $("#konfirmasi-update").click(function (e) {
        swal({
          title: "Apakah Anda Yakin?",
          text: "Semua perubahan akan disimpan dan tampilan website akan mengalami perubahan!",
          type: "warning",
          buttons: {
            confirm: {
              text: "Ya, Perbarui Website!",
              className: "btn btn-success",
            },
            cancel: {
              visible: true,
              text: "Batalkan!",
              className: "btn btn-danger",
            },
          },
        }).then((submit) => {
          if (submit) {
            $(this).closest("form").submit();
          } else {
            swal.close();
          }
        });
      });
    };

    return {
      //== Init
      init: function () {
        initDemos();
      },
    };
  })();

  //== Class Initialization
  jQuery(document).ready(function () {
    SweetAlert2Demo.init();
  });
</script>
@endsection