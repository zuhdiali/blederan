@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form action="{{route('admin-simpan-informasi')}}" method="POST" enctype="multipart/form-data">
          @csrf <!-- {{ csrf_field() }} -->
            <div class="card-header">
              <div class="card-title">Tambah Informasi</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1"
                      >Kategori informasi</label
                    >
                    <select
                      class="form-select"
                      id="exampleFormControlSelect1"
                      name="kategori"
                    >
                      <option value="">(Pilih salah satu)</option>
                      <option value="kabar" {{ old('kategori') == 'kabar' ? 'selected' : '' }}>Kabar</option>
                      <option value="eduwisata" {{ old('kategori') == 'eduwisata' ? 'selected' : '' }}>Eduwisata</option>
                    </select>
                    @if ($errors->has('kategori'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group {{$errors->has('nama_informasi') ? 'has-error has-feedback' : ''}}">
                    <label for="judulInformasi">Judul Kabar / Asal Pengunjung Eduwisata</label>
                    <input
                      type="text"
                      class="form-control "
                      id="judulInformasi"
                      placeholder="Masukkan judul kabar / asal pengunjung eduwisata"
                      name="nama_informasi"
                      value="{{ old('nama_informasi') }}"
                    />
                    <small class="form-text text-muted">Jika kategori kabar: Masukkan judul kabar. Jika kategori eduwisata: Masukkan asal pengunjung eduwisata</small>
                    @if ($errors->has('nama_informasi'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>

                  <div class="form-group {{$errors->has('gambar') ? 'has-error has-feedback' : ''}}">
                    <label for="gambar">Gambar</label>
                    <br>
                    <input
                      type="file"
                      class="form-control"
                      id="gambar"
                      name="gambar"
                    />
                    @if ($errors->has('gambar'))
                    <small   class="form-text text-muted">{{$error('gambar');}}</small>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{$errors->has('tanggal') ? 'has-error has-feedback' : ''}}">
                    <label for="tanggal">Tanggal</label>
                    <input
                      type="date"
                      class="form-control"
                      id="tanggal"
                      name="tanggal"
                      value="{{ old('tanggal') }}"
                    />
                    @if ($errors->has('tanggal'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group {{$errors->has('jumlah') ? 'has-error has-feedback' : ''}}">
                    <label for="jumlah">Jumlah</label>
                    <div class="input-group mb-3">
                      <input
                        type="number"
                        class="form-control"
                        name="jumlah"
                        id="jumlah"
                        placeholder="Masukkan jumlah orang dalam kegiatan tersebut"
                        value="{{ old('jumlah') }}"
                        min="0"
                        max="99999"
                      />
                    </div>
                    @if ($errors->has('jumlah'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi" placeholder="Masukkan deskripsi...">{{ old('deskripsi') }}</textarea>
                    @if ($errors->has('deskripsi'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Tambah Produk</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
