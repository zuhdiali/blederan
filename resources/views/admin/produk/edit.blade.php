@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{url('admin-update-produk',$produk->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="card-header">
                            <div class="card-title">Edit Produk</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('nama_produk') ? 'has-error has-feedback' : ''}}">
                                        <label for="namaProduk">Nama Produk</label>
                                        <input
                                            type="text"
                                            class="form-control form-control"
                                            id="namaProduk"
                                            placeholder="Masukkan nama produk"
                                            name="nama_produk"
                                            value="{{ $produk->nama_produk }}"
                                        />
                                        @if ($errors->has('nama_produk'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('nama_produk') }}</small>
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
                                                placeholder="Masukkan harga produk"
                                                min="0" 
                                                max="1000000000"
                                                value="{{ $produk->harga }}"
                                            />
                                        </div>
                                        @if ($errors->has('harga'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('harga') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('satuan') ? 'has-error has-feedback' : ''}}">
                                        <label for="satuan">Satuan</label>
                                        <input
                                            type="text"
                                            class="form-control form-control"
                                            id="satuan"
                                            placeholder="Satuan harga produk. Misal: pcs, kg, box"
                                            name="satuan"
                                            value="{{ $produk->satuan }}"
                                        />
                                        @if ($errors->has('satuan'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('satuan') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('stok') ? 'has-error has-feedback' : ''}}">
                                        <label for="stok">Stok produk</label>
                                        <input
                                            type="number"
                                            class="form-control form-control"
                                            id="stok"
                                            placeholder="Sisa stok produk"
                                            name="stok"
                                            min="0"
                                            max="1000000000"
                                            value="{{ $produk->stok }}"
                                        />
                                        @if ($errors->has('stok'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('stok') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('gambar_produk') ? 'has-error has-feedback' : ''}}">
                                        <label for="gambar_produk">Gambar produk</label>
                                        <br>
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="gambar_produk"
                                            name="gambar_produk"
                                        />
                                        @if ($errors->has('gambar_produk'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('gambar_produk') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('nama_penjual') ? 'has-error has-feedback' : ''}}">
                                        <label for="nama_penjual">Nama Penjual</label>
                                        <input
                                            type="text"
                                            class="form-control form-control"
                                            id="nama_penjual"
                                            placeholder="Masukkan nama penjual"
                                            name="nama_penjual"
                                            value="{{ $produk->nama_penjual }}"
                                        />
                                        @if ($errors->has('nama_penjual'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('nama_penjual') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="kontak_penjual">Kontak Penjual</label>
                                        <input
                                            type="text"
                                            class="form-control form-control"
                                            id="kontak_penjual"
                                            placeholder="Contoh: 081234567890"
                                            name="kontak_penjual"
                                            value="{{ $produk->kontak_penjual }}"
                                        />
                                        @if ($errors->has('kontak_penjual'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('kontak_penjual') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Produk</label>
                                        <textarea class="form-control" id="comment" rows="5" name="deskripsi" placeholder="Masukkan deskripsi produk (opsional)">{{ $produk->deskripsi }}</textarea>
                                        @if ($errors->has('deskripsi'))
                                        <small id="emailHelp" class="form-text text-muted">{{ $errors->first('deskripsi') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Edit Produk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
