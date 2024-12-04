@extends('layouts.app2')

@section('content')
<section>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('reset-password-post', $user->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required autofocus value=" {{ $user->name }}" disabled>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" class="form-control" id="username" name="username" required value=" {{ $user->username }}" disabled>
                            @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="password" class="form-control" id="password" name="password" required >
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <hr>
                        <div class="form-group mb-5">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Ketikkan ulang password">
                            @if ($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                        <hr>
                        @if (Auth::user()->id_desa == '999999')  {{-- Jika yang login adalah superadmin--}}
                        <div class="form-group">
                            <label for="id_desa">Desa</label>
                            <select class="form-control" id="id_desa" name="id_desa" required disabled>
                                <option value="{{ $user->id_desa }}" selected>{{ $user->desa->nama_desa }}</option>
                            </select>
                            @if ($errors->has('id_desa'))
                            <span class="text-danger">{{ $errors->first('id_desa') }}</span>
                            @endif
                        </div>
                        <hr>
                        @endif
                        <button type="submit" class="btn btn-primary">Reset Pengguna</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
@endsection
