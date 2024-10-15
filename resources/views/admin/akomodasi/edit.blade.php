@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{url('admin-update-akomodasi',$akomodasi->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="card-header">
                            <div class="card-title">Edit Akomodasi</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('nama_akomodasi') ? 'has-error has-feedback' : ''}}">
                                        <label for="namaAkomodasi">Nama Akomodasi</label>
                                        <input
                                            type="text"
                                            class="form-control form-control"
                                            id="namaAkomodasi"
                                            placeholder="Masukkan nama akomodasi"
                                            name="nama_akomodasi"
                                            value="{{ $akomodasi->nama_akomodasi }}"
                                        />
                                        @if ($errors->has('nama_akomodasi'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('nama_akomodasi') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('harga') ? 'has-error has-feedback' : ''}}">
                                        <label for="harga">Harga</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp</span>
                                            <input
                                                type="number"
                                                class="form-control"
                                                aria-label="Amount (to the nearest dollar)"
                                                name="harga"
                                                id="harga"
                                                placeholder="Masukkan harga akomodasi"
                                                min="0" 
                                                max="1000000000"
                                                value="{{ $akomodasi->harga }}"
                                            />
                                        </div>
                                        @if ($errors->has('harga'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('harga') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('stok') ? 'has-error has-feedback' : ''}}">
                                        <label for="stok">Stok akomodasi</label>
                                        <input
                                            type="number"
                                            class="form-control form-control"
                                            id="stok"
                                            placeholder="Sisa stok akomodasi"
                                            name="stok"
                                            min="0"
                                            max="1000000000"
                                            value="{{ $akomodasi->stok }}"
                                        />
                                        @if ($errors->has('stok'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('stok') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('gambar_akomodasi') ? 'has-error has-feedback' : ''}}">
                                        <label for="gambar_akomodasi">Gambar akomodasi</label>
                                        <br>
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="gambar_akomodasi"
                                            name="gambar_akomodasi"
                                        />
                                        @if ($errors->has('gambar_akomodasi'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('gambar_akomodasi') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('nama_pemilik') ? 'has-error has-feedback' : ''}}">
                                        <label for="nama_pemilik">Nama Pemilik</label>
                                        <input
                                            type="text"
                                            class="form-control form-control"
                                            id="nama_pemilik"
                                            placeholder="Masukkan nama pemilik"
                                            name="nama_pemilik"
                                            value="{{ $akomodasi->nama_pemilik }}"
                                        />
                                        @if ($errors->has('nama_pemilik'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('nama_pemilik') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="kontak_pemilik">Kontak Pemilik</label>
                                        <input
                                            type="text"
                                            class="form-control form-control"
                                            id="kontak_pemilik"
                                            placeholder="Contoh: 081234567890"
                                            name="kontak_pemilik"
                                            value="{{ $akomodasi->kontak_pemilik }}"
                                        />
                                        @if ($errors->has('kontak_pemilik'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('kontak_pemilik') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Akomodasi</label>
                                        <textarea class="form-control" id="comment" rows="5" name="deskripsi" placeholder="Masukkan deskripsi akomodasi (opsional)">{{ $akomodasi->deskripsi }}</textarea>
                                        @if ($errors->has('deskripsi'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('deskripsi') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Edit Akomodasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
