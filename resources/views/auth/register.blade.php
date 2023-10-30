@extends('layouts.app') @section('content')<div class="content-header mt-5">
    <div class="container-fluid text-center lead"><svg class="bi bi-person-circle" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg>
        <h1 class="m-0 text-dark" x-text="okee"></h1>@if(session('created'))<div class="row">
            <div class="col-12">
                <div class="alert alert-success">Berhasil membuat user</div>
            </div>
        </div>@endif
    </div>
</div>
<div class="content">
    <div class="container lead">
        <div class="row">
            <div class="col-12 col-md-3 p-3 p-md-5"></div>
            <div class="col-12 col-md-6 p-3 p-md-5">
                <form method="post" action="{{ route('register') }}">
                    <div class="card-body">@if($errors->any())<div class="alert alert-danger">@foreach($errors->all() as
                            $error) - {{ $error }}<br>@endforeach</div>@endif
                            
                            <div class="form-group"><label for="name"
                                x-text="namauser"></label><input id="name" placeholder="Masukkan user" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group"><label for="name"
                            x-text="emailuser"></label><input id="email" placeholder="Masukkan email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group"><label for="name"x-text="passuser"></label>
                            <input id="password" type="password" placeholder="Masukan password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
</div>
                            <div class="form-group"><label for="name"x-text="repassuser"></label>
                            <input id="password-confirm" placeholder="Masukkan konfirmasi password" type="password"
                                    class="form-control" name="password_confirmation" required
                                    autocomplete="new-password">

                            </div>
                            


                                @csrf<button type="submit" class="btn btn-dark btn-lg btn-block">
                                    Simpan
                                </button>
                        
                </form>
            </div>
        </div>
    </div>
</div>@endsection

