@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">Daftar publikasi</h3>
        <h6 class="op-7 mb-2">Daftar publikasi yang tersedia</h6>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        {{-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> --}}
        <a href="{{route('admin-tambah-publikasi')}}" class="btn btn-primary btn-round">Tambah Publikasi</a>
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
                  <i class="fas fa-luggage-cart"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Total Publikasi</p>
                  <h4 class="card-title">{{count($publikasis);}}</h4>
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
            <h4 class="card-title">Daftar Publikasi</h4>
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
                    <th scope="col">Nama Publikasi</th>
                    <th scope="col">File</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th scope="col">Aksi</th>
                    <th scope="col">Nama Publikasi</th>
                    <th scope="col">File</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($publikasis as $publikasi)
                  <!-- Modal -->
                  <tr>
                    <div class="modal fade" id="{{'exampleModal'.$publikasi->id}}" tabindex="-1" aria-labelledby="{{'exampleModalLabel'.$publikasi->id}}" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="{{'exampleModalLabel'.$publikasi->id}}">Hapus Publikasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah Anda yakin ingin menghapus Publikasi <strong>{{$publikasi->nama_publikasi}}</strong> ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                            <form action="{{url('admin-hapus-publikasi/'.$publikasi->id)}}">
                              <button type="submit" class="btn btn-danger">Hapus Publikasi</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <td>
                      <div class="form-button-action">
                        <form action="{{url('admin-edit-publikasi', $publikasi->id)}}">
                          <button
                            type="submit"
                            data-bs-toggle="tooltip"
                            title=""
                            class="btn btn-link btn-primary btn-lg"
                            data-original-title="Edit Publikasi"
                          >
                            <i class="fa fa-edit"></i>
                          </button>
                        </form>
                        <button
                          type="button"
                          title=""
                          class="btn btn-link btn-danger"
                          data-bs-toggle="modal" data-bs-target="{{'#exampleModal'.$publikasi->id}}" title="Hapus"
                          data-original-title="Hapus Publikasi"
                        >
                          <i class="fa fa-times"></i>
                        </button>
                      </div>
                    </td>
                    <th scope="row">{{$publikasi->nama_publikasi}}</th>
                    <td>
                        {{-- <a href="{{asset('uploads/publikasi/'.$publikasi->file)}}" target="_blank">{{$publikasi->file_publikasi}}</a> --}}
                        <a href="{{route('admin-download-publikasi', $publikasi->id)}}" class="btn btn-success btn-sm" target="_blank">Lihat</a>
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
