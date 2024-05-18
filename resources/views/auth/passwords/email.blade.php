@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow bg-light">
        <div class="card-body">
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                        <div>
                            <img src="{{ asset('images/hardware6.png') }}" class="img-fluid w-100 vh-100 rounded shadow" alt="">
                        </div>
                </div>
                <div class="col-6">
                    <h2 class="text-warning fw-bold text-center mb-3">Forget Password Here.....!</h2>
                    <div class="card shadow">
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row g-3 justify-content-center">
                                    <div class="col-12">
                                        <div class="">
                                            <label for="email" class="mb-3">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email....." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="">
                                            <button type="submit" class="btn btn-warning text-white fw-bold w-100">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                            <p class="small fw-bold mt-2 pt-1 mb-0">
                                                Try to again login?
                                                <a href="{{url('/login')}}" class="link-danger">Login</a>
                                            </p>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
