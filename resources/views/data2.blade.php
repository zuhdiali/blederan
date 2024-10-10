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
              <h2>Desa Blederan:</h2>
              <h1>Data Kependudukan</h1>
              <div class="border-button"><a id="lihatSelengkapnya1" href="#accordionButtonOne">Lihat Selengkapnya</a></div>
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
              <h2>Desa Blederan:</h2>
              <h1>Data Perumahan</h1>
              <div class="border-button"><a id="lihatSelengkapnya2" href="#accordionButtonTwo">Lihat Selengkapnya</a></div>
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
              <h2>Desa Blederan:</h2>
              <h1>Data Kesehatan</h1>
              <div class="border-button"><a id="lihatSelengkapnya3" href="#accordionButtonThree">Lihat Selengkapnya</a></div>
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
              <h2>Desa Blederan:</h2>
              <h1>Data Pendidikan</h1>
              <div class="border-button"><a id="lihatSelengkapnya4" href="#accordionButtonFour">Lihat Selengkapnya</a></div>
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
    <p>Klik menu berikut untuk melihat data lebih rinci.</p>
   
    <div class="accordion" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button id="accordionButtonOne" class="accordion-button collapsed btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
            Data Kependudukan
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
          <div class="accordion-body overflow-scroll">
            @foreach ($kependudukan as $data)
                <?php $array = json_decode($data->data); ?>
                <?php $kolom = $array[0]; ?>

                <!-- ***** TABEL ***** -->
                <br>
                <hr>
                <h5>{{$data->judul_tabel}}</h5>
                <table class="table table-striped-columns table-light">
                  <thead>
                    <tr>
                    <?php $array_kolom = [] ?>
                    @foreach ($kolom as $key => $val)
                    <th scope="col" rowspan="2" class="text-center">{{$key}} </th>
                    <?php array_push($array_kolom, $key) ?>
                    @endforeach
                  </tr>
                    
                  <hr>
                  </thead>
                  <tbody>
                    <tr>
                      @for($i = 0; $i < count($array_kolom); $i++)
                        <td class="text-center">({{($i)+1}})</td>
                      @endfor
                    </tr>
                    @foreach ($array as $item)
                    <tr>
                      @foreach ($item as $key => $val)
                      @if ($key === $array_kolom[0])
                        <td>{{$val}}</td>
                      @else
                        <td class="text-end">{{$val}}</td>
                      @endif
                      @endforeach
                    </tr>
                        

                    @endforeach
                  </tbody>
                </table>
            @endforeach
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
            @foreach ($perumahan as $data)
                <?php $array = json_decode($data->data); 
                ?>
                <?php $kolom = $array[0]; ?>

                <!-- ***** TABEL ***** -->
                <br>
                <hr>
                <h5>{{$data->judul_tabel}}</h5>
                <table class="table table-striped-columns table-light">
                  <thead>
                    <tr>
                    <?php $array_kolom = [] ?>
                    @foreach ($kolom as $key => $val)
                    <th scope="col" rowspan="2" class="text-center">{{$key}} </th>
                    <?php array_push($array_kolom, $key) ?>
                    @endforeach
                    </tr>
                    
                  <hr>
                  </thead>
                  <tbody>
                    <tr>
                      @for($i = 0; $i < count($array_kolom); $i++)
                        <td class="text-center">({{($i)+1}})</td>
                      @endfor
                    </tr>
                    @foreach ($array as $item)
                    <tr>
                      @foreach ($item as $key => $val)
                      @if ($key === $array_kolom[0])
                        <td>{{$val}}</td>
                      @else
                        <td class="text-end">{{$val}}</td>
                      @endif
                      @endforeach
                    </tr>
                        

                    @endforeach
                  </tbody>
                </table>
            @endforeach
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
            @foreach ($kesehatan as $data)
                <?php $array = json_decode($data->data); 
                ?>
                <?php $kolom = $array[0]; ?>

                <!-- ***** TABEL ***** -->
                <br>
                <hr>
                <h5>{{$data->judul_tabel}}</h5>
                <table class="table table-striped-columns table-light">
                  <thead>
                    <tr>
                    <?php $array_kolom = [] ?>
                    @foreach ($kolom as $key => $val)
                    <th scope="col" rowspan="2" class="text-center">{{$key}} </th>
                    <?php array_push($array_kolom, $key) ?>
                    @endforeach
                  </tr>
                  
                  <hr>
                  </thead>
                  <tbody>
                    <tr>
                      @for($i = 0; $i < count($array_kolom); $i++)
                        <td class="text-center">({{($i)+1}})</td>
                      @endfor
                    </tr>
                    @foreach ($array as $item)
                    <tr>
                      @foreach ($item as $key => $val)
                      @if ($key === $array_kolom[0])
                        <td>{{$val}}</td>
                      @else
                        <td class="text-end">{{$val}}</td>
                      @endif
                      @endforeach
                    </tr>
                        

                    @endforeach
                  </tbody>
                </table>
            @endforeach
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
            @foreach ($pendidikan as $data)
                <?php $array = json_decode($data->data); 
                ?>
                <?php $kolom = $array[0]; ?>

                <!-- ***** TABEL ***** -->
                <br>
                <hr>
                <h5>{{$data->judul_tabel}}</h5>
                <table class="table table-striped-columns table-light">
                  <thead>
                    <tr>
                    <?php $array_kolom = [] ?>
                    @foreach ($kolom as $key => $val)
                    <th scope="col" rowspan="2" class="text-center">{{$key}} </th>
                    <?php array_push($array_kolom, $key) ?>
                    @endforeach
                  </tr>
                 
                  <hr>
                  </thead>
                  <tbody>
                    <tr>
                      @for($i = 0; $i < count($array_kolom); $i++)
                        <td class="text-center">({{($i)+1}})</td>
                      @endfor
                    </tr>
                    @foreach ($array as $item)
                    <tr>
                      @foreach ($item as $key => $val)
                      @if ($key === $array_kolom[0])
                        <td>{{$val}}</td>
                      @else
                        <td class="text-end">{{$val}}</td>
                      @endif
                      @endforeach
                    </tr>
                        

                    @endforeach
                  </tbody>
                </table>
            @endforeach

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button id="accordionButtonFive" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
            Data Pekerjaan
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
          <div class="accordion-body overflow-scroll">
            @foreach ($pekerjaan as $data)
                <?php $array = json_decode($data->data); 
                ?>
                <?php $kolom = $array[0]; ?>

                <!-- ***** TABEL ***** -->
                <br>
                <hr>
                <h5>{{$data->judul_tabel}}</h5>
                <table class="table table-striped-columns table-light">
                  <thead>
                    <tr>
                    <?php $array_kolom = [] ?>
                    @foreach ($kolom as $key => $val)
                    <th scope="col" rowspan="2" class="text-center">{{$key}} </th>
                    <?php array_push($array_kolom, $key) ?>
                    @endforeach
                  </tr>
                  
                  <hr>
                  </thead>
                  <tbody>
                    <tr>
                      @for($i = 0; $i < count($array_kolom); $i++)
                        <td class="text-center">({{($i)+1}})</td>
                      @endfor
                    </tr>
                    @foreach ($array as $item)
                    {{-- {{dd($item['PekerjaanMenurutLapanganUsaha'])}} --}}
                    <tr>
                      @foreach ($item as $key => $val)
                      @if ($key === $array_kolom[0])
                        <td>{{$val}}</td>
                      @else
                        <td class="text-end">{{$val}}</td>
                      @endif
                      @endforeach
                    </tr>
                        

                    @endforeach
                  </tbody>
                </table>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });

    // $(document).ready(function() {
    //   $('#lihatSelengkapnya1').click(function() {
    //     $('#panelsStayOpen-collapseOne').addClass("show");
    //   });
    //   $('#lihatSelengkapnya2').click(function() {
    //     $('#panelsStayOpen-collapseTwo').addClass("show");
    //   });
    //   $('#lihatSelengkapnya3').click(function() {
    //     $('#panelsStayOpen-collapseThree').addClass("show");
    //   });
    //   $('#lihatSelengkapnya4').click(function() {
    //     $('#panelsStayOpen-collapseFour').addClass("show");
    //   });
    // });
    
  </script>

  <script>
    // var pieData = [
    //     {
    //         value: 20,
    //         color:"#878BB6"
    //     },
    //     {
    //         value : 40,
    //         color : "#4ACAB4"
    //     },
    //     {
    //         value : 10,
    //         color : "#FF8153"
    //     },
    //     {
    //         value : 30,
    //         color : "#FFEA88"
    //     }
    // ];
    // Get the context of the canvas element we want to select
    //   var countries= document.getElementById("countries").getContext("2d");
    //   new Chart(countries).Pie(pieData);
      
    //   var myBarChart = new Chart(ctx, {
    //   type: 'bar',
    //   data: {
    //     labels: ["January", "February", "March", "April", "May", "June"],
    //     datasets: [{
    //       label: "Revenue",
    //       backgroundColor: "#4e73df",
    //       hoverBackgroundColor: "#2e59d9",
    //       borderColor: "#4e73df",
    //       data: [4215, 5312, 6251, 7841, 9821, 14984],
    //     }],
    //   },
    //   options: {
    //     maintainAspectRatio: false,
    //     layout: {
    //       padding: {
    //         left: 10,
    //         right: 25,
    //         top: 25,
    //         bottom: 0
    //       }
    //     },
        
    //   }
    // })
    </script>

@endsection
