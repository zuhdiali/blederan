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
                @foreach ($publikasis as $publikasi)
                <h5> {{ $publikasi->nama_publikasi }}</h5>
                    <a href="{{url('admin-download-publikasi', $publikasi->id)}}" class="btn btn-primary mt-2" target="_blank">Unduh</a>
                <hr>
                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection