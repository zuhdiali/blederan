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
            </div>
        </div>

    </div>

@endsection