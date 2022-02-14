@extends('layouts.app')
@section('title', 'Space booking')
@section('content')
    <!-- BANNER SECTION -->
    <section class="banner-two parking-description" style="background-image: url({{ asset('assets/img/photos/booking-page-banner.png') }}); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="overlay py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="name d-flex">
                            <img src="{{ asset('assets/img/icon/waltop-space.png') }}" alt="icon-img">
                            <h5 class="ms-3">{{ $single_space->name }}</h5>
                        </div>
                        <p class="small-text ms-5"><span><i class="fas fa-map-marker-alt"></i></span> {{ $single_space->address }}, {{ $single_space->city }}, {{ $single_space->country }}</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                        <div class="price">
                            <h6 class="mb-4 ms-4">{{ $single_space->price_monthly }}/<span>month</span> </h6>
                            <div class="contactual-btn">
                                <a href="">{{ $single_space->money_type }} </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->

    <!-- PARKING DESCRIPTION -->
    <section class="parking-description py-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h5>Description</h5>
                    <p class="paragraph mb-5">
                        Residential carpark parking space with Fob and permit access. To be provied directly by the owner and upon a successfull booking.
                    </p>
                    <div class="description-img">
                        <img class="img-fluid" src="{{ asset('assets/img/photos/description.png') }}" alt="description-img">
                    </div>
                    <div class="small-img">
                        <img class="img-fluid mt-4" src="{{ asset('assets/img/photos/image-1.png') }}" alt="img">
                        <img class="img-fluid ms-4 mt-4" src="{{ asset('assets/img/photos/image-2.png') }}" alt="img">
                        <img class="img-fluid ms-4 mt-4" src="{{ asset('assets/img/photos/image-3.png') }}" alt="img">
                    </div>
                    <h5 class="mt-5">Features</h5>
                    <hr class="features">
                    <div class="features">
                        <ul>
                            <li class="d-flex mt-5 my-3">
                                <h6>Space Type</h6>
                                <p class="small-text">: {{ $single_space->space_type }}</p>
                            </li>
                            <li class="d-flex my-3">
                                <h6>Parking Type</h6>
                                <p class="small-text">: {{ $single_space->parking_type }}</p>
                            </li>
                            <li class="d-flex my-3">
                                <h6>Space Area</h6>
                                <p class="small-text">: {{ $single_space->space_area }}</p>
                            </li>
                            <li class="d-flex mb-4 my-3">
                                <h6>Available From</h6>
                                <p class="small-text">: ____ </p>
                            </li>
                            <li class="d-flex mb-4 my-3">
                                <h6>Cencellation Terms</h6>
                                <p class="small-text">: {{ $single_space->cancellation_terms }}</p>
                            </li>
                        </ul>
                    </div>
                    <h5 class="mt-5">Geo Location</h5>
                    <hr class="features">
                    <iframe style="border: 1px solid #555555;" class="w-100 mt-4" height="300px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463733.90636450704!2d46.53739853647118!3d24.763892723749958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sbd!4v1641461424262!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-12 col-sm-12">
                    <div class="booking-card">
                        <form method="POST" action="{{ route('booking.store') }}">
                            @csrf
                            <div class="card-body">
                                <h6 class="card-title">Book This Space</h6>
                                <hr class="features">
                                <div class="book-space">
                                    <ul>
                                        <li class="my-2 mt-5 d-flex">
                                            <p>Duration of Contruct</p>
                                            <select class="custom-control" name="uses_duration" id="">
                                                <option value="">Select Duration</option>
                                                <option value="01 Day">01 Day</option>
                                                <option value="02 Day">02 Day</option>
                                                <option value="03 Day">03 Day</option>
                                                <option value="04 Day">04 Day</option>
                                                <option value="05 Day">05 Day</option>
                                                <option value="06 Day">06 Day</option>
                                                <option value="01 Week">01 Week</option>
                                                <option value="02 Week">02 Week</option>
                                                <option value="03 Week">03 Week</option>
                                                <option value="04 Week">04 Week</option>
                                                <option value="01 Month">01 Month</option>
                                                <option value="02 Month">02 Month</option>
                                                <option value="03 Month">03 Month</option>
                                                <option value="04 Month">04 Month</option>
                                                <option value="05 Month">05 Month</option>
                                                <option value="06 Month">06 Month</option>
                                                <option value="01 Year">01 Year</option>
                                                <option value="02 Year">02 Year</option>
                                                <option value="03 Year">03 Year</option>
                                                <option value="04 Year">04 Year</option>
                                                <option value="05 Year">05 Year</option>
                                            </select>
                                        </li>
                                        <li class="my-2 d-flex">
                                            <p>Use of Time </p>
                                            <input class="custom-control" type="time" placeholder="10 AM to 05 PM" name="uses_time">
                                        </li>
                                        <li class="my-2 d-flex">
                                            <p>Total Cost of Space</p>
                                            <input class="custom-control" type="text" placeholder="$100" name="total_cost">
                                        </li>
                                        <li class="my-2 d-flex">
                                            <p>Started From</p>
                                            <input class="custom-control" type="date" placeholder="01 Jan 2022" name="started_date">
                                        </li>
                                    </ul>
                                </div>
                                <hr class="features">
                                <div class="book-summary">
                                    <ul>
                                        <li class="d-flex">
                                            <i class="fas fa-square me-2 mt-1"></i>
                                            <p>Total Payable cost</p>
                                            <p class="amount">$100.00</p>
                                        </li>
                                        <li class="d-flex">
                                            <i class="fas fa-square me-2 mt-1"></i>
                                            <p>Refoundable deposit</p>
                                            <p class="amount">$80.00</p>
                                        </li>
                                        <li class="d-flex">
                                            <input class="custom-check-input mt-1" type="checkbox" value="" id="flexCheckDefault" name="terms_condition">
                                            <p class="form-ckeck ms-3">Agree with Terms & Condition</p>
                                        </li>
                                    </ul>
                                    <div class="booking-btn mt-5 mb-3">
                                        <button type="submit">Book Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="booking-card my-5">
                        <h6 class="card-title">Have any Questions?</h6>
                        <p class="paragraph mt-4">if you have any question about us or any inquery</p>
                        <div class="phone d-flex">
                            <i class="fas fa-phone-alt my-3"></i>
                            <h5 class="ms-4 my-3">+966 55 117 5959</h5>
                        </div>
                    </div>
                    <div class="add-img">
                        <img src="{{ asset('assets/img/photos/add-image.png') }}" alt="add-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PARKING DESCRIPTION -->

    <!-- RENT OUT PARKING SPACE START -->
    <section class="parking-space rent-out my-5">
        <div class="container py-5">
            @include('app_components.rentout_space')
        </div>
    </section>
    <!-- RENT OUT PARKING SPACE END -->
@endsection












