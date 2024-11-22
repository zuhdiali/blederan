@extends('layouts.app')

@section('content')
  
<div class="visit-country">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>Media Sosial Desa {{ $environment->nama_desa }}</h2>
                </div>
            </div>
        </div>

      {{-- <img src="{{asset('images/sejarah.jpg')}}" class="img-fluid pb-5 w-50" alt="image"> --}}
        <div class="row">
            <div class="col">
                <hr>
                <h5>Facebook</h5>
                <a href="{{ $environment->facebook_url }}" target="_blank" class="btn btn-primary mt-2">
                    <i class="fab fa-facebook"></i>     
                    {{ $environment->facebook_username }}
                </a>
                <hr>
                <h5>Instagram</h5>
                <a href="{{ $environment->instagram_url }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-instagram"></i> 
                    {{ $environment->instagram_username }}
                </a>
                <hr>
                <h5>Twitter</h5>
                <a href="{{ $environment->twitter_url }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-twitter"></i>
                    {{ $environment->twitter_username }}
                </a>
                <hr>
                <h5>Youtube</h5>
                <a href="{{ $environment->youtube_url }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-youtube"></i>
                    {{ $environment->youtube_username }}
                </a>
                
            </div>
        </div>

    </div>
</div>

@endsection