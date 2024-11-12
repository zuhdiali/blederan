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
                                    <div class="form-group {{$errors->has('judul') ? 'has-error has-feedback' : ''}}">
                                        <label for="judulInformasi">
                                           Judul Kegiatan
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control "
                                            id="judulInformasi"
                                            placeholder="Masukkan judul kabar / asal pengunjung eduwisata"
                                            name="judul"
                                            value="{{ $informasi->judul }}"
                                        />
                                        
                                        @if ($errors->has('judul'))
                                        <small class="form-text text-muted">{{ $errors->first('judul') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group {{$errors->has('instansi_terlibat') ? 'has-error has-feedback' : ''}}">
                                        <label for="instansi_terlibat">
                                           Instansi / Kelompok Terlibat
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control "
                                            id="instansi_terlibat"
                                            placeholder="Asal instansi ... (Misal: BPS, Diskominfo, PKK)"
                                            name="instansi_terlibat"
                                            value="{{ $informasi->instansi_terlibat }}"
                                        />
                                        
                                        @if ($errors->has('instansi_terlibat'))
                                        <small class="form-text text-muted">{{ $errors->first('instansi_terlibat') }}</small>
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
                                        <small class="form-text text-muted">{{ $errors->first('gambar') }}</small>
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
                                            value="{{ substr($informasi->tanggal, 0, 10) }}"
                                        />
                                        @if ($errors->has('tanggal'))
                                        <small class="form-text text-muted">{{ $errors->first('tanggal') }}</small>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                          <div class="form-group {{$errors->has('jam_mulai') ? 'has-error has-feedback' : ''}}">
                                            <label for="jam_mulai">Jam Mulai Kegiatan</label>
                                            <input
                                              type="time"
                                              class="form-control"
                                              id="jam_mulai"
                                              name="jam_mulai"
                                              value="{{ substr($informasi->tanggal, 11, 5) }}"
                                            />
                                            @if ($errors->has('jam_mulai'))
                                            <small class="form-text text-muted">{{ $errors->first('jam_mulai') }}</small>
                                            @endif
                                          </div>
                                        </div>
                                        <div class="col">
                                          <div class="form-group {{$errors->has('jam_selesai') ? 'has-error has-feedback' : ''}}">
                                            <label for="jam_selesai">Jam Selesai Kegiatan</label>
                                            <input
                                                type="time"
                                                class="form-control"
                                                id="jam_selesai"
                                                name="jam_selesai"
                                                value="{{ substr($informasi->tanggal_selesai, 11, 5) }}"
                                            />
                                            @if ($errors->has('jam_selesai'))
                                            <small class="form-text text-muted">{{ $errors->first('jam_selesai') }}</small>
                                            @endif
                                          </div>
                                        </div>
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
                                        <small class="form-text text-muted">{{ $errors->first('jumlah') }}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi" placeholder="Masukkan deskripsi...">{{ $informasi->deskripsi }}</textarea>
                                        @if ($errors->has('deskripsi'))
                                        <small class="form-text text-muted">{{ $errors->first('deskripsi') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Edit Informasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
