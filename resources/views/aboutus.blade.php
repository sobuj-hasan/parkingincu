@extends('layouts.app')
@section('title', 'About Us')
@section('content')
    <!-- BANNER SECTION -->
    <section class="banner-two" style="background-image: url(assets/img/photos/aboutus-banner.png);">
        <div class="overlay py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h3>About Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->

    <!-- LETS CHECK ABOUT US -->
    <section class="parking-space my-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <img class="img-fluid mt-3 border border-info" src="assets/img/photos/what-we-do.png" alt="img">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <h2 class="section-header"><span>Let Check</span> What we do?</h2>
                    <p class="paragraph mt-4">
                        Parking incubator is the premier full turnkey parking facilities solution provider in Saudi Arabia. Specializing in
                        parking management, operations and maintenance, Parking incubator optimizes traffic flow, enhances parking efficiency,
                        designs and contracts tailor-made parking facility improvements, provides related supplementary services and more. From
                        procurement and installation of state of the art equipment to on the ground operations, Parking incubator strives to
                        provide its parking users integrated convenience while providing the project owners complete - value driven quality
                        parking solutions.br <br><br>
                        
                        Parking incubator actively seek to play a role in the betterment of society, whether through social responsibility,
                        exploration of applicable environmentally friendly technology or government led initiatives. We pool various talents
                        into a melting pot comprised of highly experienced seniors, with young vibrant and creative staff who with eager take on
                        their role as part of the Parking incubator team.<br><br>
                        
                        At Parking incubator we focus on strategically important and highly selective projects. Our goal in any project is to
                        add value; value for the client, value for the project and value for the customers. This is Parking incubator, this is
                        what we stand for and this is what we value.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- LETS CHECK ABOUT US -->

    <!-- GET NOTIFICATION -->
    <section class="get-notificaiton my-5">
        <div class="container py-5">
            @include('app_components.subscriber')
        </div>
    </section>
    <!-- GET NOTIFICATION -->
@endsection