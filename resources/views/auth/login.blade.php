@extends('layouts.app')

@section('content')
<style>
    .bn{
        background-color: rgb(240, 240, 240);
        border: rgb(240, 240, 240);
    }
    .fn{
        color: #1AA2CA
    }
    .bt {
        background-color: #1AA2CA;
        border: none;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .bt:hover {
        background-color: #147995;
    }
</style>
<div class="container-sm my-5 py-5">
    <div class="row d-flex justify-content-center">
        <div class="col col-xl-10">
            <div class="card bn" style="border-radius:30px">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-3 p-lg-5 text-white">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <h1 class="fw-bold mb-0 fn">Selamat Datang!</h1>
                                </div>
                                <h5 class="fw-normal mb-3 pb-3 fn">Login Ke Akun Anda</h5>
                                <div class="row mb-3">
                                    <div class="col-md-10">
                                        <label class="h3 fn" for="email">Email</label>
                                        <input id="email" type="email" class="bg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-10">
                                        <label class="h3 fn" for="password">Password</label>
                                        <input id="password" type="password" class="bg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="pt-1 mb-4">
                                    <button class="btn bt btn-lg btn-block text-light" type="submit"> {{__('Login')}}</button>
                                </div>
                                <p class="fn mb-5 pb-lg-2">Don't have an account? <a class="h5 font" href="{{route('register')}}" style="text-decoration:none">Register Here</a></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 d-none d-md-block my-5">
                        <img src="{{ asset('storage/images/Logo TuyoGas Tengah.png') }}" alt="login form" style="width: 70%"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
