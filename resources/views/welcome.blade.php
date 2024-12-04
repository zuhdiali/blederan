@extends('layouts.app')

@section('content')

  <!-- ***** Main Banner Area Start ***** -->
  <div class="about-main-content" style="background-image: url({{asset('images/'.$environment->bg_utama)}})">
  <div class="container">
    <div class="row">
    <div class="col-lg-12">
      <div class="content">
      <div class="blur-bg" style="background: url({{asset('images/'.$environment->bg_utama)}}) no-repeat center center fixed"></div>
      {{-- <h4>Selamat Datang di</h4> --}}
      <h2>Selamat Datang di Desa {{ $environment->nama_desa }}</h2>
      <div class="line-dec"></div>
      <p>{{$environment->tagline}}</p>
      <div class="main-button">
        <a href="{{ url('medsos', $id_desa) }}"><i class="fa-solid fa-link"></i>  Media Sosial Desa {{ $environment->nama_desa }}</a>
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  @if($environment->ada_produk)
  <div class="cities-town">
    <div class="container">
      <div class="row">
      <div class="slider-content">
        <div class="row">
        <div class="col-lg-12">
          <h2>Produk <em>Minggu Ini</em></h2>
        </div>
        <div class="col-lg-12">
          <div class="owl-cites-town owl-carousel">
          @foreach ($produks as $produk)
          <div class="item">
            <div class="thumb">
            <img class="item-produk" src="{{ asset('uploads/produk/' . $produk->gambar_produk) }}" alt="{{ $produk->nama_produk }}" >
            <h4>{{ $produk->nama_produk }}</h4>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-light">
              <div class="row">
              <div class="col">
                <i class="fa-solid fa-money-bill-wave"></i>
                Harga:
              </div>
              <div class="col">
                <p class="text-end"> Rp {{ number_format($produk->harga, 0, ',', '.') }} </p>
              </div>
              </div>
            </li>
            <li class="list-group-item list-group-item-light">
              <div class="row">
              <div class="col">
                <i class="fa fa-box"></i> Stok:
              </div>
              <div class="col">
                <p class="text-end">  {{ $produk->stok }} </p>
              </div>
              </div>
            </li>
            <li class="list-group-item list-group-item-light">
              <div class="row">
              <div class="col-5">
                <i class="fa fa-user"></i> Penjual:
              </div>
              <div class="col-7">
                <p >  {{ $produk->nama_penjual }} </p>
              </div>
              </div>
            </li>
            </ul>
            <div class="main-button d-flex justify-content-center mt-2">
            <a href="https://wa.me/62{{substr($produk->kontak_penjual,1)}}" > <i class="fa-solid fa-phone"></i>  Hubungi Penjual</a>
            </div>
          </div>
          @endforeach
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  @endif
  {{-- ELSE DI SINI --}}

  {{-- Ini <section> jangan dihapus, soalnya buat margin --}}
  <section>
  </section>
  {{-- Ini <section> jangan dihapus, soalnya buat margin --}}

  @if($environment->ada_akomodasi)
  <div class="cities-town">
  <div class="container">
    <div class="row">
    <div class="slider-content">
      <div class="row">
      <div class="col-lg-12">
        <h2>Jasa <em>Akomodasi</em></h2>
      </div>
      <div class="col-lg-12">
        <div class="owl-cites-town owl-carousel">
        @foreach ($akomodasis as $akomodasi)
        <div class="item">
          <div class="thumb">
          <img class="item-akomodasi" src="{{ asset('uploads/akomodasi/' . $akomodasi->gambar_akomodasi) }}" alt="{{ $akomodasi->nama_akomodasi }}">
          <h4>{{ $akomodasi->nama_akomodasi }}</h4>
          </div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item list-group-item-light">
            <div class="row">
            <div class="col">
              <i class="fa-solid fa-money-bill-wave"></i>
              Harga:
            </div>
            <div class="col">
              <p class="text-end"> Rp {{ number_format($akomodasi->harga, 0, ',', '.') }} </p>
            </div>
            </div>
          </li>
          <li class="list-group-item list-group-item-light">
            <div class="row">
            <div class="col-8">
              <i class="fa fa-box"></i> Ruang Tersisa:
            </div>
            <div class="col-4">
              <p class="text-end">  {{ $akomodasi->stok }} </p>
            </div>
            </div>
          </li>
          <li class="list-group-item list-group-item-light">
            <div class="row">
            <div class="col-5">
              <i class="fa fa-user"></i> Pemilik:
            </div>
            <div class="col-7">
              <p >  {{ $akomodasi->nama_pemilik }} </p>
            </div>
            </div>
          </li>
          </ul>
          <div class="main-button d-flex justify-content-center mt-2">
          <a href="https://wa.me/62{{substr($akomodasi->nama_pemilik,1)}}"  > <i class="fa-solid fa-phone"></i>  Hubungi Pemilik</a>
          </div>
        </div>
        @endforeach
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>
  @endif
  {{-- ELSE DI SINI --}}

  @if($environment->ada_jadwal)
  <div class="container text-center mb-5">
    <h2>Jadwal Eduwisata ke Desa {{ $environment->nama_desa }}</h2>
  </div>

  {{-- Ini buat kalender --}}
  <div class="container">
    {{-- <div class="card"> --}}
    <div id='calendar'></div>
    {{-- </div> --}}
  </div>  
  @endif
  {{-- ELSE DI SINI --}}


