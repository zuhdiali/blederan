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
                <a href="{{ getenv('FACEBOOK_URL') }}" target="_blank" class="btn btn-primary mt-2">
                    <i class="fab fa-facebook"></i>     
                    {{ getenv('FACEBOOK_USERNAME') }}
                </a>
                <hr>
                <h5>Instagram</h5>
                <a href="{{ getenv('INSTAGRAM_URL') }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-instagram"></i> 
                    {{ getenv('INSTAGRAM_USERNAME') }}
                </a>
                <hr>
                <h5>Twitter</h5>
                <a href="{{ getenv('TWITTER_URL') }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-twitter"></i>
                    {{ getenv('TWITTER_USERNAME') }}
                </a>
                <hr>
            </div>
        </div>

    </div>
</div>

@endsection