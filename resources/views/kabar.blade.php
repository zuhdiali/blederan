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
        <?php $i = 1; ?>
        @foreach ($kabarTerkini as $kabar)
        <div id="top-banner-{{$i}}" class="banner" style="background: url({{asset('images/'.$gambar_kabar[$i-1])}}) no-repeat center center">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container bg-dark rounded py-4"  style="--bs-bg-opacity: .6;">
              <h2>Kabar terkini dari Desa {{$environment->nama_desa }}</h2>
              <h1>{{$kabar->judul}}</h1>
              {{-- <div class="border-button"><a href="{{ route('kampung-sayur')}}">Baca Selengkapnya</a></div> --}}
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-sm-4 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Jumlah Orang:</span><br>{{$kabar->jumlah}}</h4>
                      </div>
                      <div class="col-sm-4 col-6">
                        <i class="fa fa-calendar"></i>
                        <h4><span>Tanggal:</span><br>{{ \Carbon\Carbon::parse($kabar->tanggal)->locale('id')->translatedFormat('d F Y') }}</h4>
                      </div>
                      <div class="col-sm-4 col-6">
                        <i class="fa fa-circle-check"></i>
                        <h4><span>Instansi Terlibat:</span><br>{{ $kabar->instansi_terlibat}}</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php $i++; ?>
        @endforeach
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
            <h2>Kabar Terkini Desa {{$environment->nama_desa }}</h2>
            <p>Info terkini mengenai Desa {{$environment->nama_desa }}, Kabupaten Wonosobo.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
            <div class="items">
              <div class="row">
                @foreach ($kabars as $kabar)
                <div class="col-lg-12">
                  <div class="item">
                    <div class="row">
                      <div class="col-lg-4 col-sm-5">
                        <div class="image">
                          <img src="{{asset('uploads/informasi/'.$kabar->gambar)}}" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                          <h4>{{$kabar->judul}}</h4>
                          <span>{{$kabar->jumlah}} orang</span>
                          {{-- <div class="main-button">
                            <a href="{{ route('artikel') }}">Selengkapnya</a>
                          </div> --}}
                          <p>
                            @if($kabar->deskripsi)
                            {{-- {{ Str::limit($kabar->deskripsi, 150, '...') }} --}}
                            {{$kabar->deskripsi}}
                            @else
                            {{$kabar->judul}}
                            @endif
                          </p>
                          <ul class="info">
                            <li><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($kabar->tanggal)->locale('id')->translatedFormat('d F Y') }} </li>
                            <li><i class="fa fa-circle-check"></i> {{$kabar->instansi_terlibat}}</li>
                            {{-- <li><i class="fa fa-home"></i> $1.100.200</li> --}}
                          </ul>
                          {{-- <div class="text-button">
                            <a href="{{ route('kampung-sayur') }}">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

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
              {{$kabars->links()}}
            </div>
          </div>
        <div class="col-lg-4">
          <div class="side-bar-map">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5596.571297101213!2d109.91171212253252!3d-7.311868896386512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a8e33f22365%3A0xd8a8af392da67ea3!2sBalai%20Desa%20%2F%20Kantor%20Kepala%20Desa%20{{$environment->nama_desa }}!5e0!3m2!1sen!2sid!4v1727836245361!5m2!1sen!2sid" width="100%" height="550px" style="border:0; border-radius: 23px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
