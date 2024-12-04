@extends('layouts.app2')

@section('content')

<!-- Button trigger modal -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form method="POST" action="{{ route('login.post') }}">
              @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" name="username" value="{{ old('username') }}" required
                  autocomplete="username" autofocus placeholder="Masukkan username di sini">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required
                  autocomplete="current-password">
              </div>
              {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div> --}}
              @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
              <br>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <br />
            <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> Kembali</a>

    </div>
</section>
@endsection