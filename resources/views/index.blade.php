@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- BANNER SECTION -->
    <section class="banner">
        <div class="overlay py-lg-5">
            <div class="container text-center">
                <div class="banner-content mx-lg-5 px-lg-5">
                    <h1 class="px-lg-5">@lang('home.find_the_parking_space')</h1>
                    <div class="search-bar my-5">
                        <form method="GET" action="{{ route('search.result') }}" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="search-slt" name="parking_space">
                                                <option value="">@lang('home.select_parking_space')</option>
                                                @foreach ($parking_spaces as $space)
                                                    <option value="{{ $space->name }}">{{ $space->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="search-slt" name="parking_city">
                                                <option value="">@lang('home.select_parking_city')</option>
                                                @foreach ($parking_spaces as $space)
                                                    <option value="{{ $space->city }}">{{ $space->city }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                            <select class="search-slt" name="parking_address">
                                                <option value="">@lang('home.select_address')</option>
                                                @foreach ($parking_spaces as $space)
                                                    <option value="{{ $space->address }}">{{ $space->address }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                            <input type="text" class="search-slt last-input" placeholder="@lang('home.phone_number')" value="{{ old('phone') }}" name="phone">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                            <button type="submit" class="wrn-btn">@lang('home.find_space')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->

    <!-- SERVICE QUALITY -->
    <section class="quality-type py-lg-5">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <div class="quality-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 mt-4">
                                <img src="assets/img/icon/facilities.png" alt="icon-img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>@lang('home.Cheap_Cost_Much_Facilities')</h5>
                                <p class="paragraph">@lang('home.Cheap_Cost_Much_Facilities_article')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <div class="quality-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 mt-4">
                                <img src="assets/img/icon/save-monay.png" alt="icon-img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>@lang('home.save_the_money')</h5>
                                <p class="paragraph">@lang('home.save_the_money_article')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                    <div class="quality-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 mt-4">
                                <img src="assets/img/icon/security-safety.png" alt="icon-img">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5>@lang('home.Security_Support')</h5>
                                <p class="paragraph">@lang('home.Security_Support_article')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE QUALITY -->

    <!-- PARKING SPACE START -->
    <section class="parking-space mb-5">
        <div class="container pb-lg-4">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="assets/img/photos/We-are-Ready-to-Parking-Space.png" alt="img">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h2 class="section-header">@lang('home.we_are_ready_to') <span>@lang('home.parking')</span> @lang('home.space')</h2>
                    <p class="paragraph mt-4">@lang('home.parking_space_article')</p><br>
                    <p class="paragraph mt-4">@lang('home.parking_space_article2')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- PARKING SPACE END -->

    <!-- OUR SERVICE PART START -->
    <section class="our-service py-lg-5">
        <div class="container pt-3">
            <div class="section-title text-center mb-5">
                <h3 class="pb-lg-5">@lang('home.our_services')</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/Management.png" alt="card-img">
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
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/Technical-Operation.png" alt="card-img">
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
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/Invest-&-Development.png" alt="card-img">
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
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/Supplementary-Service.png" alt="card-img">
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
                            {{-- <div class="view-btn my-3">
                                <a class="" href="{{ route('service') }}">@lang('home.view_all')</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-service text-center mt-lg-5 py-2">
                <a href="{{ route('service') }}">
                    <i class="fas fa-arrow-down"></i><br><br>
                    <span>@lang('home.see_more')</span>
                </a>
            </div>
        </div>
    </section>
    <!-- OUR SERVICE PART END -->

    <!-- VALET PARKING -->
    <section class="valet-parking my-lg-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <h5>@lang('home.valet_parking')</h5>
                    <h2 class="section-header">@lang('home.Service_at_your_doorstep')</h2>
                    <p class="paragraph mt-4">@lang('home.service_at_your_door_text')</p>
                    <p class="paragraph mt-4">@lang('home.service_at_your_door_text2')</p>
                    <p class="paragraph mt-4">@lang('home.service_at_your_door_text3')</p>
                    <p class="paragraph mt-4">@lang('home.service_at_your_door_text4')</p>
                    <p class="paragraph mt-4">@lang('home.service_at_your_door_text5')</p>
                    <p class="paragraph mt-4">@lang('home.service_at_your_door_text6')</p>
                    <div class="view-btn pt-4 mb-3">
                        <a href="{{ route('service') }}#booking-request">@lang('home.contact_us')</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="assets/img/photos/SERVICE-AT-YOUR-DOOR-STEP.png" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- VALET PARKING -->
    <!-- VALET SERVICE PART START -->
    <section class="our-service valet-service py-lg-5 py-2">
        <div class="container pt-3">
            <div class="section-title text-center mb-lg-5">
                <h3 class="pb-5">@lang('home.valet_parking')</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/valet_parking/wedding.png" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.valet_parking_homepage1')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/valet_parking/restaurant.png" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.valet_parking_homepage2')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/valet_parking/nightclubs.png" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.valet_parking_homepage3')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/valet_parking/corporate-event.png" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">@lang('home.valet_parking_homepage4')</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-service text-center mt-lg-5">
                <a href="{{ route('valet.parking') }}">
                    <i class="fas fa-arrow-down"></i><br><br>
                    <span>@lang('home.see_more')</span>
                </a>
            </div>
        </div>
    </section>
    <!-- VALET SERVICE PART END -->

    <!-- RENT OUT PARKING SPACE START -->
    <section class="parking-space rent-out my-4 my-lg-5">
        <div class="container py-lg-5">
            @include('app_components.rentout_space')
        </div>
    </section>
    <!-- RENT OUT PARKING SPACE END -->

    <!-- LATEST BLOG -->
    <section id="latest-blog" class="latest-blog my-2 my-lg-4">
        <div class="container pt-3 pb-lg-5">
            <h5>@lang('home.media_center')</h5>
            <h3>@lang('home.latest_blog')</h3>
            <hr class="latest-blog">
            <div class="row justify-content-center">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="card p-card mt-4">
                            <img src="{{ asset('assets/img/blog/') }}/{{ $blog->image }}" alt="card-img">
                            <div class="card-body">
                                <span>{{ $blog->created_at->format('d M Y') }}</span>
                                <h5 class="my-3">{{ $blog->title }}</h5>
                                <p class="paragraph">Think about it the finest hotels, restaurants, bars, hospitals, airports and special events all have one thing in common
                                <a href="{{ route('blog.details', $blog->slug) }}">@lang('home.read_more')</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- LATEST BLOG -->

    <!-- GET NOTIFICATION -->
    <section class="get-notificaiton my-5">
        <div class="container py-lg-5">
            @include('app_components.subscriber')
        </div>
    </section>
    <!-- GET NOTIFICATION -->
@endsection











