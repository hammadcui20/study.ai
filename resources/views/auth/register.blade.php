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
                    <h2 class="text-warning fw-bold text-center mb-3">Sign-Up Here.....!</h2>
                    <div class="card shadow">
                        <div class="card-body">
                            <div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row g-3 justify-content-center">
                                        <div class="col-12">
                                            <div class="">
                                                <label class="form-label" for="name">{{ __('Name') }}</label>
                                                <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter here...." name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                            </div>
                                            @error('name')
                                            <div class="invalid-feedback" style="height:10px !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="">
                                                <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                                <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Enter here...." name="email" value="{{ old('email') }}" required autocomplete="email" />
                                            </div>
                                            @error('email')
                                            <div class="invalid-feedback" style="height:10px !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="">
                                                <label class="form-label" for="password">{{ __('Password') }}</label>
                                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter here...." name="password" required autocomplete="new-password" />
                                            </div>
                                            @error('password')
                                            <div class="invalid-feedback" style="height:10px !important;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="">
                                                <label class="form-label" for="confirmpassword">{{ __('Confirm Password') }}</label>
                                                <input type="password" id="confirmpassword" placeholder="Enter here...." class="form-control" name="password_confirmation" required autocomplete="new-password" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-warning text-white fw-bold w-100">{{ __('Register') }}</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="small fw-bold mt-2 pt-1 mb-0">
                                                Already have an account?
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
        </div>
    </div>
</div>
@endsection
