@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- BANNER SECTION -->
    <section class="banner">
        <div class="overlay py-lg-5">
            <div class="container text-center">
                <div class="banner-content mx-lg-5 px-lg-5">
                    <h1 class="px-lg-5">Find the <strong>Parking</strong> Space, Forget the <strong>Mental Stress</strong></h1>
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
                                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                            <input type="text" class="search-slt" placeholder="Type Your Name" name="">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                            <input type="text" class="search-slt last-input" placeholder="Phone Number" name="">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                            <a href="{{ route('search.result') }}">
                                                <button type="button" class="wrn-btn">Find Space</button>
                                            </a>
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
                                <h5>Cheap Cost, Much Facilities</h5>
                                <p class="paragraph">There are many variations of passages of Lorem Ipsum available</p>
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
                                <h5>Save the Money</h5>
                                <p class="paragraph">There are many variations of passages of Lorem Ipsum available</p>
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
                                <h5>100% Security & Support</h5>
                                <p class="paragraph">There are many variations of passages of Lorem Ipsum available</p>
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
                    <h2 class="section-header">We are Ready to <span>Parking</span> Space</h2>
                    <p class="paragraph mt-4">Parking lots tend to be sources of water pollution because of their extensive impervious surfaces. Most existing lots
                    have limited or no facilities to control runoff. Many areas today also require minimum landscaping in parking lots to
                    provide.<br><br>
                    
                    Many municipalities require a minimum number of parking spaces, depending on the floor area in a store or the number of
                    bedrooms in an apartment complex. In the US, each state's Department of Transportation sets the ratio.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- PARKING SPACE END -->

    <!-- OUR SERVICE PART START -->
    <section class="our-service py-lg-5">
        <div class="container pt-3">
            <div class="section-title text-center mb-5">
                <h3 class="pb-lg-5">Our Services</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/Management.png" alt="card-img">
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
                                <a class="" href="{{ route('service') }}">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/Technical-Operation.png" alt="card-img">
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
                                <a class="" href="{{ route('service') }}">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/Invest-&-Development.png" alt="card-img">
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
                                <a class="" href="{{ route('service') }}">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/Supplementary-Service.png" alt="card-img">
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
                                <a class="" href="{{ route('service') }}">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-service text-center mt-lg-5 py-2">
                <a href="{{ route('service') }}">
                    <i class="fas fa-arrow-down"></i><br><br>
                    <span>More Service</span>
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
                    <h5>Valet Parking</h5>
                    <h2 class="section-header">SERVICE AT YOUR DOOR STEP</h2>
                    <p class="paragraph mt-4">Valet Parking Service for Your Hotel, Special Event, Wedding or Night Club.
                    <br><br>
                    Parking Response provides Valet Parking to Restaurants, Lounges & Nightclubs, Retail Centers and we also do Corporate
                    Events and more. If you have an auto dealership and need to provide valet service to your clientele, call us. We are
                    specialists at valet parking, and we provide it fast, efficiently and professional.</p>
                    <div class="view-btn pt-4 mb-3">
                        <a href="{{ route('service') }}#booking-request">Contact with us</a>
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
                <h3 class="pb-5">Valet Parking</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/valet_parking/wedding.png" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Valet Parking for Wedding</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/valet_parking/restaurant.png" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Valet Parking for Restaurants</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/valet_parking/nightclubs.png" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Valet Parking for Lounges & Nightclubs</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card p-card">
                        <img src="assets/img/photos/valet_parking/corporate-event.png" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Valet Parking for Corporate Events</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-service text-center mt-lg-5">
                <a href="{{ route('valet.parking') }}">
                    <i class="fas fa-arrow-down"></i><br><br>
                    <span>More Service</span>
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
            <h5>Media Center</h5>
            <h3>Latest Blog</h3>
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
                                <a href="{{ route('blog.details', $blog->slug) }}">Read More</a>
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











