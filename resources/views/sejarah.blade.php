@extends('layouts.app')

@section('content')
    
    <div class="visit-country">
        <div class="container">
            <div class="row">
                <div class="col">
                <div class="section-heading">
                    <h2>Sejarah Desa {{$environment->nama_desa}}</h2>
                </div>
                </div>
            </div>
        
            <div class="row">
                @if($environment->gambar_sejarah)
                <div class="col-lg-6">
                    <img src="{{asset('images/'.$environment->gambar_sejarah)}}" class="img-fluid pb-5" alt="Sejarah {{$environment->nama_desa}}">
                </div>
                @endif
            </div>

            {!! $environment->sejarah!!}
        </div>
    </div>

@endsection