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
        <h3 class="fw-bold mb-3">Daftar akomodasi</h3>
        <h6 class="op-7 mb-2">Daftar akomodasi yang tersedia</h6>
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        <a href="{{route('admin-tambah-akomodasi')}}" class="btn btn-primary btn-round">Tambah Akomodasi</a>
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
                  <i class="fas fa-home"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Total Akomodasi</p>
                  <h4 class="card-title">{{count($akomodasis);}}</h4>
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
      <div class="col">
        <div class="card card-round">
          <div class="card-header">
            <div class="card-head-row card-tools-still-right">
              <div class="card-title">Daftar Akomodasi</div>
              <div class="card-tools">
                {{-- <div class="dropdown">
                  <button
                    class="btn btn-icon btn-clean me-0"
                    type="button"
                    id="dropdownMenuButton"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#"
                      >Something else here</a
                    >
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center mb-0">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Aksi</th>
                    <th scope="col" class="sort" data-sort="name">Nama Akomodasi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Nama Pemilik</th>
                    <th scope="col">Kontak Pemilik</th>
                    <th scope="col">Gambar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($akomodasis as $akomodasi)
                    <tr>
                      <td>
                        <div class="d-flex flex-column align-self-center">
                          <div class="p-1">
                            <a href="{{url('admin-edit-akomodasi', $akomodasi->id)}}" class="btn btn-primary" title="Edit">
                              <i class="icon-pencil"></i>
                            </a>
                          </div>
                          <div class="p-1">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="{{'#exampleModal'.$akomodasi->id}}" title="Hapus">
                              <i class="icon-trash"></i>
                            </button>
                          </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="{{'exampleModal'.$akomodasi->id}}" tabindex="-1" aria-labelledby="{{'exampleModalLabel'.$akomodasi->id}}" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="{{'exampleModalLabel'.$akomodasi->id}}">Hapus Akomodasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah Anda yakin ingin menghapus akomodasi <strong>{{$akomodasi->nama_akomodasi}}</strong> dari {{$akomodasi->nama_pemilik}}?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                <form action="{{url('admin-hapus-akomodasi/'.$akomodasi->id)}}">
                                  <button type="submit" class="btn btn-danger">Hapus Akomodasi</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <th scope="row">{{$akomodasi->nama_akomodasi}}</th>
                      <td>{{$akomodasi->harga}}</td>
                      <td>{{$akomodasi->stok}}</td>
                      <td>{{$akomodasi->nama_pemilik}}</td>
                      <td>{{$akomodasi->kontak_pemilik}}</td>
                      <td>
                        <img src="{{asset('uploads/akomodasi/'.$akomodasi->gambar_akomodasi)}}" alt="gambar akomodasi" width="100px">
                      </td>

                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{$akomodasis->links()}}
            </div>
          </div>
        </div>
      </div>
      
    </div>

  </div>
</div>
@endsection
