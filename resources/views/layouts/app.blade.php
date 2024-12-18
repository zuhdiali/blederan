<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kavoon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Desa {{ $environment->nama_desa }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

     <!-- MDB -->
    {{-- <link rel="stylesheet" href="css/bootstrap-login-form.min.css" /> --}}

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.scss')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link href="{{asset('fullcalendar/packages/core/main.css')}}" rel='stylesheet' />
    <link href="{{asset('fullcalendar/packages/daygrid/main.css')}}" rel='stylesheet' />

    <!--Icon Web-->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/'.$environment->gambar_logo) }}" >

    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>
    
    <script src="{{asset('js/popper.min.js')}}"></script>

  </head>

<body>
    
 
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/', $environment->id_desa)}}" class="logo">
                      <img src="{{ asset('images/'.$environment->gambar_logo) }}" alt="logo" >
                      <p style="
                      font-family: 'Kavoon';
                      color: black;"
                      class="fs-3" id="nama_desa_logo">
                        {{$environment->nama_desa}}
                      </p>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ url('/', $environment->id_desa) }}" class="{{ Request::path() ==  '/' ? 'active' : ''  }}">Beranda</a></li>
                        {{-- <li><a href="{{ url('produk', $environment->id_desa) }}" class="{{ Request::path() ==  'produk' ? 'active' : ''  }}">Produk</a></li> --}}
                        <li><a href="{{ url('kabar', $environment->id_desa) }}" class="{{ Request::path() ==  'kabar' ? 'active' : ''  }}">Kabar</a></li>
                        @if($environment->ada_publikasi=="1")
                        <li><a href="{{ url('publikasi', $environment->id_desa) }}" class="{{ Request::path() ==  'publikasi' ? 'active' : ''  }}">Publikasi</a></li>
                        @endif
                        @if($environment->ada_sejarah=="1" || $environment->ada_peta=="1")
                        <li>
                          <div class="dropdown">
                            <button class="btn dropdown-toggle text-white" id="button-profile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Profil
                            </button>
                            <ul class="dropdown-menu">
                              @if($environment->ada_sejarah=="1")
                              <li><a class="dropdown-item text-black" href="{{url('sejarah', $environment->id_desa)}}">Sejarah</a></li>
                              @endif
                              @if($environment->ada_peta=="1")
                              <li><a class="dropdown-item text-black" href="{{url('peta', $environment->id_desa)}}">Peta</a></li>
                              @endif
                            </ul>
                          </div>
                        </li>
                        @endif
                        
                        <li><a href="{{ url('data2', $environment->id_desa) }}" class="{{ Request::path() ==  'data2' ? 'active' : ''  }}">Data</a></li>
                        
                          @if(Auth::check())
                          <li>
                            <a href="{{ route('admin-dashboard') }}" class="btn btn-primary">Dashboard</a>
                          </li>  
                          <li>  
                            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                          </li>
                          @else
                          <li>  
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                          </li>
                          @endif
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  {{-- <div class="min-vh-75"> --}}
  @yield('content')
  {{-- </div> --}}

  <!-- ***** Footer Area Start ***** -->
  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Ikuti Media Sosial Desa</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            @if($environment->facebook_url)
            <div class="p-2">
              <h4>
                <a href="{{ $environment->facebook_url }}" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a>
              </h4>
            </div>
            @endif
            @if($environment->instagram_url)
            <div class="p-2">
              <h4>
                <a href="{{ $environment->instagram_url }}" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
              </h4>
            </div>
            @endif
            @if($environment->twitter_url)
            <div class="p-2">
              <h4>
                <a href="{{ $environment->twitter_url }}" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
              </h4>
            </div>
            @endif
            @if($environment->youtube_url)
            <div class="p-2">
              <h4>
                <a href="{{ $environment->youtube_url }}" target="_blank" class="text-white"><i class="fab fa-youtube"></i></a>
              </h4>
            </div>
            @endif
          </div>
        </div>
        {{--<div class="col-lg-4">
           <div class="border-button">
            <a href="reservation.html">Book Yours Now</a>
          </div> 
        </div>--}}
      </div>
    </div>
  </div>
  
  <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            {{-- FOOTER INI DILARANG DIUBAH --}}
            <p>Copyright © 2024 <a href="http://wonosobokab.bps.go.id" target="_blank" rel="noopener noreferrer">BPS Wonosobo</a>.
            <br>Pengembang:   <a href="https://wa.me/6282328839199" target="_blank" title="Hubungi WhatsApp">Zuhdi Ali Hisyam</a>. Desain: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
            {{-- FOOTER INI DILARANG DIUBAH --}}
          </div>
        </div>
      </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  
  <script src="{{asset('js/isotope.min.js')}}"></script>
  <script src="{{asset('js/owl-carousel.js')}}"></script>
  
  <script src="{{asset('js/tabs.js')}}"></script>
  <script src="{{asset('js/popup.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>


  {{-- <script src="assets/js/chart-area-demo.js"></script>
  <script src="assets/js/chart-bar-demo.js"></script>
  <script src="assets/js/chart-pie-demo.js"></script> --}}

  <script src="{{asset('fullcalendar/packages/core/main.js')}}"> </script>
  <script src="{{asset('fullcalendar/packages/interaction/main.js')}}"></script>
  <script src="{{asset('fullcalendar/packages/daygrid/main.js')}}"></script>
  <script src="{{asset('fullcalendar/packages/core/locales/id.js')}}"></script>

  <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
  <script>
    $(document).ready(function(){
      $('#nama_desa_logo').css('color', '{{$environment->warna_font_logo}}');
    });
  </script>
  </body>

</html>
