<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Desa Blederan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

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
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('welcome') }}" class="{{ Request::path() ==  '/' ? 'active' : ''  }}">Beranda</a></li>
                        {{-- <li><a href="{{ route('produk') }}" class="{{ Request::path() ==  'produk' ? 'active' : ''  }}">Produk</a></li> --}}
                        <li><a href="{{ route('artikel') }}" class="{{ Request::path() ==  'artikel' ? 'active' : ''  }}">Artikel</a></li>
                        <li><a href="{{ route('data') }}" class="{{ Request::path() ==  'data' ? 'active' : ''  }}">Data</a></li>
                        {{-- <li><a href="reservation.html">Book Yours</a></li> --}}
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  @yield('content')

  <!-- ***** Footer Area Start ***** -->
  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Ikuti Media Sosial Kami</h2>
          <div class="d-flex flex-row">
            <div class="p-2">
              <h4>
                <a href="https://www.facebook.com/pesona.blederan" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a>
              </h4>
            </div>
            <div class="p-2">
              <h4>
                <a href="https://www.instagram.com/desa_blederan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
              </h4>
            </div>
            <div class="p-2">
              <h4>
                <a href="https://x.com/DBlederan" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
              </h4>
            </div>
          </div>
          {{-- <div class="row justify-content-md-center">
            <div class="col">
              <h4>
                <a href="https://facebook.com/templatemo" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a>
              </h4>
            </div>
            <div class="col">
              <h4>
                <a href="https://facebook.com/templatemo" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a>
              </h4>
            </div>
            <div class="col">
              <h4>
                <a href="https://facebook.com/templatemo" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a>
              </h4>
            </div>
          </div> --}}
        </div>
        <div class="col-lg-4">
          {{-- <div class="border-button">
            <a href="reservation.html">Book Yours Now</a>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  
  <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright © 2024 <a href="https://wonosobokab.bps.go.id/id" target="_blank" title="Badan Pusat Statistik Wonosobo">BPS Wonosobo</a>.
            <br>Pengembang: <a href="https://wa.me/6282328839199" target="_blank" title="Hubungi WhatsApp">Zuhdi Ali Hisyam</a>. Desain: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
          </div>
        </div>
      </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script src="assets/js/chart-area-demo.js"></script>
  <script src="assets/js/chart-bar-demo.js"></script>
  <script src="assets/js/chart-pie-demo.js"></script>
  
  </body>

</html>
