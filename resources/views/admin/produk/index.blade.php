@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">Daftar produk</h3>
        {{-- <h6 class="op-7 mb-2">Kelola Pengguna yang dapat masuk ke halaman admin</h6> --}}
      </div>
      <div class="ms-md-auto py-2 py-md-0">
        {{-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> --}}
        <a href="{{route('admin-tambah-produk')}}" class="btn btn-primary btn-round">Tambah Produk</a>
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
                  <p class="card-category">Visitors</p>
                  <h4 class="card-title">1,294</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
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
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
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
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
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
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card card-round">
          <div class="card-header">
            <div class="card-head-row card-tools-still-right">
              <div class="card-title">Daftar Produk</div>
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
                    <th scope="col" class="sort" data-sort="name">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Nama Penjual</th>
                    <th scope="col">Kontak Penjual</th>
                    <th scope="col">Gambar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($produks as $produk)
                    <tr>
                      <td>
                        <div class="d-flex flex-column align-self-center">
                          <div class="p-1">
                            <a href="{{url('admin-edit-produk', $produk->id)}}" class="btn btn-primary" title="Edit">
                              <i class="icon-pencil"></i>
                            </a>
                          </div>
                          <div class="p-1">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Hapus">
                              <i class="icon-trash"></i>
                            </button>
                          </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah Anda yakin ingin menghapus produk <strong>{{$produk->nama_produk}}</strong> dari {{$produk->nama_penjual}}?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                <form action="{{url('admin-hapus-produk/'.$produk->id)}}">
                                  <button type="submit" class="btn btn-danger">Hapus Produk</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <th scope="row">{{$produk->nama_produk}}</th>
                      <td>{{$produk->harga}}</td>
                      <td>{{$produk->satuan}}</td>
                      <td>{{$produk->stok}}</td>
                      <td>{{$produk->nama_penjual}}</td>
                      <td>{{$produk->kontak_penjual}}</td>
                      <td>
                        <img src="{{asset('uploads/produk/'.$produk->gambar_produk)}}" alt="gambar produk" width="100px">
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
    <div class="row">
      <div class="col-md-12">
        <div class="card card-round">
          <div class="card-header">
            <div class="card-head-row card-tools-still-right">
              <h4 class="card-title">Users Geolocation</h4>
              <div class="card-tools">
                <button
                  class="btn btn-icon btn-link btn-primary btn-xs"
                >
                  <span class="fa fa-angle-down"></span>
                </button>
                <button
                  class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"
                >
                  <span class="fa fa-sync-alt"></span>
                </button>
                <button
                  class="btn btn-icon btn-link btn-primary btn-xs"
                >
                  <span class="fa fa-times"></span>
                </button>
              </div>
            </div>
            <p class="card-category">
              Map of the distribution of users around the world
            </p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="table-responsive table-hover table-sales">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="flag">
                            <img
                              src="assets/images/flags/id.png"
                              alt="indonesia"
                            />
                          </div>
                        </td>
                        <td>Indonesia</td>
                        <td class="text-end">2.320</td>
                        <td class="text-end">42.18%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img
                              src="assets/images/flags/us.png"
                              alt="united states"
                            />
                          </div>
                        </td>
                        <td>USA</td>
                        <td class="text-end">240</td>
                        <td class="text-end">4.36%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img
                              src="assets/images/flags/au.png"
                              alt="australia"
                            />
                          </div>
                        </td>
                        <td>Australia</td>
                        <td class="text-end">119</td>
                        <td class="text-end">2.16%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img
                              src="assets/images/flags/ru.png"
                              alt="russia"
                            />
                          </div>
                        </td>
                        <td>Russia</td>
                        <td class="text-end">1.081</td>
                        <td class="text-end">19.65%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img
                              src="assets/images/flags/cn.png"
                              alt="china"
                            />
                          </div>
                        </td>
                        <td>China</td>
                        <td class="text-end">1.100</td>
                        <td class="text-end">20%</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="flag">
                            <img
                              src="assets/images/flags/br.png"
                              alt="brazil"
                            />
                          </div>
                        </td>
                        <td>Brasil</td>
                        <td class="text-end">640</td>
                        <td class="text-end">11.63%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mapcontainer">
                  <div
                    id="world-map"
                    class="w-100"
                    style="height: 300px"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-round">
          <div class="card-body">
            <div class="card-head-row card-tools-still-right">
              <div class="card-title">New Customers</div>
              <div class="card-tools">
                <div class="dropdown">
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
                </div>
              </div>
            </div>
            <div class="card-list py-4">
              <div class="item-list">
                <div class="avatar">
                  <img
                    src="assets/images/jm_denis.jpg"
                    alt="..."
                    class="avatar-img rounded-circle"
                  />
                </div>
                <div class="info-user ms-3">
                  <div class="username">Jimmy Denis</div>
                  <div class="status">Graphic Designer</div>
                </div>
                <button class="btn btn-icon btn-link op-8 me-1">
                  <i class="far fa-envelope"></i>
                </button>
                <button class="btn btn-icon btn-link btn-danger op-8">
                  <i class="fas fa-ban"></i>
                </button>
              </div>
              <div class="item-list">
                <div class="avatar">
                  <span
                    class="avatar-title rounded-circle border border-white"
                    >CF</span
                  >
                </div>
                <div class="info-user ms-3">
                  <div class="username">Chandra Felix</div>
                  <div class="status">Sales Promotion</div>
                </div>
                <button class="btn btn-icon btn-link op-8 me-1">
                  <i class="far fa-envelope"></i>
                </button>
                <button class="btn btn-icon btn-link btn-danger op-8">
                  <i class="fas fa-ban"></i>
                </button>
              </div>
              <div class="item-list">
                <div class="avatar">
                  <img
                    src="assets/images/talha.jpg"
                    alt="..."
                    class="avatar-img rounded-circle"
                  />
                </div>
                <div class="info-user ms-3">
                  <div class="username">Talha</div>
                  <div class="status">Front End Designer</div>
                </div>
                <button class="btn btn-icon btn-link op-8 me-1">
                  <i class="far fa-envelope"></i>
                </button>
                <button class="btn btn-icon btn-link btn-danger op-8">
                  <i class="fas fa-ban"></i>
                </button>
              </div>
              <div class="item-list">
                <div class="avatar">
                  <img
                    src="assets/images/chadengle.jpg"
                    alt="..."
                    class="avatar-img rounded-circle"
                  />
                </div>
                <div class="info-user ms-3">
                  <div class="username">Chad</div>
                  <div class="status">CEO Zeleaf</div>
                </div>
                <button class="btn btn-icon btn-link op-8 me-1">
                  <i class="far fa-envelope"></i>
                </button>
                <button class="btn btn-icon btn-link btn-danger op-8">
                  <i class="fas fa-ban"></i>
                </button>
              </div>
              <div class="item-list">
                <div class="avatar">
                  <span
                    class="avatar-title rounded-circle border border-white bg-primary"
                    >H</span
                  >
                </div>
                <div class="info-user ms-3">
                  <div class="username">Hizrian</div>
                  <div class="status">Web Designer</div>
                </div>
                <button class="btn btn-icon btn-link op-8 me-1">
                  <i class="far fa-envelope"></i>
                </button>
                <button class="btn btn-icon btn-link btn-danger op-8">
                  <i class="fas fa-ban"></i>
                </button>
              </div>
              <div class="item-list">
                <div class="avatar">
                  <span
                    class="avatar-title rounded-circle border border-white bg-secondary"
                    >F</span
                  >
                </div>
                <div class="info-user ms-3">
                  <div class="username">Farrah</div>
                  <div class="status">Marketing</div>
                </div>
                <button class="btn btn-icon btn-link op-8 me-1">
                  <i class="far fa-envelope"></i>
                </button>
                <button class="btn btn-icon btn-link btn-danger op-8">
                  <i class="fas fa-ban"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card card-round">

          <div class="card-header">
            <div class="card-head-row">
              <div class="card-title">User Statistics</div>
              <div class="card-tools">
                <a
                  href="#"
                  class="btn btn-label-success btn-round btn-sm me-2"
                >
                  <span class="btn-label">
                    <i class="fa fa-pencil"></i>
                  </span>
                  Export
                </a>
                <a href="#" class="btn btn-label-info btn-round btn-sm">
                  <span class="btn-label">
                    <i class="fa fa-print"></i>
                  </span>
                  Print
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container" style="min-height: 375px">
              <canvas id="statisticsChart"></canvas>
            </div>
            <div id="myChartLegend"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
