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
            <p>Kampung Sayur Organik</p>
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
                @foreach ($produks as $produk)
                <div class="item">
                  <div class="thumb">
                    <img src="{{ asset('uploads/produk/' . $produk->gambar_produk) }}" alt="{{ $produk->nama_produk }}">
                    <h4>{{ $produk->nama_produk }}</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col">
                          <p class="text-end"> Rp {{ number_format($produk->harga, 0, ',', '.') }} </p>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-box"></i> Stok:
                        </div>
                        <div class="col">
                          <p class="text-end">  {{ $produk->stok }} </p>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col-5">
                          <i class="fa fa-user"></i> Pemilik:
                        </div>
                        <div class="col-7">
                          <p >  {{ $produk->nama_penjual }} </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="main-button d-flex justify-content-center mt-2">
                    <a href="https://wa.me/62{{substr($produk->kontak_penjual,1)}}" > <i class="fa-solid fa-phone"></i>  Hubungi Penjual</a>
                  </div>
                </div>
                @endforeach
                

                {{-- <div class="item">
                  <div class="thumb">
                    <img src="assets/images/padi.jpg" alt="">
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
                    <img src="assets/images/selada.jpg" alt="">
                    <h4>Selada</h4>
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
                    <img src="assets/images/jagung.jpg" alt="">
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
                    <img src="assets/images/sawi.jpg" alt="">
                    <h4>Sawi</h4>
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
                    <img src="assets/images/Kol.jpg" alt="">
                    <h4>Kol</h4>
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
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Ini <section> jangan dihapus, soalnya buat margin --}}
  <section>
  </section>
  {{-- Ini <section> jangan dihapus, soalnya buat margin --}}

  <div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Jasa <em>Akomodasi</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                @foreach ($akomodasis as $akomodasi)
                <div class="item">
                  <div class="thumb">
                    <img src="{{ asset('uploads/akomodasi/' . $akomodasi->gambar_akomodasi) }}" alt="{{ $akomodasi->nama_akomodasi }}">
                    <h4>{{ $akomodasi->nama_akomodasi }}</h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col">
                          <i class="fa fa-usd"></i> Harga:
                        </div>
                        <div class="col">
                          <p class="text-end"> Rp {{ number_format($akomodasi->harga, 0, ',', '.') }} </p>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col-8">
                          <i class="fa fa-box"></i> Ruang Tersisa:
                        </div>
                        <div class="col-4">
                          <p class="text-end">  {{ $akomodasi->stok }} </p>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-light">
                      <div class="row">
                        <div class="col-5">
                          <i class="fa fa-user"></i> Pemilik:
                        </div>
                        <div class="col-7">
                          <p >  {{ $akomodasi->nama_pemilik }} </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="main-button d-flex justify-content-center mt-2">
                    <a href="https://wa.me/62{{substr($produk->kontak_penjual,1)}}"  > <i class="fa-solid fa-phone"></i>  Hubungi Penjual</a>
                  </div>
                </div>
                @endforeach
                

                {{-- <div class="item">
                  <div class="thumb">
                    <img src="assets/images/padi.jpg" alt="">
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
                    <img src="assets/images/selada.jpg" alt="">
                    <h4>Selada</h4>
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
                    <img src="assets/images/jagung.jpg" alt="">
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
                    <img src="assets/images/sawi.jpg" alt="">
                    <h4>Sawi</h4>
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
                    <img src="assets/images/Kol.jpg" alt="">
                    <h4>Kol</h4>
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
                </div> --}}
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
            <h2>Kunjungan dan Eduwisata ke Desa Blederan</h2>
            <p>Desa Blederan sering menerima kunjungan dari berbagai pihak.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-weekly-offers owl-carousel">
            @foreach ($eduwisatas as $eduwisata)
            <div class="item">
              <div class="thumb">
                <img src="{{asset('uploads/informasi/'.$eduwisata->gambar)}}" alt="">
                <div class="text w-100">
                  <h4>{{$eduwisata->nama_informasi}}<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: {{ \Carbon\Carbon::parse($eduwisata->tanggal)->locale('id')->translatedFormat('d F Y') }}</li>
                    <li><i class="fa fa-users"></i> Jumlah: {{$eduwisata->jumlah}} orang </li>
                    <li><i class="fa fa-note-sticky"></i> Kegiatan: {{$eduwisata->deskripsi}}</li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
            {{-- <div class="item">
              <div class="thumb">
                <img src="/images/blederan3.jpg" alt="">
                <div class="text w-100">
                  <h4>SD Hafizh Quran MAF<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 6 September 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 30 orang </li>
                    <li><i class="fa fa-note-sticky"></i> Kegiatan: Outing Class </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/images/blederan4.jpg" alt="">
                <div class="text w-100">
                  <h4>BPS & Diskominfo<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 1 Agustus 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 32 orang </li>
                    <li><i class="fa fa-note-sticky"></i> Kegiatan: Pengenalan & Pembinaan Desa Cinta Statistik </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/images/blederan5.jpg" alt="">
                <div class="text w-100">
                  <h4>BPD Desa Bulurejo<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 30 Juli 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 16 orang </li>
                    <li><i class="fa fa-note-sticky"></i> Kegiatan: Kunjungan Kerja </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/images/blederan6.jpg" alt="">
                <div class="text w-100">
                  <h4>Kab. Banyumas<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 28 Juli 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 16 orang </li>
                    <li><i class="fa fa-note-sticky"></i> Kegiatan: Kunjungan Belajar</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/images/blederan7.jpg" alt="">
                <div class="text w-100">
                  <h4>DLH Bandung<br></h4>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deskripsi Kunjungan:</li>
                    <li><i class="fa fa-calendar"></i> Tanggal: 17 Juli 2024</li>
                    <li><i class="fa fa-users"></i> Jumlah: 50 orang </li>
                    <li><i class="fa fa-note-sticky"></i> Kegiatan: Study Tour </li>
                  </ul>
                </div>
              </div>
            </div> --}}
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
            <img src="/images/about-left-image.jpg" alt="">
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