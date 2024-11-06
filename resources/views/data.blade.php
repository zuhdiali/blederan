@extends('layouts.app')

@section('content')

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Desa {{ getenv('NAMA_DESA') }}:</h2>
              <h1>Data Kependudukan</h1>
              <div class="border-button"><a href="#accordionButtonOne">Lihat Selengkapnya</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-4 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Populasi:</span><br>3.109 orang</h4>
                      </div>
                      <div class="col-lg-4 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Suku Mayoritas (Jawa):</span><br>3.095 orang</h4>
                      </div>
                      <div class="col-lg-4 col-sm-6 col-6">
                        <i class="fa fa-person-praying"></i>
                        <h4><span>Agama Mayoritas (Islam)</span><br>3.102 orang</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Desa {{ getenv('NAMA_DESA') }}:</h2>
              <h1>Data Perumahan</h1>
              <div class="border-button"><a href="#accordionButtonTwo">Lihat Selengkapnya</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Tempat Tinggal Milik Sendiri:</span><br>83,02 %</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Rumah Lantai Terluas Keramik:</span><br>50,12 %</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Rumah Dinding Terluas Tembok</span><br>88,60 %</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Rumah Fasilitas BAB Sendiri</span><br>81,53 %</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Desa {{ getenv('NAMA_DESA') }}:</h2>
              <h1>Data Kesehatan</h1>
              <div class="border-button"><a href="#accordionButtonThree">Lihat Selengkapnya</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6 col-6">
                        <i class="fa fa-users"></i>
                        <h4><span>Wanita 10-49 Tahun Menggunakan Alat KB:</span><br>258 orang</h4>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Jumlah Penduduk Cacat:</span><br>29 orang</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Desa {{ getenv('NAMA_DESA') }}:</h2>
              <h1>Data Pendidikan</h1>
              <div class="border-button"><a href="#accordionButtonFour">Lihat Selengkapnya</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-school"></i>
                        <h4><span>Penduduk Tidak Bersekolah Lagi</span><br>1.825 orang</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-school"></i>
                        <h4><span>Penduduk Belum Pernah Sekolah:</span><br>93 orang</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-school"></i>
                        <h4><span>Ijazah Tertinggi SD:</span><br>1.006 orang</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-school"></i>
                        <h4><span>Ijazah Tertinggi SMP:</span><br>451 orang</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
        </div>
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  
  <div class="container mt-5">
    <h1>Data Terkini</h1>
    <p>Terakhir update: 3 Oktober 2024</p>
   
    <div class="accordion" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button id="accordionButtonOne" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
            Data Kependudukan
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
          <div class="accordion-body overflow-scroll">
            
            <!-- ***** TABEL ***** -->
            <br>
            <hr>
            <h5>Jumlah Penduduk Menurut Kelompok Umur di Desa/Kelurahan BLEDERAN Tahun 2024</h5>
            <table class="table table-striped-columns">
              <thead>
                <tr>
                  <th scope="col" rowspan="2" class="text-center">Kelompok Umur</th>
                  <th scope="col" colspan="2" class="text-center">Jenis Kelamin</th>
                  <th scope="col" rowspan="2" class="text-center">Jumlah</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">Laki-laki</th>
                    <th scope="col" class="text-center">Perempuan</th>
                </tr>
                <tr>
                    <td class="text-center">(1)</td>
                    <td class="text-center">(2)</td>
                    <td class="text-center">(3)</td>
                    <td class="text-center">(4)</td>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" class="text-center">0-4 Tahun</td>
                  <td class="text-end">41</td>
                  <td class="text-end">30</td>
                  <td class="text-end">71</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">5-9 Tahun</td>
                    <td class="text-end">143</td>
                    <td class="text-end">115</td>
                    <td class="text-end">258</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">10-14 Tahun</td>
                    <td class="text-end">155</td>
                    <td class="text-end">143</td>
                    <td class="text-end">298</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">15-19 Tahun</td>
                    <td class="text-end">139</td>
                    <td class="text-end">108</td>
                    <td class="text-end">248</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">20-24 Tahun</td>
                    <td class="text-end">138</td>
                    <td class="text-end">112</td>
                    <td class="text-end">250</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">25-29 Tahun</td>
                    <td class="text-end">128</td>
                    <td class="text-end">125</td>
                    <td class="text-end">256</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">30-34 Tahun</td>
                    <td class="text-end">119</td>
                    <td class="text-end">129</td>
                    <td class="text-end">248</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">35-39 Tahun</td>
                    <td class="text-end">136</td>
                    <td class="text-end">118</td>
                    <td class="text-end">256</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">40-44 Tahun</td>
                    <td class="text-end">130</td>
                    <td class="text-end">119</td>
                    <td class="text-end">249</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">45-49 Tahun</td>
                    <td class="text-end">116</td>
                    <td class="text-end">109</td>
                    <td class="text-end">225</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">50-54 Tahun</td>
                    <td class="text-end">107</td>
                    <td class="text-end">92</td>
                    <td class="text-end">199</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">55-59 Tahun</td>
                    <td class="text-end">91</td>
                    <td class="text-end">97</td>
                    <td class="text-end">188</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">60-64 Tahun</td>
                    <td class="text-end">76</td>
                    <td class="text-end">59</td>
                    <td class="text-end">135</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">65-69 Tahun</td>
                    <td class="text-end">51</td>
                    <td class="text-end">42</td>
                    <td class="text-end">93</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">70-74 Tahun</td>
                    <td class="text-end">40</td>
                    <td class="text-end">16</td>
                    <td class="text-end">57</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">75+ Tahun</td>
                    <td class="text-end">41</td>
                    <td class="text-end">36</td>
                    <td class="text-end">77</td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">{{ getenv('NAMA_DESA') }}</td>
                    <td class="text-end">1.651</td>
                    <td class="text-end">1.450</td>
                    <td class="text-end">3.109</td>
                </tr>
              </tbody>
            </table>
            <!-- ***** TABEL ***** -->
            
            <!-- ***** TABEL ***** -->
            <br>
            <hr>
            <h5>Jumlah Penduduk Menurut Suku di Desa/Kelurahan BLEDERAN Tahun 2024</h5>
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">Suku</th>
                    <th scope="col" class="text-center">Jumlah</th>
                    </tr>
                    <tr>
                    <td class="text-center">(1)</td>
                    <td class="text-center">(2)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Arab</td>
                        <td class="text-end">1</td>
                    </tr>
                    <tr>
                        <td scope="row">India</td>
                        <td class="text-end">2</td>
                    </tr>
                    <tr>
                        <td scope="row">Jawa</td>
                        <td class="text-end">3.095</td>
                    </tr>
                    <tr>
                        <td scope="row">Madura</td>
                        <td class="text-end">8</td>
                    </tr>
                    <tr>
                        <td scope="row">Melayu</td>
                        <td class="text-end">1</td>
                    </tr>
                    <tr>
                        <td scope="row">Minang</td>
                        <td class="text-end">1</td>
                    </tr>
                    <tr>
                        <td scope="row">Sunda</td>
                        <td class="text-end">1</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ getenv('NAMA_DESA') }}</th>
                        <th class="text-end">3.109</th>
                    </tr>
                </tbody>
            </table>
            <!-- ***** TABEL ***** -->

            <!-- ***** TABEL ***** -->
            <br>
            <hr>
            <h5>Jumlah Penduduk Menurut Agama di Desa/Kelurahan BLEDERAN Tahun 2024</h5>
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">Agama</th>
                    <th scope="col" class="text-center">Jumlah</th>
                    </tr>
                    <tr>
                    <td class="text-center">(1)</td>
                    <td class="text-center">(2)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Islam</td>
                        <td class="text-end">3.102</td>
                    </tr>
                    <tr>
                        <td scope="row">Kristen</td>
                        <td class="text-end">2</td>
                    </tr>
                    <tr>
                        <td scope="row">Katolik</td>
                        <td class="text-end">5</td>
                    </tr>
                    <tr>
                        <th scope="row">{{ getenv('NAMA_DESA') }}</th>
                        <th class="text-end">3.109</th>
                    </tr>
                </tbody>
            </table>
            <!-- ***** TABEL ***** -->

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button id="accordionButtonTwo" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            Data Perumahan
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
          <div class="accordion-body overflow-scroll">

            <!-- ***** TABEL ***** -->
            <br>
            <hr>
            <h5 class="mb-3">Tabel 2 Status Penguasaan Bangunan Tempat Tinggal yang Ditempati di Desa/Kelurahan BLEDERAN Tahun 2024</h5>
            <table class="table table-striped-columns">
              <thead>
                <tr>
                  <th scope="col" class="text-center">Status</th>
                  <th scope="col" class="text-center">Jumlah</th>
                  <th scope="col" class="text-center">Persentase</th>
                </tr>
                <tr>
                  <td class="text-center">(1)</td>
                  <td class="text-center">(2)</td>
                  <td class="text-center">(3)</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">Milik Sendiri</td>
                  <td class="text-end">665</td>
                  <td class="text-end">83,02 %</td>
                </tr>
                <tr>
                  <td scope="row">Kontrak/Sewa</td>
                  <td class="text-end">6</td>
                  <td class="text-end">0,75 %</td>
                </tr>
                <tr>
                  <td scope="row">Bebas Sewa</td>
                  <td class="text-end">130</td>
                  <td class="text-end">16,23 %</td>
                </tr>
                <tr>
                  <td scope="row">Dinas</td>
                  <td class="text-end">0</td>
                  <td class="text-end">0 %</td>
                </tr>
                <tr>
                  <td scope="row">Lainnya</td>
                  <td class="text-end">0</td>
                  <td class="text-end">0 %</td>
                </tr>
                <tr>
                  <th scope="row">{{ getenv('NAMA_DESA') }}</th>
                  <th class="text-end">801</th>
                  <th class="text-end">100 %</th>
                </tr>
              </tbody>
            </table>
            <!-- ***** TABEL ***** -->
            
            <!-- ***** TABEL ***** -->
            <br>
            <hr>
            <h5>Judul Tabel</h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            <!-- ***** TABEL ***** -->

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button id="accordionButtonThree" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            Data Kesehatan
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
          <div class="accordion-body overflow-scroll">
            <br>
            <hr>
            <h5 class="mb-3">Judul Tabel </h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            
            <!-- ***** TABEL ***** -->
            <br>
            <hr>
            <h5>Judul Tabel</h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            <!-- ***** TABEL ***** -->

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button id="accordionButtonFour" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
            Data Pendidikan
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
          <div class="accordion-body overflow-scroll">
            <br>
            <hr>
            <h5 class="mb-3">Judul Tabel </h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            
            <!-- ***** TABEL ***** -->
            <br>
            <hr>
            <h5>Judul Tabel</h5>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            <!-- ***** TABEL ***** -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div id="content ">

      <!-- Begin Page Content -->
      <div class="container my-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Charts</h1>
          <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme.
              The charts below have been customized - for further customization options, please visit the <a
                  target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
                  documentation</a>.</p>

          <!-- Content Row -->
          <div class="row">

              <div class="col-xl-8 col-lg-7">

                  <!-- Area Chart -->
                  <div class="card shadow mb-4">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                      </div>
                      <div class="card-body">
                          <div class="chart-area">
                              <canvas id="myAreaChart"></canvas>
                          </div>
                          <hr>
                          Styling for the area chart can be found in the
                          <code>/js/demo/chart-area-demo.js</code> file.
                      </div>
                  </div>

                  <!-- Bar Chart -->
                  <div class="card shadow mb-4">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                      </div>
                      <div class="card-body">
                          <div class="chart-bar">
                              <canvas id="myBarChart"></canvas>
                          </div>
                          <hr>
                          Styling for the bar chart can be found in the
                          <code>/js/demo/chart-bar-demo.js</code> file.
                      </div>
                  </div>

              </div>

              <!-- Donut Chart -->
              <div class="col-xl-4 col-lg-5">
                  <div class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <div class="chart-pie pt-4">
                            <canvas id="countries" ></canvas>
                          </div>
                          <hr>
                          Styling for the donut chart can be found in the
                          <code>/js/demo/chart-pie-demo.js</code> file.
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- /.container-fluid -->

  </div>

    {{-- <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                      </tr>
                      <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                      </tr>
                      <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                      </tr>
                      <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                      </tr>
                      <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                      </tr>
                      <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                      </tr>
                      <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                      </tr>
                      <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                      </tr>
                      <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                      </tr>
                      <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                      </tr>
                      <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                      </tr>
                      <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                      </tr>
                      <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                      </tr>
                      <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                      </tr>
                      <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                      </tr>
                      <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                      </tr>
                      <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                      </tr>
                      <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                      </tr>
                      <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                      </tr>
                      <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                      </tr>
                      <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                      </tr>
                      <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                      </tr>
                      <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                      </tr>
                      <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                      </tr>
                      <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                      </tr>
                      <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                      </tr>
                      <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                      </tr>
                      <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                      </tr>
                      <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                      </tr>
                      <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                      </tr>
                      <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                      </tr>
                      <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                      </tr>
                      <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                      </tr>
                      <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                      </tr>
                      <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                      </tr>
                      <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                      </tr>
                      <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                      </tr>
                      <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                      </tr>
                      <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                      </tr>
                      <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                      </tr>
                      <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                      </tr>
                      <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                      </tr>
                      <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                      </tr>
                      <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                      </tr>
                      <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                      </tr>
                      <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                      </tr>
                      <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                      </tr>
                      <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                      </tr>
                      <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                      </tr>
                      <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                      </tr>
                      <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                      </tr>
                      <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                      </tr>
                      <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                      </tr>
                      <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                      </tr>
                      <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                      </tr>
                      <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                      </tr>
                      <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
    </div>
    <script>// Call the dataTables jQuery plugin
      $(document).ready(function() {
        $('#dataTable').DataTable();
      });
      </script> --}}


      
    <script>
      var pieData = [
          {
              value: 20,
              color:"#878BB6"
          },
          {
              value : 40,
              color : "#4ACAB4"
          },
          {
              value : 10,
              color : "#FF8153"
          },
          {
              value : 30,
              color : "#FFEA88"
          }
      ];
      // Get the context of the canvas element we want to select
      var countries= document.getElementById("countries").getContext("2d");
      new Chart(countries).Pie(pieData);
      
      var myBarChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [{
          label: "Revenue",
          backgroundColor: "#4e73df",
          hoverBackgroundColor: "#2e59d9",
          borderColor: "#4e73df",
          data: [4215, 5312, 6251, 7841, 9821, 14984],
        }],
      },
      options: {
        maintainAspectRatio: false,
        layout: {
          padding: {
            left: 10,
            right: 25,
            top: 25,
            bottom: 0
          }
        },
        
      }
    })
    </script>

@endsection
