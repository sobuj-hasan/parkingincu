@extends('layouts.app')
@section('title', 'Valet parking')
@section('content')
    <!-- BANNER SECTION -->
    <section class="banner-two" style="background-image: url({{ asset('assets/img/photos/valet_parking/banner.png') }});">
        <div class="overlay py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h3>Valet Parking</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->

    <!-- VALET PARKING -->
    <section class="valet-parking my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <h5>Valet Parking</h5>
                    <h2 class="section-header">SERVICE AT YOUR DOOR STEP</h2>
                    <p class="paragraph mt-4">Valet Parking Service for Your Hotel, Special Event, Wedding or Night Club.
                        <br><br>
                        Parking Response provides Valet Parking to Restaurants, Lounges & Nightclubs, Retail Centers and we
                        also do Corporate
                        Events and more. If you have an auto dealership and need to provide valet service to your clientele,
                        call us. We are
                        specialists at valet parking, and we provide it fast, efficiently and professional.
                    </p>
                    <div class="view-btn pt-4 mb-3">
                        <a href="{{ route('service') }}#booking-request">Contact with us </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 align-self-center">
                    <img class="img-fluid" src="{{ asset('assets/img/photos/SERVICE-AT-YOUR-DOOR-STEP.png') }}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- VALET PARKING -->

    <!-- VALET SERVICES -->
    <section class="valet-services py-5">
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-hourly-street-parking-services.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing hourly street parking services</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-management-and-rehabilitation-services.png') }}"
                            alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking management and rehabilitation services</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-valet-parking-services-at-airports.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing valet parking services at airports</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-valet-parking-at-railway-stations.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing valet parking at railway stations</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-valet-parking-at-mass-transit-stations.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing valet parking at mass transit stations</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-monitoring-services-with-security-cameras.png') }}"
                            alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking monitoring services with security cameras</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-solar-powered-parking-lighting-services.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing solar powered parking lighting services</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing parking services for luxury hotels and apartments.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking services for luxury hotels and apartments</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-services-for-residential-(compounds).png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking services for residential complexes (compounds)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-services-for-shopping-centers-and-malls.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking services for shopping centers and malls</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-services-for-exhibitions,-conferences-and-events.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking services for exhibitions, conferences and events</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-services-for-restaurants-and-cafes.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking services for restaurants and cafes</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-services-at-museums-and-cinemas.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking services at museums and cinemas</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-services-at-public-parks-and-parks.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking services at public parks and parks</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-maintenance,-operation-&-parking-management-services-at-Governmental-entities.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing maintenance, operation & parking management services at
                            Governmental entities</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-valet-parking-for-entertainment-authority-events.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing valet parking for entertainment authority events</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-valet-parking-for-Sports-Authority-events.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing valet parking for Sports Authority events</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-valet-parking-for-Culture-Authority-events.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing valet parking for Culture Authority events</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-services-for-private-and-government-hospitals.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking services for private and government hospitals</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-parking-management-service-for-vegetable-markets-(loading-and-unloading).png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing parking management service for vegetable markets (loading and unloading)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-control-service-for-violating-parking-lots.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing control service for violating parking lots
                            In partnership with Traffic</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-crowd-management-services-and-frequency-transmission-between-events-and-parking.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing crowd management services and frequency transmission between events and parking</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-luxury-car-rental-services-with-chauffeur.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing luxury car rental services with chauffeur</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-third-party-property-management-services-including-parking-and-land-rental.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing third party property management services including parking and land rental</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-land-rental-and-investment-services.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing land rental and investment services</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-4">
                    <div class="card p-card">
                        <img src="{{ asset('assets/img/photos/valet_parking/Providing-car-wash-and-simple-maintenance-services.png') }}" alt="card-img">
                        <div class="card-body">
                            <h5 class="mt-2 mb-3">Providing car wash and simple maintenance services</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- VALET SERVICES -->

    <!-- RENT OUT PARKING SPACE START -->
    <section class="parking-space rent-out my-5">
        <div class="container py-5">
            @include('app_components.rentout_space')
        </div>
    </section>
    <!-- RENT OUT PARKING SPACE END -->
@endsection