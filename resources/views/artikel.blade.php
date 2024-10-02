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
              <h1>Judul 1</h1>
              <div class="border-button"><a href="#">Baca Selengkapnya</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Penulis:</span><br>Penulis 1</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-calendar"></i>
                        <h4><span>Tanggal:</span><br>2 Oktober 2024</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        {{-- <i class="fa fa-home"></i>
                        <h4><span>Disukai:</span><br>$946.000</h4> --}}
                      </div>
                      {{-- <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="about.html">Explore More</a>
                        </div>
                      </div> --}}
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
                  <h1>Judul 2</h1>
                  <div class="border-button"><a href="#">Baca Selengkapnya</a></div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="more-info">
                        <div class="row">
                          <div class="col-lg-3 col-sm-6 col-6">
                            <i class="fa fa-user"></i>
                            <h4><span>Penulis:</span><br>Penulis 2</h4>
                          </div>
                          <div class="col-lg-3 col-sm-6 col-6">
                            <i class="fa fa-calendar"></i>
                            <h4><span>Tanggal:</span><br>2 Oktober 2024</h4>
                          </div>
                          <div class="col-lg-3 col-sm-6 col-6">
                            {{-- <i class="fa fa-home"></i>
                            <h4><span>Disukai:</span><br>$946.000</h4> --}}
                          </div>
                          {{-- <div class="col-lg-3 col-sm-6 col-6">
                            <div class="main-button">
                              <a href="about.html">Explore More</a>
                            </div>
                          </div> --}}
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
                  <h1>Judul 3</h1>
                  <div class="border-button"><a href="#">Baca Selengkapnya</a></div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="more-info">
                        <div class="row">
                          <div class="col-lg-3 col-sm-6 col-6">
                            <i class="fa fa-user"></i>
                            <h4><span>Penulis:</span><br>Penulis 3</h4>
                          </div>
                          <div class="col-lg-3 col-sm-6 col-6">
                            <i class="fa fa-calendar"></i>
                            <h4><span>Tanggal:</span><br>2 Oktober 2024</h4>
                          </div>
                          <div class="col-lg-3 col-sm-6 col-6">
                            {{-- <i class="fa fa-home"></i>
                            <h4><span>Disukai:</span><br>$946.000</h4> --}}
                          </div>
                          {{-- <div class="col-lg-3 col-sm-6 col-6">
                            <div class="main-button">
                              <a href="about.html">Explore More</a>
                            </div>
                          </div> --}}
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
                  <h1>Judul 4</h1>
                  <div class="border-button"><a href="#">Baca Selengkapnya</a></div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="more-info">
                        <div class="row">
                          <div class="col-lg-3 col-sm-6 col-6">
                            <i class="fa fa-user"></i>
                            <h4><span>Penulis:</span><br>Penulis 4</h4>
                          </div>
                          <div class="col-lg-3 col-sm-6 col-6">
                            <i class="fa fa-calendar"></i>
                            <h4><span>Tanggal:</span><br>2 Oktober 2024</h4>
                          </div>
                          <div class="col-lg-3 col-sm-6 col-6">
                            {{-- <i class="fa fa-home"></i>
                            <h4><span>Disukai:</span><br>$946.000</h4> --}}
                          </div>
                          {{-- <div class="col-lg-3 col-sm-6 col-6">
                            <div class="main-button">
                              <a href="about.html">Explore More</a>
                            </div>
                          </div> --}}
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
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
                          <img src="assets/images/country-01.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                          <h4>Judul 1</h4>
                          <span>Penulis 1</span>
                          <div class="main-button">
                            <a href="{{ route('artikel') }}">Selengkapnya</a>
                          </div>
                          <p>Woox Travel is a professional Bootstrap 5 theme HTML CSS layout for your website. You can use this layout for your commercial work.</p>
                          <ul class="info">
                            <li><i class="fa fa-calendar"></i> Tanggal Pembuatan </li>
                            <li><i class="fa fa-globe"></i> 41.290 km2</li>
                            <li><i class="fa fa-home"></i> $1.100.200</li>
                          </ul>
                          <div class="text-button">
                            <a href="{{ route('artikel') }}">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
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
                          <img src="assets/images/country-02.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                          <h4>Judul 2</h4>
                          <span>Penulis 2</span>
                          <div class="main-button">
                            <a href="{{ route('artikel') }}">Selengkapnya</a>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                          <ul class="info">
                            <li><i class="fa fa-calendar"></i> Tanggal Pembuatan </li>
                            <li><i class="fa fa-globe"></i> 275.400 km2</li>
                            <li><i class="fa fa-home"></i> $946.000</li>
                          </ul>
                          <div class="text-button">
                            <a href="{{ route('artikel') }}">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
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
                          <img src="assets/images/country-03.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                          <h4>Judul 3</h4>
                          <span>Penulis 3</span>
                          <div class="main-button">
                            <a href="{{ route('artikel') }}">Selengkapnya</a>
                          </div>
                          <p>We hope this WoOx template is useful for you, please support us a <a href="https://paypal.me/templatemo" target="_blank">small amount of PayPal</a> to info [at] templatemo.com for our survival. We really appreciate your contribution.</p>
                          <ul class="info">
                            <li><i class="fa fa-calendar"></i> Tanggal Pembuatan </li>
                            <li><i class="fa fa-globe"></i> 551.500 km2</li>
                            <li><i class="fa fa-home"></i> $425.600</li>
                          </ul>
                          <div class="text-button">
                            <a href="{{ route('artikel') }}">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
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


  @endsection
