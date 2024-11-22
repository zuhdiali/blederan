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
        <div id="top-banner-1" class="banner" style="background: url({{ asset('images/' . $environment->bg_data_kependudukan)}}) no-repeat center center">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption ">
              <div class="container bg-dark rounded py-4"  style="--bs-bg-opacity: .7;">
                <h2>Desa {{ $environment->nama_desa }}:</h2>
                <h1>Data Kependudukan</h1>
                <div class="border-button"><a id="lihatSelengkapnya1" href="#accordionButtonOne">Lihat Selengkapnya</a></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      @foreach($highlight_kependudukan as $value)
                        <?php 
                          // Dapetin data dari json. Tanda '[0]' di akhir menunjukkan bahwa ingin mengakses array indeks pertama'
                          $data = json_decode($value['data'])[0];
                          $key_property = array_keys((array)$data);
                          $judul = "";
                          $jumlah = "";
                          $persentase = "";
                          $metadata = null;
                          if(isset($value['metadata'])){
                            $metadata = json_decode($value['metadata']);
                          }
                        ?>
                          @if(count($key_property)==1)
                            @foreach($data as $key => $val)
                              <?php 
                                $judul = $key;
                                $jumlah = $val;
                              ?>
                            @endforeach
                          @else
                            @foreach($data as $key => $val)
                              @if($key == "total")
                                <?php $jumlah = $val ?>
                              @elseif($key == "persentase")
                                <?php $persentase = $val ?>
                              @else
                                <?php   
                                // Baris di bawah ini buat dapetin kata "Agama "
                                $judul = $key. " ";

                                for ($i=0; $i < count($metadata); $i++) { 
                                  if ($metadata[$i]->value === $val) {
                                    // Baris di bawah ini untuk melengkapi kata "Agama " menjadi "Agama Islam"
                                    $judul .= $metadata[$i]->nama;
                                  }
                                }
                                ?>
                              @endif
                            @endforeach
                          @endif
                        
                        <div class="col-lg-{{12/count($highlight_kependudukan)}} col-sm-6 col-6">
                          <i class="fa fa-users"></i>
                          <h4><span>{{$judul}}:</span><br>{{ $jumlah }} orang</h4>
                        </div>  
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-2" class="banner" style="background: url({{asset('images/'.$environment->bg_data_perumahan)}}) no-repeat center center">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption ">
              <div class="container bg-dark rounded py-4"  style="--bs-bg-opacity: .7;">
                <h2>Desa {{ $environment->nama_desa }}:</h2>
                <h1>Data Perumahan</h1>
                <div class="border-button"><a id="lihatSelengkapnya2" href="#accordionButtonTwo">Lihat Selengkapnya</a></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      @foreach($highlight_perumahan as $value)
                        <?php 
                          // Dapetin data dari json. Tanda '[0]' di akhir menunjukkan bahwa ingin mengakses array indeks pertama'
                          $data = json_decode($value['data'])[0];
                          $key_property = array_keys((array)$data);
                          $judul = "";
                          $jumlah = "";
                          $persentase = "";
                          $metadata = null;
                          if(isset($value['metadata'])){
                            $metadata = json_decode($value['metadata']);
                          }
                        ?>
                          @if(count($key_property)==1)
                            @foreach($data as $key => $val)
                              <?php 
                                $judul = $key;
                                $jumlah = $val;
                              ?>
                            @endforeach
                          @else
                            @foreach($data as $key => $val)
                              @if($key == "total")
                                <?php $jumlah = $val ?>
                              @elseif($key == "persentase")
                                <?php $persentase = $val ?>
                              @else
                                <?php   
                                // Baris di bawah ini buat dapetin kata "Agama "
                                $judul = $key. " ";

                                for ($i=0; $i < count($metadata); $i++) { 
                                  if ($metadata[$i]->value === $val) {
                                    // Baris di bawah ini untuk melengkapi kata "Agama " menjadi "Agama Islam"
                                    $judul .= $metadata[$i]->nama;
                                  }
                                }
                                ?>
                              @endif
                            @endforeach
                          @endif
                        
                        <div class="col-lg-{{12/count($highlight_perumahan)}} col-sm-6 col-6">
                          <i class="fa fa-users"></i>
                          <h4><span>{{$judul}}:</span><br>{{ $jumlah }} orang</h4>
                        </div>  
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-3" class="banner" style="background: url({{asset('images/'.$environment->bg_data_kesehatan)}}) no-repeat center center">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container bg-dark rounded py-4"  style="--bs-bg-opacity: .7;">
                <h2>Desa {{ $environment->nama_desa }}:</h2>
                <h1>Data Kesehatan</h1>
                <div class="border-button"><a id="lihatSelengkapnya3" href="#accordionButtonThree">Lihat Selengkapnya</a></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      @foreach($highlight_kesehatan as $value)
                        <?php 
                          // Dapetin data dari json. Tanda '[0]' di akhir menunjukkan bahwa ingin mengakses array indeks pertama'
                          $data = json_decode($value['data'])[0];
                          $key_property = array_keys((array)$data);
                          $judul = "";
                          $jumlah = "";
                          $persentase = "";
                          $metadata = null;
                          if(isset($value['metadata'])){
                            $metadata = json_decode($value['metadata']);
                          }
                        ?>
                          @if(count($key_property)==1)
                            @foreach($data as $key => $val)
                              <?php 
                                $judul = $key;
                                $jumlah = $val;
                              ?>
                            @endforeach
                          @else
                            @foreach($data as $key => $val)
                              @if($key == "total")
                                <?php $jumlah = $val ?>
                              @elseif($key == "persentase")
                                <?php $persentase = $val ?>
                              @else
                                <?php   
                                // Baris di bawah ini buat dapetin kata "Agama "
                                $judul = $key. " ";

                                for ($i=0; $i < count($metadata); $i++) { 
                                  if ($metadata[$i]->value === $val) {
                                    // Baris di bawah ini untuk melengkapi kata "Agama " menjadi "Agama Islam"
                                    $judul .= $metadata[$i]->nama;
                                  }
                                }
                                ?>
                              @endif
                            @endforeach
                          @endif
                        
                        <div class="col-lg-{{12/count($highlight_kesehatan)}} col-sm-6 col-6">
                          <i class="fa fa-users"></i>
                          <h4><span>{{$judul}}:</span><br>{{ $jumlah }} orang</h4>
                        </div>  
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-4" class="banner" style="background: url({{asset('images/'.$environment->bg_data_pendidikan)}}) no-repeat center center">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container bg-dark rounded py-4"  style="--bs-bg-opacity: .7;">
                <h2>Desa {{ $environment->nama_desa }}:</h2>
                <h1>Data Pendidikan</h1>
                <div class="border-button"><a id="lihatSelengkapnya4" href="#accordionButtonFour">Lihat Selengkapnya</a></div>
                </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      @foreach($highlight_pendidikan as $value)
                        <?php 
                          // Dapetin data dari json. Tanda '[0]' di akhir menunjukkan bahwa ingin mengakses array indeks pertama'
                          $data = json_decode($value['data'])[0];
                          $key_property = array_keys((array)$data);
                          $judul = "";
                          $jumlah = "";
                          $persentase = "";
                          $metadata = null;
                          if(isset($value['metadata'])){
                            $metadata = json_decode($value['metadata']);
                          }
                        ?>
                          @if(count($key_property)==1)
                            @foreach($data as $key => $val)
                              <?php 
                                $judul = $key;
                                $jumlah = $val;
                              ?>
                            @endforeach
                          @else
                            @foreach($data as $key => $val)
                              @if($key == "total")
                                <?php $jumlah = $val ?>
                              @elseif($key == "persentase")
                                <?php $persentase = $val ?>
                              @else
                                <?php   
                                // Baris di bawah ini buat dapetin kata "Agama "
                                $judul = $key. " ";

                                for ($i=0; $i < count($metadata); $i++) { 
                                  if ($metadata[$i]->value === $val) {
                                    // Baris di bawah ini untuk melengkapi kata "Agama " menjadi "Agama Islam"
                                    $judul .= $metadata[$i]->nama;
                                  }
                                }
                                ?>
                              @endif
                            @endforeach
                          @endif
                        
                        <div class="col-lg-{{12/count($highlight_pendidikan)}} col-sm-6 col-6">
                          <i class="fa fa-users"></i>
                          <h4><span>{{$judul}}:</span><br>{{ $jumlah }} orang</h4>
                        </div>  
                      @endforeach
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
                <?php 
                  $array = json_decode($data->data); 
                  $kolom = $array[0]; 
                  $metadata = json_decode($data->metadata);
                ?>

                <!-- ***** TABEL ***** -->
                <br>
                <hr>
                <h5>{{$data->judul_tabel}}</h5>
                <table class="table table-striped-columns table-light">
                  <thead>
                    <tr>
                    <?php $array_kolom = [] ?>
                    @foreach ($kolom as $key => $val)
                    <th scope="col" rowspan="2" class="text-center">{{str_replace("_"," ",$key)}} </th>
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
                        <td>
                          <?php 
                          for ($i=0; $i < count($metadata); $i++) { 
                            if ($metadata[$i]->value === $val) {
                              echo $metadata[$i]->nama;
                            }
                          }
                        ?>
                        </td>
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
                <?php $kolom = $array[0]; 
                $metadata = json_decode($data->metadata);
                // dd($metadata);
                ?>

                <!-- ***** TABEL ***** -->
                <br>
                <hr>
                <h5>{{$data->judul_tabel}}</h5>
                <table class="table table-striped-columns table-light">
                  <thead>
                    <tr>
                    <?php $array_kolom = [] ?>
                    @foreach ($kolom as $key => $val)
                    <th scope="col" rowspan="2" class="text-center">{{str_replace("_"," ",$key)}} </th>
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
                    <?php ?>
                    <tr>
                      @foreach ($item as $key => $val)
                      @if ($key === $array_kolom[0])
                        <td>
                          <?php 
                            for ($i=0; $i < count($metadata); $i++) { 
                              if ($metadata[$i]->value === $val) {
                                echo $metadata[$i]->nama;
                              }
                            }
                          ?>
                          </td>
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
                <?php $kolom = $array[0]; 
                $metadata = json_decode($data->metadata);
                ?>

                <!-- ***** TABEL ***** -->
                <br>
                <hr>
                <h5>{{$data->judul_tabel}}</h5>
                <table class="table table-striped-columns table-light">
                  <thead>
                    <tr>
                    <?php $array_kolom = [] ?>
                    @foreach ($kolom as $key => $val)
                    <th scope="col" rowspan="2" class="text-center">{{str_replace("_"," ",$key)}} </th>
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
                        <td>
                          <?php 
                            for ($i=0; $i < count($metadata); $i++) { 
                              if ($metadata[$i]->value === $val) {
                                echo $metadata[$i]->nama;
                              }
                            }
                          ?>
                        </td>
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
                $metadata = json_decode($data->metadata);
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
                    <th scope="col" rowspan="2" class="text-center">{{str_replace("_"," ",$key)}} </th>
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
                        <td>
                          <?php 
                            for ($i=0; $i < count($metadata); $i++) { 
                              if ($metadata[$i]->value === $val) {
                                echo $metadata[$i]->nama;
                              }
                            }
                          ?>
                        </td>
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
                $metadata = json_decode($data->metadata);
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
                    <th scope="col" rowspan="2" class="text-center">{{str_replace("_"," ",$key)}} </th>
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
                        <td>
                          <?php 
                            for ($i=0; $i < count($metadata); $i++) { 
                              if ($metadata[$i]->value === $val) {
                                echo $metadata[$i]->nama;
                              }
                            }
                          ?>
                        </td>
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

    var bannerTimer = setInterval(bannerSwitcher, 7000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 7000)
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
@endsection
