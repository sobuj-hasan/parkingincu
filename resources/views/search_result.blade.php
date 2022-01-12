@extends('layouts.app')
@section('title', 'Search result')
@section('content')
    <!-- BANNER SECTION -->
    <section class="banner" style="background-image: url({{ asset('assets/img/photos/banner-image2.png') }});">
        <div class="overlay py-5">
            <div class="container text-center">
                <div class="banner-content mx-lg-5 px-lg-5">
                    <h1 class="px-lg-5">Find the <strong>Parking</strong> Space, Forget the <strong>Mental
                            Stress</strong></h1>
                    <div class="search-bar my-5">
                        <form action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="search-slt" name="">
                                                <option>Type Of Service</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="search-slt" name="">
                                                <option>Select Location</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                            <input type="text" class="search-slt" placeholder="Type Your Name" name="">
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                            <input type="text" class="search-slt last-input" placeholder="Phone Number"
                                                name="">
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                                            <button type="button" class="wrn-btn">Find Space</button>
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

    <!-- SEARCH RESULT START -->
    <section class="search-result py-5">
        <div class="container mb-4">
            <div class="container">
                <h6 class="mb-4">06 Are available near your location</h6>
                <div class="row">
                    @foreach ($parking_spaces as $parking_space)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="card">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/icon/waltop-space.png') }}" alt="icon-img">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6>{{ $parking_space->name }}</h6>
                                        <span>{{ $parking_space->address }}, {{ $parking_space->city }}, {{ $parking_space->country }}</span>
                                        <h4 class="mt-3 mb-4"> {{ $parking_space->price_monthly }}/<span class="small-text">month</span></h4>
                                        <p class="paragraph mb-4">
                                            Residential carpark parking space with Fob and permit access. To be provied directly by the owner and upon a successfull
                                            booking.
                                        </p>
                                        <div class="view-btn my-3">
                                            <a class="" href="{{ route('space.booking', $parking_space->slug) }}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @empty($parking_space)
                        <div class="alert alert-info text-danger">Nothing to show Parking Space</div>
                    @endempty
                </div>
            </div>
        </div>
    </section>
    <!-- SEARCH RESULT END -->

    <!-- PARKING VALET SERVICE -->
    <section id="parking-valet" class="parking-valet my-5">
        <div class="container text-center">
            <h5 class="mb-3">Popular Space</h5>
            <h6>Parking & Valet</h6>
            <div class="row mt-5 pb-4">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space2.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space3.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Bridrest valet House</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space4.png') }}" alt="icon-img">
                            <p class="small-text mb-4">City Parking House</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/whileceel-rest.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/city-spot.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space2.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space2.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space2.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space2.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space2.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space2.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <a href="#">
                        <div class="valet-service text-center my-3">
                            <img class="my-3" width="30" height="30px" src="{{ asset('assets/img/icon/parking-space2.png') }}" alt="icon-img">
                            <p class="small-text mb-4">Walton Parking space</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- PARKING VALET SERVICE -->
    
    <!-- RENT OUT PARKING SPACE START -->
    <section class="parking-space rent-out my-5">
        <div class="container py-5">
            @include('app_components.rentout_space')
        </div>
    </section>
    <!-- RENT OUT PARKING SPACE END -->
@endsection