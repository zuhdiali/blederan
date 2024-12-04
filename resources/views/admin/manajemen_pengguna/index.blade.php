@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">Manajemen Pengguna</h3>
        <h6 class="op-7 mb-2">Kelola Pengguna yang dapat masuk ke halaman admin</h6>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="{{route('daftar')}}" class="btn btn-primary btn-round">Tambah pengguna</a>
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
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Jumlah Pengguna</p>
                  <h4 class="card-title">{{count($users);}}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        {{-- <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-info bubble-shadow-small"
                >
                  <i class="fas fa-user-check"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Subscribers</p>
                  <h4 class="card-title">1303</h4>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="col-sm-6 col-md-3">
        {{-- <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-success bubble-shadow-small"
                >
                  <i class="fas fa-luggage-cart"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Sales</p>
                  <h4 class="card-title">$ 1,345</h4>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="col-sm-6 col-md-3">
        {{-- <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-secondary bubble-shadow-small"
                >
                  <i class="far fa-check-circle"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Order</p>
                  <h4 class="card-title">576</h4>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Daftar Pengguna</h4>
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
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Username</th>
                    <th scope="col">Desa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <!-- Modal -->
                  <tr>
                    <div class="modal fade" id="{{'exampleModal'.$user->id}}" tabindex="-1" aria-labelledby="{{'exampleModalLabel'.$user->id}}" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="{{'exampleModalLabel'.$user->id}}">Hapus Pengguna</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah Anda yakin ingin menghapus Pengguna <strong>{{$user->name}}</strong> ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                            <form action="{{url('admin-hapus-pengguna/'.$user->id)}}">
                              <button type="submit" class="btn btn-danger">Hapus Pengguna</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <td>
                      <div class="form-button-action">
                        <form action="{{url('reset-password', $user->id)}}">
                          <button
                            type="submit"
                            data-bs-toggle="tooltip"
                            title=""
                            class="btn btn-link btn-primary btn-lg"
                            data-original-title="Reset Password"
                          >
                            <i class="fa fa-edit"></i>
                          </button>
                        </form>
                        <button
                          type="button"
                          title=""
                          class="btn btn-link btn-danger"
                          data-bs-toggle="modal" data-bs-target="{{'#exampleModal'.$user->id}}" title="Hapus"
                          data-original-title="Hapus"
                        >
                          <i class="fa fa-times"></i>
                        </button>
                      </div>
                    </td>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->username}}</td>
                    <td>{{$user->desa->nama_desa}}</td>
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
