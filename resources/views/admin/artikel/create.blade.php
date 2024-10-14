@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form action="{{route('admin-simpan-kabar')}}" method="POST" enctype="multipart/form-data">
          @csrf <!-- {{ csrf_field() }} -->
            <div class="card-header">
              <div class="card-title">Tambah Kabar</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{$errors->has('judul') ? 'has-error has-feedback' : ''}}">
                    <label for="judulKabar">Judul Kabar</label>
                    <input
                      type="text"
                      class="form-control "
                      id="judulKabar"
                      placeholder="Masukkan judul kabar"
                      name="judul"
                      value="{{ old('judul') }}"
                    />
                    @if ($errors->has('judul'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group {{$errors->has('penulis') ? 'has-error has-feedback' : ''}}">
                    <label for="penulis">Penulis</label>
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        class="form-control"
                        name="penulis"
                        id="penulis"
                        placeholder="Masukkan penulis kabar"
                        value="{{ old('penulis') }}"
                      />
                    </div>
                    @if ($errors->has('penulis'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group {{$errors->has('tanggal') ? 'has-error has-feedback' : ''}}">
                    <label for="tanggal">Tanggal</label>
                    <input
                      type="date"
                      class="form-control"
                      id="tanggal"
                      placeholder="Masukkan nama penjual"
                      name="tanggal"
                      value="{{ old('tanggal') }}"
                    />
                    @if ($errors->has('tanggal'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="text1">Teks 1</label>
                    <textarea class="form-control" id="text1" rows="10" name="text1" placeholder="Masukkan teks...">{{ old('text1') }}</textarea>
                    @if ($errors->has('text1'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group {{$errors->has('gambar1') ? 'has-error has-feedback' : ''}}">
                    <label for="gambar1">Gambar 1</label>
                    <br>
                    <input
                      type="file"
                      class="form-control"
                      id="gambar1"
                      name="gambar1"
                    />
                    @if ($errors->has('gambar1'))
                    <small   class="form-text text-muted">{{$error('gambar1');}}</small>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">

                  <div class="form-group">
                    <label for="text2">Teks 2</label>
                    <textarea class="form-control" id="text2" rows="7" name="text2" placeholder="Masukkan teks...">{{ old('text2') }}</textarea>
                    @if ($errors->has('text2'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group {{$errors->has('gambar2') ? 'has-error has-feedback' : ''}}">
                    <label for="gambar2">Gambar 2</label>
                    <br>
                    <input
                      type="file"
                      class="form-control"
                      id="gambar2"
                      name="gambar2"
                    />
                    @if ($errors->has('gambar2'))
                    <small   class="form-text text-muted">{{$error('gambar2');}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="text3">Teks 3</label>
                    <textarea class="form-control" id="text3" rows="7" name="text3" placeholder="Masukkan teks...">{{ old('text3') }}</textarea>
                    @if ($errors->has('text3'))
                    <small   class="form-text text-muted">Please provide a valid information.</small>
                    @endif
                  </div>
                  <div class="form-group {{$errors->has('gambar3') ? 'has-error has-feedback' : ''}}">
                    <label for="gambar3">Gambar 3</label>
                    <br>
                    <input
                      type="file"
                      class="form-control"
                      id="gambar3"
                      name="gambar3"
                    />
                    @if ($errors->has('gambar3'))
                    <small   class="form-text text-muted">{{$error('gambar3');}}</small>
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