@if($environment->ada_eduwisata)
<div class="weekly-offers">
  <div class="container">
    <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <div class="section-heading text-center">
      <h2>Kunjungan dan Eduwisata yang Pernah Dilakukan</h2>
      <p>Desa {{ $environment->nama_desa }} sering menerima kunjungan dari berbagai pihak.</p>
      </div>
    </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12">
      <div class="owl-weekly-offers owl-carousel">
      @foreach ($eduwisatas_berlalu as $eduwisata)
      <div class="item">
        <div class="thumb">
        <img src="{{ asset('uploads/informasi/' . $eduwisata->gambar) }}" alt="">
        <div class="text w-100">
          <h4>{{$eduwisata->instansi_terlibat}}<br></h4>
          <div class="line-dec"></div>
          <ul>
          <li>Deskripsi Kunjungan:</li>
          <li><i class="fa fa-calendar"></i> Tanggal: {{ \Carbon\Carbon::parse($eduwisata->tanggal)->locale('id')->translatedFormat('d F Y') }}</li>
          <li><i class="fa fa-users"></i> Jumlah: {{$eduwisata->jumlah}} orang </li>
          <li><i class="fa fa-note-sticky"></i> Kegiatan:  @if($eduwisata->deskripsi) {{$eduwisata->deskripsi}} @else {{$eduwisata->judul}} @endif </li>
          </ul>
        </div>
        </div>
      </div>
      @endforeach
      </div>
    </div>
    </div>
  </div>
</div>
@endif
  {{-- ELSE DI SINI --}}

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var d = new Date();
    var m = d.getMonth()+1;
    var y = d.getFullYear();
    var dt ;
      if(m<10){
        dt = y +'-0'+m+'-01';
        }

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      locale: 'id',
      defaultDate: dt,
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: [
        @foreach ($eduwisatas as $eduwisata)
        {
          title : 'Kunjungan dari {{$eduwisata->instansi_terlibat}}',
          start : '{{$eduwisata->tanggal}}',
          end : '{{$eduwisata->tanggal_selesai}}',
          description : '{{$eduwisata->deskripsi}}',
          extendedProps: {
            jumlah: '{{$eduwisata->jumlah}}',
            jamMulai: '{{ substr($eduwisata->tanggal, 11, 5) }}',
            jamSelesai: '{{ substr($eduwisata->tanggal_selesai, 11, 5) }}',
          }
        },
        @endforeach

      ],
      eventClick: function(info) {
        Swal.fire({
          title: info.event.title,
          text: "Jumlah: " + info.event.extendedProps.jumlah + " orang. " + "Jam: " + info.event.extendedProps.jamMulai + "-" + info.event.extendedProps.jamSelesai + ".",
        });
        // change the border color just for fun
        info.el.style.borderColor = '#007681';
      }

    });

    calendar.render();
  });
    </script>
@endsection
