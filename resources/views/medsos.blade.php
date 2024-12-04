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

      <div class="row">
            <div class="col">
                <hr>
                @if($environment->facebook_url && $environment->facebook_username)
                <h5>Facebook</h5>
                <a href="{{ $environment->facebook_url }}" target="_blank" class="btn btn-primary mt-2">
                    <i class="fab fa-facebook"></i>     
                    {{ $environment->facebook_username }}
                </a>
                @endif
                @if($environment->instagram_url && $environment->instagram_username)
                <hr>
                <h5>Instagram</h5>
                <a href="{{ $environment->instagram_url }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-instagram"></i> 
                    {{ $environment->instagram_username }}
                </a>
                @endif
                @if($environment->twitter_url && $environment->twitter_username)
                <hr>
                <h5>Twitter</h5>
                <a href="{{ $environment->twitter_url }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-twitter"></i>
                    {{ $environment->twitter_username }}
                </a>
                @endif
                @if($environment->youtube_url && $environment->youtube_username)
                <hr>
                <h5>Youtube</h5>
                <a href="{{ $environment->youtube_url }}" target="_blank" class="btn btn-primary mt-2 text-white">
                    <i class="fab fa-youtube"></i>
                    {{ $environment->youtube_username }}
                </a>
                @endif
            </div>
        </div>

    </div>
</div>

@endsection