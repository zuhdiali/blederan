@extends('layouts.admin')

@section('content')

<div class="container">
      <!-- Jika ada session succes -->
  @if (session('success'))
  <div class="alert alert-success alert-dismissible fade show w-50 my-2 mx-5" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <!-- Jika ada session succes -->

  <!-- Jika ada session error-->
  @if (session('error'))
  <div class="alert alert-warning alert-dismissible fade show w-50 my-2 mx-5" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <!-- Jika ada session error-->

  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">Daftar kabar</h3>
        <h6 class="op-7 mb-2">Daftar kabar yang tersedia</h6>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        {{-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> --}}
        <a href="{{route('admin-tambah-informasi')}}" class="btn btn-primary btn-round">Tambah Kabar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-primary bubble-shadow-small"
                >
                  <i class="fas fa-globe"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Total Kabar</p>
                  <h4 class="card-title">{{count($kabars);}}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
      </div>
      <div class="col-sm-6 col-md-3">
      </div>
      <div class="col-sm-6 col-md-3">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Kabar</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th style="width: 10%">Aksi</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Instansi Terlibat</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th scope="col">Aksi</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Instansi Terlibat</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($kabars as $kabar)
                  <!-- Modal -->
                  <tr>
                    <div class="modal fade" id="{{'exampleModal'.$kabar->id}}" tabindex="-1" aria-labelledby="{{'exampleModalLabel'.$kabar->id}}" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="{{'exampleModalLabel'.$kabar->id}}">Hapus Kabar</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah Anda yakin ingin menghapus kabar <strong>{{$kabar->judul}}</strong> ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                            <form action="{{url('admin-hapus-informasi/'.$kabar->id)}}">
                              <button type="submit" class="btn btn-danger">Hapus Kabar</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <td>
                      <div class="form-button-action">
                        <form action="{{url('admin-edit-informasi', $kabar->id)}}">
                          <button
                            type="submit"
                            data-bs-toggle="tooltip"
                            title=""
                            class="btn btn-link btn-primary btn-lg"
                            data-original-title="Edit Kabar"
                          >
                            <i class="fa fa-edit"></i>
                          </button>
                        </form>
                        <button
                          type="button"
                          title=""
                          class="btn btn-link btn-danger"
                          data-bs-toggle="modal" data-bs-target="{{'#exampleModal'.$kabar->id}}" title="Hapus"
                          data-original-title="Hapus"
                        >
                          <i class="fa fa-times"></i>
                        </button>
                      </div>
                    </td>
                    <th scope="row">{{$kabar->judul}}</th>
                    <td>{{$kabar->instansi_terlibat}}</td>
                    <td>{{$kabar->jumlah}}</td>
                    <td>{{ \Carbon\Carbon::parse($kabar->tanggal)->locale('id')->translatedFormat('d F Y') }}</td>
                    <td>{{$kabar->deskripsi}}</td>
                    <td>
                      <img src="{{asset('uploads/informasi/'.$kabar->gambar)}}" alt="gambar informasi" width="100px">
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
