@extends('layouts.app')

@section('content')
  
  <!-- ***** Main Banner Area Start ***** -->
  <div class="about-main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg"></div>
            <h4>Selamat Datang di</h4>
            <div class="line-dec"></div>
            <h2>Desa Blederan</h2>
            <p>Desa Sayur</p>
            {{-- <div class="main-button">
              <a href="#">Tombol Dummy, bisa dihapus</a>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Produk <em>Minggu Ini</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-01.jpg" alt="">
                    <h4>Padi</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col text-right"><p class="text-right">  Rp 16.000 </p></div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-right">  1600 </p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-02.jpg" alt="">
                    <h4>Jagung</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col text-right"><p class="text-right">  Rp 16.000 </p></div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-right">  1600 </p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-03.jpg" alt="">
                    <h4>Durian</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col text-right"><p class="text-right">  Rp 16.000 </p></div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-right">  1600 </p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-04.jpg" alt="">
                    <h4>Teh</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col text-right"><p class="text-right">  Rp 16.000 </p></div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-right">  1600 </p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-01.jpg" alt="">
                    <h4>Tembakau</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col text-right"><p class="text-right">  Rp 16.000 </p></div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-right">  1600 </p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-02.jpg" alt="">
                    <h4>Kopi</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col text-right"><p class="text-right">  Rp 16.000 </p></div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-right">  1600 </p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-03.jpg" alt="">
                    <h4>Singkong</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col text-right"><p class="text-right">  Rp 16.000 </p></div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-right">  1600 </p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-04.jpg" alt="">
                    <h4>Alpukat</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col text-right"><p class="text-right">  Rp 16.000 </p></div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-right">  1600 </p> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="weekly-offers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Kunjungan ke Desa Blederan</h2>
            <p>Desa Blederan sering menerima kunjungan dari berbagai pihak.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-weekly-offers owl-carousel">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-01.jpg" alt="">
                <div class="text">
                  <h4>Mahasiswa UNSIQ<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 2 Oktober 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 16 orang </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-02.jpg" alt="">
                <div class="text">
                  <h4>BAPPEDA<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 2 Oktober 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 16 orang </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-03.jpg" alt="">
                <div class="text">
                  <h4>Perangkat Desa Pakuncen<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 2 Oktober 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 16 orang </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-01.jpg" alt="">
                <div class="text">
                  <h4>KKN Mahasiswa UGM<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 2 Oktober 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 16 orang </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-02.jpg" alt="">
                <div class="text">
                  <h4>BPS Wonosobo<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 2 Oktober 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 16 orang </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-03.jpg" alt="">
                <div class="text">
                  <h4>KKN Mahasiswa UNY<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 2 Oktober 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 16 orang </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- <div class="more-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="assets/images/about-left-image.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Discover More About Our Country</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="info-item">
                <h4>150.640 +</h4>
                <span>Total Guests Yearly</span>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-item">
                <h4>175.000+</h4>
                <span>Amazing Accomoditations</span>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item">
                <div class="row">
                  <div class="col-lg-6">
                    <h4>12.560+</h4>
                    <span>Amazing Places</span>
                  </div>
                  <div class="col-lg-6">
                    <h4>240.580+</h4>
                    <span>Different Check-ins Yearly</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <div class="main-button">
            <a href="reservation.html">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-locations">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Best Locations In Caribbeans</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2">
          <div class="options">
            <div class="option active" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-01.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                     <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">Havana</div>
                     <div class="sub">Population: 2M</div>
                  </div>
               </div>
            </div>
            <div class="option" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-02.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                    <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">Kingston</div>
                     <div class="sub">Population: 3.5M</div>
                  </div>
               </div>
            </div>
            <div class="option" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-03.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                    <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">London</div>
                     <div class="sub">Population: 4.1M</div>
                  </div>
               </div>
            </div>
            <div class="option" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-04.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                    <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">Pristina</div>
                     <div class="sub">Population: 520K</div>
                  </div>
               </div>
            </div>
            <div class="option" style="--optionBackground:url(https://buttoncreatives.com/html/woox/assets/images/best-05.jpg);">
               <div class="shadow"></div>
               <div class="label">
                  <div class="icon">
                    <i class="fas fa-expand"></i>
                  </div>
                  <div class="info">
                     <div class="main">Paris</div>
                     <div class="sub">Population: 3M</div>
                  </div>
               </div>
            </div>
         </div>
        </div>
        <div class="col-lg-12">
          <div class="main-button text-center">
            <a href="deals.html">Discover All Places</a>
          </div>
        </div>
      </div>
    </div>
  </div>--}}
@endsection