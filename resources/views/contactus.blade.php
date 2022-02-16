@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <!-- CONTACT US PART START -->
    <!-- CONTACT US SECTION -->
    <section class="contact-us py-5">
        <div class="container py-4">
            <h3 class="text-center mb-5">@lang('home.contactus')</h3>
            <hr class="contact">
            <div class="row mt-4">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 address">
                    <h6 class="mt-4">@lang('home.address')</h6>
                    <hr class="menubefore">
                    <li class="d-flex my-4">
                        <i class="fas fa-map-marker-alt d-inline"></i>
                        <h5 class="mx-4">@lang('home.address_value')</h5>
                    </li>
                    <li class="d-flex my-4">
                        <i class="fas fa-phone-volume"></i>
                        <h5 class="mx-4">@lang('home.phone') : @lang('home.phone_value')</h5>
                    </li>
                    <li class="d-flex my-4">
                        <i class="far fa-envelope"></i>
                        <h5 class="mx-4">@lang('home.email_value')</h5>
                    </li>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <h6 class="mt-4">@lang('home.social_media')</h6>
                    <hr class="menubefore">
                    <div class="social-link mt-3">
                        <ul class="d-flex">
                            <li class="mx-2">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="mx-2">
                                <a href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="mx-2">
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="mx-2">
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="mx-2">
                                <a href=""><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="contact">
            <div class="row my-5">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-auto">
                    <form method="GET" action="{{ route('contact.message') }}">
                        @csrf
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-md-6 my-3">
                                    <label class="mb-2" for="">@lang('home.full_name')</label>
                                    <input type="text" class="custom-control" placeholder="@lang('home.type_your_name')" value="{{ old('name') }}" name="name">
                                    @error('name')
                                        <span class="text-warning fw-bolder">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-3">
                                    <label class="mb-2" for="">@lang('home.your_email')</label>
                                    <input type="text" class="custom-control" placeholder="@lang('home.your_email')" value="{{ old('email') }}" name="email">
                                    @error('email')
                                        <span class="text-warning fw-bolder">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-3">
                                    <label class="mb-2" for="">@lang('home.contact_number')</label>
                                    <input type="text" class="custom-control" placeholder="@lang('home.land_number')" value="{{ old('phone') }}" name="phone">
                                    @error('phone')
                                        <span class="text-warning fw-bolder">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-3">
                                    <label class="mb-2" for="">@lang('home.What_do_you_want_to_inquire')</label>
                                    <input type="text" class="custom-control" placeholder="@lang('home.type_text')" value="{{ old('inquery') }}" name="inquery">
                                    @error('inquery')
                                        <span class="text-warning fw-bolder">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-3">
                                    <label class="mb-2" for="">@lang('home.service_name')</label>
                                    <input type="text" class="custom-control" placeholder="@lang('home.Type_Services')" value="{{ old('service') }}" name="service">
                                    @error('service')
                                        <span class="text-warning fw-bolder">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-3">
                                    <label class="mb-2" for="">@lang('home.address')</label>
                                    <input type="text" class="custom-control" placeholder="@lang('home.your_address')" value="{{ old('address') }}" name="address">
                                    @error('address')
                                        <span class="text-warning fw-bolder">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 my-3">
                                    <label class="mb-2" for="">@lang('home.message') </label>
                                    <textarea style="height: 200px;" class="custom-control" name="message" cols="30" placeholder="@lang('home.Type_your_message')" rows="10">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="text-warning fw-bolder">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-3">
                                    <button type="submit"> @lang('home.Submit_Message') </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT US SECTION -->
    <!-- GOOGLE MAP -->
    <section class="google map mt-5 mb-4">
        <div class="container pt-4">
            <h5 class="mb-4">@lang('home.google_map')</h5>
            <iframe class="w-100" style="height: 500px; border: 1px solid #A7A7A7;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.328356274476!2d39.21814441540788!3d21.573102374346906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d17476a9bf87%3A0x6be950c4a79fd2e9!2sRiadah%20Polyclinic!5e0!3m2!1sen!2sbd!4v1641414260646!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </section>
    <!-- GOOGLE MAP -->

    <!-- GET NOTIFICATION -->
    <section class="get-notificaiton my-5">
        <div class="container py-5">
            @include('app_components.subscriber')
        </div>
    </section>
    <!-- GET NOTIFICATION -->
@endsection








