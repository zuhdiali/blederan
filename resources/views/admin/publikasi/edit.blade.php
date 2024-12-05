@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form action="{{url('admin-update-publikasi',$publikasi->id)}}" method="POST" enctype="multipart/form-data">
          @csrf <!-- {{ csrf_field() }} -->
            <div class="card-header">
              <div class="card-title">Tambah Publikasi</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{$errors->has('nama_publikasi') ? 'has-error has-feedback' : ''}}">
                    <label for="nama_publikasi">Nama Publikasi</label>
                    <input
                      type="text"
                      class="form-control form-control"
                      id="nama_publikasi"
                      placeholder="Masukkan nama publikasi"
                      name="nama_publikasi"
                      value="{{ $publikasi->nama_publikasi }}"
                    />
                    @if ($errors->has('nama_publikasi'))
                    <small  class="form-text text-muted">{{ $errors->first('nama_publikasi') }}</small>
                    @endif
                  </div>
                  <div class="form-group {{$errors->has('file_publikasi') ? 'has-error has-feedback' : ''}}">
                    <label for="file_publikasi">File publikasi</label>
                    <br>
                    <input
                      type="file"
                      class="form-control"
                      id="file_publikasi"
                      name="file_publikasi"
                    />
                    @if ($errors->has('file_publikasi'))
                    <small  class="form-text text-muted">{{ $errors->first('file_publikasi') }}</small>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Edit Publikasi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
