@extends('layouts.app')

@section('content')
<section>
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
                    <h2 class="text-warning fw-bold text-center mb-3">Login Here.....!</h2>
                    <div class="card shadow">
                        <div class="card-body">
                            <div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="row g-3 justify-content-center">
                                        <div class="col-12">
                                            <div class="">
                                                <label class="form-label" for="form3Example3">{{ __('Email Address') }}</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email...." value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="">
                                                <label class="form-label" for="form3Example4">{{ __('Password') }}</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password...." required autocomplete="current-password"/>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                                    <label class="form-check-label" for="form2Example3">
                                                    {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-warning fw-bold text-white w-100">{{ __('login') }}</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="small fw-bold mt-2 pt-1 mb-0">
                                                Don't have an account?
                                                <a href="{{url('/register')}}" class="link-danger">Register</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <div>
            <div>
        <div>
    <div>
</section>
@endsection
