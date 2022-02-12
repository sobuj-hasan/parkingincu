@extends('layouts.app')
@section('title', 'Our services')
@section('content')
    <!-- BANNER SECTION -->
    <section class="banner-two" style="background-image: url({{ asset('assets/img/photos/banner-image-3.png') }});">
        <div class="overlay py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h3>@lang('home.our_services')</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->

    <!-- OUR SERVICE PART START -->
    <section class="our-service bg-white py-4">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Management.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.management') </h5>
                            <li class="small-text pt-3 my-3">
                                @lang('home.service_one_listone')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_one_listtwo')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_one_listthree')
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">@lang('home.view_all')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Technical-Operation.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.technical_operation')</h5>
                            <li class="small-text pt-3 my-3">
                                @lang('home.service_two_listone')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_two_listtwo')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_two_listthree')
                            </li>
                            <li class="small-text pb-3 my-3">
                                @lang('home.service_two_listfour')
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">@lang('home.view_all')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Invest-&-Development.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.invest_development')</h5>
                            <li class="small-text pt-3 my-3">
                                @lang('home.service_three_listone')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_three_listtwo')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_three_listthree')
                            </li>
                            <li class="small-text pb-3 my-3">
                                @lang('home.service_three_listfour')
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">@lang('home.view_all')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Supplementary-Service.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.Supplementary_Service')</h5>
                            <li class="small-text pt-3 my-3">
                                @lang('home.service_four_listone')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_four_listtwo')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_four_listthree')
                            </li>
                            <li class="small-text pb-3 my-3">
                                @lang('home.service_four_listfour')
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">@lang('home.view_all')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Maintanence-Service.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.Maintenance_Service')</h5>
                            <li class="small-text pt-3 my-3">
                                @lang('home.service_five_listone')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_five_listtwo')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_five_listthree')
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">@lang('home.view_all')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Parking-Service-Area.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.Parking_Service_Area')</h5>
                            <li class="small-text pt-3 my-3">
                                @lang('home.service_six_listtone')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_six_listttwo')
                            </li>
                            <li class="small-text my-3">
                                @lang('home.service_six_listtthree')
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">@lang('home.view_all')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR SERVICE PART END -->

    <!-- BOOKING REQUEST -->
    <section id="booking-request" class="booking-request parking-valet my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-3 text-center">@lang('home.add_your_space_to_our_platform')</h5>
                    <h6 class="text-center">@lang('home.send_host_request')</h6>
                    <form method="POST" action="{{ route('neighbor.host') }}">
                        @csrf
                        <div class="contact-form py-5">
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.full_name')" value="{{ old('name') }}" name="name">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.contact_number')" value="{{ old('phone') }}" name="phone">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.email_address')" value="{{ old('email') }}" name="email">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.parking_space_country')" value="{{ old('country') }}" name="country">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.parking_space_city')" value="{{ old('city') }}" name="city">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.parking_space_address')" value="{{ old('address') }}" name="address">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.parking_rate_per_day')" value="{{ old('parking_rate') }}" name="parking_rate">
                                </div>
                                <div class="col-md-4 my-3">
                                    <select class="form-select" name="money_type">
                                        <option value="" selected>@lang('home.select_money_type')</option>
                                        <option value="Contactual">Contactual</option>
                                        <option value="NonContactual">NonContactual</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-md-4 my-3">
                                    <select class="form-select" name="parking_type">
                                        <option value="" selected>@lang('home.select_parking_type')</option>
                                        <option value="Residencial">Residencial</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-md-12 my-3">
                                    <textarea style="height: 230px;" class="custom-control" name="message" cols="30" placeholder="@lang('home.write_parking_host_message')" rows="10">{{ old('message') }}</textarea>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <button type="submit">@lang('home.Send_Neighbor_Host_Request')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- BOOKING REQUEST -->

    <!-- GET NOTIFICATION -->
    <section class="get-notificaiton my-5">
        <div class="container py-5">
            @include('app_components.subscriber')
        </div>
    </section>
    <!-- GET NOTIFICATION -->
@endsection










