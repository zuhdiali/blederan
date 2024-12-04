@extends('layouts.app')

@section('content')
  
    <div class="visit-country">
        <div class="container">
            <div class="row">
                <div class="col">
                <div class="section-heading">
                    <h2>Peta Desa {{$environment->nama_desa}}</h2>
                </div>
                </div>
            </div>
        
            @if($environment->gambar_peta)
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('images/'.$environment->gambar_peta)}}" class="img-fluid pb-5" alt="peta {{$environment->nama_desa}}">
                </div>
            </div>
            @endif

            {!! $environment->peta!!}

            <div class="col-lg-12 mt-5">
                <div id="map">
                    {!! $environment->maps_desa!!}
                </div>
            </div>

        </div>
    </div>

@endsection