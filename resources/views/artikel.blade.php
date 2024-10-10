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
              <h2>Kabar terkini dari Desa Blederan</h2>
              <h1>Kampung Sayur Organik</h1>
              <div class="border-button"><a href="{{ route('kampung-sayur')}}">Baca Selengkapnya</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Penulis:</span><br>Novi Hardianto</h4>
                      </div>
                      <div class="col-sm-6 col-6">
                        <i class="fa fa-calendar"></i>
                        <h4><span>Tanggal:</span><br>3 Oktober 2024</h4>
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
                  <h2>Kabar terkini dari Desa Blederan</h2>
                  <h1>Desa Blederan Raih Penghargaan Prokllim Lestari dari KLHK RI</h1>
                  <div class="border-button"><a href="{{ route('penghargaan')}}">Baca Selengkapnya</a></div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="more-info">
                        <div class="row">
                          <div class="col-sm-6 col-6">
                            <i class="fa fa-user"></i>
                            <h4><span>Penulis:</span><br>Fahmi Saputra</h4>
                          </div>
                          <div class="col-sm-6 col-6">
                            <i class="fa fa-calendar"></i>
                            <h4><span>Tanggal:</span><br>3 Oktober 2024</h4>
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
                  <h2>Kabar terkini dari Desa Blederan</h2>
                  <h1>Pencanangan program Desa Cantik (Desa Cinta Statistik)</h1>
                  <div class="border-button"><a href="{{ route('desa-cantik')}}">Baca Selengkapnya</a></div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="more-info">
                        <div class="row">
                          <div class=" col-sm-6 col-6">
                            <i class="fa fa-user"></i>
                            <h4><span>Penulis:</span><br>Rizki Arifin</h4>
                          </div>
                          <div class=" col-sm-6 col-6">
                            <i class="fa fa-calendar"></i>
                            <h4><span>Tanggal:</span><br>3 Oktober 2024</h4>
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
                  <h2>Kabar terkini dari Desa Blederan</h2>
                  <h1>Santunan Anak Yatim di Desa Setempat</h1>
                  <div class="border-button"><a href="{{ route('santunan')}}">Baca Selengkapnya</a></div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="more-info">
                        <div class="row">
                          <div class="col-sm-6 col-6">
                            <i class="fa fa-user"></i>
                            <h4><span>Penulis:</span><br>Zuhdi Ali Hisyam</h4>
                          </div>
                          <div class="col-sm-6 col-6">
                            <i class="fa fa-calendar"></i>
                            <h4><span>Tanggal:</span><br>3 Oktober 2024</h4>
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
  
  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Kabar Terkini Desa Blederan</h2>
            <p>Info terkini mengenai Desa Blederan, Kecamatan Mojotengah, Kabupaten Wonosobo.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
            <div class="items">
              <div class="row">
                <div class="col-lg-12">
                  <div class="item">
                    <div class="row">
                      <div class="col-lg-4 col-sm-5">
                        <div class="image">
                          <img src="assets/images/blederan7.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                          <h4>Kampung Sayur Organik</h4>
                          <span>Novi Hardianto</span>
                          {{-- <div class="main-button">
                            <a href="{{ route('artikel') }}">Selengkapnya</a>
                          </div> --}}
                          <p>Kampung Sayur di Desa Blederan, Wonosobo, merupakan sebuah desa wisata yang mengembangkan pertanian sayur organik, terutama melalui Kelompok Wanita Tani (KWT).</p>
                          <ul class="info">
                            <li><i class="fa fa-calendar"></i> 3 Oktober 2024 </li>
                            {{-- <li><i class="fa fa-globe"></i> 41.290 km2</li>
                            <li><i class="fa fa-home"></i> $1.100.200</li> --}}
                          </ul>
                          <div class="text-button">
                            <a href="{{ route('kampung-sayur') }}">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="item">
                    <div class="row">
                      <div class="col-lg-4 col-sm-5">
                        <div class="image">
                          <img src="assets/images/20241003_penghargaan.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                          <h4> Desa Blederan Raih Penghargaan Proklim Lestari dari KLHK RI</h4>
                          <span>Fahmi Saputra</span>
                          {{-- <div class="main-button">
                            <a href="{{ route('artikel') }}">Selengkapnya</a>
                          </div> --}}
                          <p>Dusun Blederan, Desa Blederan, Kecamatan Mojotengah mendapatkan Penghargaan Program Kampung Iklim (Proklim) Lestari dari Kementerian Lingkungan Hidup dan Kehutanan (KLHK). </p>
                          <ul class="info">
                            <li ><i class="fa fa-calendar"></i> 3 Oktober 2024 </li>
                            {{-- <li><i class="fa fa-globe"></i> 275.400 km2</li>
                            <li><i class="fa fa-home"></i> $946.000</li> --}}
                          </ul>
                          <div class="text-button">
                            <a href="{{ route('penghargaan') }}">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="item last-item">
                    <div class="row">
                      <div class="col-lg-4 col-sm-5">
                        <div class="image">
                          <img src="assets/images/20241003_desa_cantik.jpeg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                          <h4>Pencanangan program Desa Cantik (Desa Cinta Statistik)</h4>
                          <span>Rizki Arifin</span>
                          {{-- <div class="main-button">
                            <a href="{{ route('artikel') }}">Selengkapnya</a>
                          </div> --}}
                          <p>Badan Pusat Statistik bersama Pemerintah Kabupaten Wonosobo kembali mencanangkan program Desa Cinta Statistik (Desa Cantik), Senin (30/09/2024) di Desa Blederan Mojotengah Wonosobo.</p>
                          <ul class="info">
                            <li><i class="fa fa-calendar"></i> 3 Oktober 2024</li>
                            {{-- <li><i class="fa fa-globe"></i> 551.500 km2</li>
                            <li><i class="fa fa-home"></i> $425.600</li> --}}
                          </ul>
                          <div class="text-button">
                            <a href="{{ route('desa-cantik') }}">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                  </ul>
                </div> --}}
              </div>
            </div>
          </div>
        <div class="col-lg-4">
          <div class="side-bar-map">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5596.571297101213!2d109.91171212253252!3d-7.311868896386512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a8e33f22365%3A0xd8a8af392da67ea3!2sBalai%20Desa%20%2F%20Kantor%20Kepala%20Desa%20Blederan!5e0!3m2!1sen!2sid!4v1727836245361!5m2!1sen!2sid" width="100%" height="550px" style="border:0; border-radius: 23px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
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
  </script>

@endsection
