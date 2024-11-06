@extends('layouts.app')

@section('content')
  
<div class="visit-country">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>Daftar Publikasi</h2>
                        
                </div>
            </div>
        </div>

      {{-- <img src="{{asset('images/sejarah.jpg')}}" class="img-fluid pb-5 w-50" alt="image"> --}}
        <div class="row">
            <div class="col">
                <hr>
                <h5>Pofil Desa {{ getenv('NAMA_DESA') }}</h5>
                    <a href="{{route('download')}}" class="btn btn-primary mt-2">Unduh</a>
                <hr>
            </div>
        </div>

    </div>
</div>

@endsection