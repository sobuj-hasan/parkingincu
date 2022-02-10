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
                            <h3>@lang('home.aboutus')</h3>
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
                    <h2 class="section-header"><span>@lang('home.lets_check')</span> @lang('home.what_we_do')</h2>
                    <p class="paragraph mt-4">@lang('home.aboutus_text')</p>
                    <p class="paragraph mt-4">@lang('home.aboutus_text2')</p>
                    <p class="paragraph mt-4">@lang('home.aboutus_text3')</p>
                    <p class="paragraph mt-4">@lang('home.aboutus_text4')</p>
                    <p class="paragraph mt-4">@lang('home.aboutus_text5')</p>
                    <p class="paragraph mt-4">@lang('home.aboutus_text6')</p>
                    <p class="paragraph mt-4">@lang('home.aboutus_text7')</p>
                    <h6 class="mt-4">@lang('home.mission')</h6>
                    <p class="paragraph mt-4">@lang('home.aboutus_text8')</p>
                    <h6 class="mt-4">@lang('home.vision')</h6>
                    <p class="paragraph mt-4">@lang('home.aboutus_text9')</p>
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