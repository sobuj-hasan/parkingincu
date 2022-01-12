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
                            <h3>Our Services</h3>
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
                            <h5 class="mt-2 mb-3">Management </h5>
                            <li class="small-text pt-3 my-3">
                                Event Crowd Management
                            </li>
                            <li class="small-text my-3">
                                Land & Property Management
                            </li>
                            <li class="small-text my-3">
                                Parking Facility Management
                            </li>
                            <li class="small-text pb-3 my-3">
                                Rate Management
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Technical-Operation.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Technical Operation</h5>
                            <li class="small-text pt-3 my-3">
                                Cashier Booth & Pos Operator
                            </li>
                            <li class="small-text my-3">
                                Pay on Foot & Ticketing Assistant
                            </li>
                            <li class="small-text my-3">
                                Transportation Dispatching
                            </li>
                            <li class="small-text pb-3 my-3">
                                Control Operation
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Invest-&-Development.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Invest & Development </h5>
                            <li class="small-text pt-3 my-3">
                                Systems & Equipment Investments
                            </li>
                            <li class="small-text my-3">
                                Master Plan & Design
                            </li>
                            <li class="small-text my-3">
                                Equipment & Systems Procurement
                            </li>
                            <li class="small-text pb-3 my-3">
                                Civil Works & Installation
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Supplementary-Service.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Supplementary Service</h5>
                            <li class="small-text pt-3 my-3">
                                Taxi, Limousine & Busing
                            </li>
                            <li class="small-text my-3">
                                Golf Cart Transportation
                            </li>
                            <li class="small-text my-3">
                                Parking Advertisement
                            </li>
                            <li class="small-text pb-3 my-3">
                                Rental & Car Sharing
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Maintanence-Service.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Maintanence Service</h5>
                            <li class="small-text pt-3 my-3">
                                Outdoor Parking
                            </li>
                            <li class="small-text my-3">
                                Multistroy Parking
                            </li>
                            <li class="small-text my-3">
                                On-street Parking
                            </li>
                            <li class="small-text pb-3 my-3">
                                Basement Parking
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/Parking-Service-Area.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Parking Service Area</h5>
                            <li class="small-text pt-3 my-3">
                                Cashier Booth & Pos Operator
                            </li>
                            <li class="small-text my-3">
                                Pay on Foot & Ticketing Assistant
                            </li>
                            <li class="small-text my-3">
                                Transportation Dispatching
                            </li>
                            <li class="small-text pb-3 my-3">
                                Control Operation
                            </li>
                            <div class="view-btn my-3">
                                <a class="" href="">View All</a>
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
                    <h5 class="mb-3 text-center">Add Your Space to Our Platform</h5>
                    <h6 class="text-center">Send Host Request</h6>
                    <form action="">
                        <div class="contact-form py-5">
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <input type="email" class="custom-control" placeholder="Full Name " name="name">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="email" class="custom-control" placeholder="Contact Number " name="phone">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="email" class="custom-control" placeholder="Email Address " name="email">
                                </div>
                                <div class="col-md-4 my-3">
                                    <select class="form-select" name="">
                                        <option selected>What do you need?</option>
                                        <option value="1">Monthly Parking Package</option>
                                        <option value="2">Monthly Parking Package</option>
                                        <option value="3">Monthly Parking Package</option>
                                    </select>
                                </div>
                                <div class="col-md-4 my-3">
                                    <select class="form-select" name="">
                                        <option selected>Location </option>
                                        <option value="1">Monthly Parking Package</option>
                                        <option value="2">Monthly Parking Package</option>
                                        <option value="3">Monthly Parking Package</option>
                                    </select>
                                </div>
                                <div class="col-md-4 my-3">
                                    <select class="form-select" name="">
                                        <option selected>Inquery type </option>
                                        <option value="1">Monthly Parking Package</option>
                                        <option value="2">Monthly Parking Package</option>
                                        <option value="3">Monthly Parking Package</option>
                                    </select>
                                </div>
                                <div class="col-md-12 my-3">
                                    <textarea style="height: 230px;" class="custom-control" name="" cols="30" placeholder="Write The Message " rows="10"></textarea>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <button type="submit"> Send Request </button>
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










