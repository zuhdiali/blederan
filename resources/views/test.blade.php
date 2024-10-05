@if(Auth::check())
<a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
{{ Auth::user()->name }}
hello
@else
<a href="{{ route('login') }}" class="btn btn-danger">Logout</a>
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Login
</button> --}}
@endif