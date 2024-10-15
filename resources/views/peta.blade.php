@extends('layouts.app')

@section('content')
  
  <div class="visit-country">
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="section-heading">
                <h2>Peta Desa Blederan</h2>
                    <ul class="nav">
                        <li class="nav-item px-2 text-secondary">
                            <i class="fa fa-user"></i> Tim Pengembang
                        </li>
                        <li class="nav-item px-2 text-secondary">
                            <i class="fa fa-calendar"></i> 3 Oktober 2024
                        </li>
                    </ul>
            </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('images/peta.jpg')}}" class="img-fluid pb-5 " alt="image">
            </div>
            <div class="col-lg-6">
                
                <strong>A. Batas Wilayah</strong>
                <br>
                Batas Wilayah Desa Blederan Kecamatan Mojotengah sebagai berikut :
                <br>
                1.   Sebelah Utara     : berbatasan dengan Desa Sendangsari Kecamatan Garung
                <br>
                2.   Sebelah Timur     : berbatasan dengan Desa Gemblengan Kecamatan Garung
                <br>
                3.   Sebelah Selatan  : berbatasan dengan Desa Bumirejo Kecamatan Mojotengah
                <br>
                4.   Sebelah Barat      : berbatasan dengan Desa Wonokromo Kecamatan Mojotengah
                <br>
                <strong>B.  Peruntukan Lahan</strong>
                <br>
                Wilayah Desa Blederan sebagian besar merupakan tanah garapan berupa tanah sawah seluas 67 ha, dan sebagian kecil berupa tanah tegalan seluas 18 ha, pemukiman 22 ha, dengan hasil utama berupa padi dan sebagian sayuran berupa kobis, tomat dan cabe.

                <div class="col-lg-12 mt-5">
                    <div id="map">
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5596.571297101213!2d109.91171212253252!3d-7.311868896386512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a8e33f22365%3A0xd8a8af392da67ea3!2sBalai%20Desa%20%2F%20Kantor%20Kepala%20Desa%20Blederan!5e0!3m2!1sen!2sid!4v1727836245361!5m2!1sen!2sid" width="100%" height="550px" style="border:0; border-radius: 23px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.758709209982!2d109.90955559484267!3d-7.3112100207867865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a91c52ab135%3A0x2507636147492a01!2sBlederan%2C%20Kec.%20Mojotengah%2C%20Kabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1728960130020!5m2!1sid!2sid" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection