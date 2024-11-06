@extends('layouts.app')

@section('content')
  
<div class="visit-country">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>Media Sosial Desa {{ getenv('NAMA_DESA') }}</h2>
                </div>
            </div>
        </div>

      {{-- <img src="{{asset('images/sejarah.jpg')}}" class="img-fluid pb-5 w-50" alt="image"> --}}
        <div class="row">
            <div class="col">
                <hr>
                <h5>Facebook</h5>
                <a href="https://www.facebook.com/pesona.{{ getenv('NAMA_DESA') }}" target="_blank" class="btn btn-primary mt-2">
                    <i class="fab fa-facebook"></i>     
                    Pesona {{ getenv('NAMA_DESA') }}
                </a>
                <hr>
                <h5>Instagram</h5>
                <a href="https://www.instagram.com/desa_{{ getenv('NAMA_DESA') }}?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-instagram"></i> 
                    desa_{{ getenv('NAMA_DESA') }}
                </a>
                <hr>
                <h5>Twitter</h5>
                <a href="https://x.com/D{{ getenv('NAMA_DESA') }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-twitter"></i>
                    desa_{{ getenv('NAMA_DESA') }}
                </a>
                <hr>
            </div>
        </div>

    </div>
</div>

@endsection