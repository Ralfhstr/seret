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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <h1 class="pb-4 fw-bold mb-0 fn">Registrasi</h1>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="fn col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="fn col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control @error('Phone') is-invalid @enderror" name="phone" value="{{ old('Phone') }}" required autocomplete="phone" autofocus>

                                        @error('Phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="fn col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="fn col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="fn col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-6">
                                        <input type="hidden" id="level" type="text" class="form-control" name="level" value="customer" >
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn bt">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
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
