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
                            <h3 class="text-center mt-5">Sing In</h3>
                            <h6 class="text-center mb-5">to your Parking Incubator Account</h6>
                            <div class="mb-5 custom-input ps-md-5 pe-md-5">
                                <input type="text" class="form-control custom-form-control placeicon" placeholder="Email Address" value="{{ old('email') }}" name="email">
                                @error('email')
                                    <span class="text-warning fw-bolder">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-5 custom-input ps-md-5 pe-md-5">
                                <input type="password" class="form-control custom-form-control placeicon" placeholder="Password" value="{{ old('password') }}" name="password">
                                @error('password')
                                    <span class="text-warning fw-bolder">{{ $message }}</span>
                                @enderror
                                <a class="d-flex justify-content-end fw-bolder text-white mt-2" href="#">Forget Password?</a>
                            </div>
                            <div class="mt-3">
                                <button class="" type="submit" name="submit"> Log In </button>
                                <a class="d-flex justify-content-start fw-bolder text-white mt-2 ms-5 mb-5" href="{{ route('register') }}">Don't Have any Account ? <em>&nbsp; Sign Up</em></a>
                            </div>
                            <p class="fw-bolder d-flex justify-content-center">Sign In using</p>
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

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
