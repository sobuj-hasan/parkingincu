@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <!-- Register PAGE START -->
    <div class="signin-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 col-sm-12 py-lg-4 m-auto">
                    <div class="card login-card signin-card my-4">
                        <h3 class="text-center mt-4">@lang('home.signup')</h3>
                        <h6 class="text-center mb-3">@lang('home.to_your_parking_incubator_account')</h6>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-1">
                                        <label class="form-label">@lang('home.full_name')</label>
                                        <input type="text" class="form-control custom-form-control" placeholder="@lang('home.full_name')" value="{{ old('name') }}" name="name">
                                        @error('name')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-1">
                                        <label class="form-label">@lang('home.email_address')</label>
                                        <input type="text" class="form-control custom-form-control" placeholder="@lang('home.email_address')" value="{{ old('email') }}" name="email">
                                        @error('email')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-1">
                                        <label class="form-label">@lang('home.phone')</label>
                                        <input type="text" class="form-control custom-form-control" placeholder="@lang('home.phone')" value="{{ old('phone') }}" name="phone">
                                        @error('phone')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-1">
                                        <label class="form-label">@lang('home.password')</label>
                                        <input type="password" class="form-control custom-form-control" placeholder="@lang('home.password')" value="{{ old('password') }}" name="password">
                                        @error('password')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4 ps-lg-5 pe-lg-5">
                                    <div class="mb-4">
                                        <label class="form-label">@lang('home.retype_password')</label>
                                        <input type="password" class="form-control custom-form-control" placeholder="@lang('home.retype_password')" value="{{ old('password_confirmation') }}" name="password_confirmation">
                                        @error('password_confimation')
                                            <span class="text-warning text-bolder">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button class="" type="submit" name="submit"> @lang('home.register_now') </button>
                                <a class="d-flex justify-content-start text-white fw-bolder mt-2 ms-lg-5 mb-5" href="{{ route('login') }}">@lang('home.already_have_an_account') <em>&nbsp; @lang('home.signin')</em></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register PAGE END -->
@endsection

