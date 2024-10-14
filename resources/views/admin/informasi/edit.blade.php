@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{url('admin-update-informasi', $informasi->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- {{ csrf_field() }} -->
                        <div class="card-header">
                            <div class="card-title">
                                @if ($informasi->kategori == 'kabar')
                                Edit Kabar
                                @else
                                Edit Eduwisata
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('nama_informasi') ? 'has-error has-feedback' : ''}}">
                                        <label for="judulInformasi">
                                            @if ($informasi->kategori == 'kabar')
                                            Judul Kabar
                                            @else
                                            Asal Pengunjung Eduwisata
                                            @endif
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control "
                                            id="judulInformasi"
                                            placeholder="Masukkan judul kabar / asal pengunjung eduwisata"
                                            name="nama_informasi"
                                            value="{{ $informasi->nama_informasi }}"
                                        />
                                        
                                        @if ($errors->has('nama_informasi'))
                                        <small class="form-text text-muted">Please provide a valid information.</small>
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
                                        <small class="form-text text-muted">{{$error('gambar');}}</small>
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
                                            value="{{ $informasi->tanggal }}"
                                        />
                                        @if ($errors->has('tanggal'))
                                        <small class="form-text text-muted">Please provide a valid information.</small>
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
                                                value="{{ $informasi->jumlah }}"
                                                min="0"
                                                max="99999"
                                            />
                                        </div>
                                        @if ($errors->has('jumlah'))
                                        <small class="form-text text-muted">Please provide a valid information.</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi" placeholder="Masukkan deskripsi...">{{ $informasi->deskripsi }}</textarea>
                                        @if ($errors->has('deskripsi'))
                                        <small class="form-text text-muted">Please provide a valid information.</small>
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
