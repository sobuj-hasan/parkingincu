@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <!-- LOGIN PAGE START -->
    <div class="login-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12 py-md-5 m-auto">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card login-card my-5">
                            <h3 class="text-center mt-5">@lang('home.signin')</h3>
                            <h6 class="text-center mb-5">@lang('home.to_your_parking_incubator_account')</h6>
                            <div class="mb-5 custom-input ps-md-5 pe-md-5">
                                <input type="text" class="form-control custom-form-control placeicon" placeholder="@lang('home.email_address')" value="{{ old('email') }}" name="email">
                                @error('email')
                                    <span class="text-warning fw-bolder">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-5 custom-input ps-md-5 pe-md-5">
                                <input type="password" class="form-control custom-form-control placeicon" placeholder="@lang('home.password')" value="{{ old('password') }}" name="password">
                                @error('password')
                                    <span class="text-warning fw-bolder">{{ $message }}</span>
                                @enderror
                                <a class="d-flex justify-content-end fw-bolder text-white mt-2" href="#">@lang('home.forget_password')</a>
                            </div>
                            <div class="mt-3">
                                <button class="" type="submit" name="submit"> @lang('home.login') </button>
                                <a class="d-flex justify-content-start fw-bolder text-white mt-2 ms-5 mb-5" href="{{ route('register') }}">@lang('home.Dont_Have_any_Account') <em>&nbsp; @lang('home.signup')</em></a>
                            </div>
                            <p class="fw-bolder d-flex justify-content-center">@lang('home.signin_using')</p>
                            <ul class="d-flex justify-content-center mb-5">
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN PAGE END -->
@endsection
