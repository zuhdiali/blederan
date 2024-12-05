<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Web Desa Wonosobo</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('css/templatemo-woox-travel.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.scss')}}">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  <!--Icon Web-->
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo_only.svg') }}" >

  <script src="{{asset('js/popper.min.js')}}"></script>

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

  <div class="page-heading" style="background-image: url({{asset('images/bg-landing.png')}})">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Selamat Datang di Website Desa di Wonosobo</h4>
          <h2>Silahkan Pilih Kecamatan dan Desa</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="search-form">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <form id="search-form" name="gs" method="submit" role="search" action="#">
                    <div class="row">
                      <div class="col-lg-2">
                        <h4>Pilih :</h4>
                      </div>
                      <div class="col-lg-4">
                          <fieldset>
                              <select name="Location" class="form-select" aria-label="Default select example" id="pilihKecamatan" >
                                  <option selected>-- Pilih Kecamatan --</option>
                                  @foreach ($kecamatans as $kecamatan)
                                      <option value="{{$kecamatan->nama_kecamatan}}">{{$kecamatan->nama_kecamatan}}</option>
                                  @endforeach
                              </select>
                          </fieldset>
                      </div>
                      <div class="col-lg-4">
                          <fieldset>
                              <select name="Price" class="form-select" aria-label="Default select example" id="pilihDesa" >
                                  <option selected>-- Pilih Desa --</option>
                                  @foreach ($desas as $desa)
                                      <option value="{{$desa->id_desa}}">{{$desa->nama_desa}}</option>
                                  @endforeach
                              </select>
                          </fieldset>
                      </div>
                      <div class="col-lg-2">                        
                        <a href="" id="lihat-website" class="btn btn-outline-light">
                          Lihat Website
                        </a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </div>

  <div class="call-to-action" style="margin-top:0px">
    <div class="container">
      <div class="row">
        <div class="col">
          <h4>Ikuti Media Sosial Pengembang Website</h4>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <div class="p-2">
              <h4>
                <a href="https://www.facebook.com/profile.php?id=100008071667807" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a>
              </h4>
            </div>

            <div class="p-2">
              <h4>
                <a href="https://www.instagram.com/zuhdiali_/" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
              </h4>
            </div>
          </div>
        </div>
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

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  
  <script src="{{asset('js/isotope.min.js')}}"></script>
  <script src="{{asset('js/owl-carousel.js')}}"></script>
  
  <script src="{{asset('js/tabs.js')}}"></script>
  <script src="{{asset('js/popup.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>

  <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>

  <script>
    $(document).ready(function() {
      var desas = @json($desas);
      $('#pilihKecamatan').change(function() {
        $('#pilihDesa').empty();
        $('#pilihDesa').append('<option selected>-- Pilih Desa --</option>');
        desas.forEach(desa => {
          if(desa.nama_kecamatan == $(this).val()) {
            $('#pilihDesa').append('<option value="' + desa.id_desa + '">' + desa.nama_desa + '</option>');
          }
        });
      });

      $('#lihat-website').click(function() {
        var kecamatan = $('#pilihKecamatan').val();
        var desa = $('#pilihDesa').val();
        if(kecamatan == '-- Pilih Kecamatan --' || desa == '-- Pilih Desa --') {
          alert( 'Silahkan pilih kecamatan dan desa terlebih dahulu', 'warning');
        } else {
          $('#lihat-website').attr('href', '/' + desa);
          console.log(desa);
        }
      });
    });
  </script>
  </body>

</html>
