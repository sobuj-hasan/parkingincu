@php
    $locale = app()->getLocale();
@endphp
<!DOCTYPE html>
@if ($locale == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="auto">
@endif
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | Parking Incubator</title>
    <!-- GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&family=Poppins:wght@200;300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap">
    <!--    BOOSTRAP-->
    @if ($locale == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif
    <!--    FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    {{-- Notify css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <!--    SLICK SLIDER-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!--    MAIN CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @if ($locale == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/arabic.css') }}">
    @endif
</head>

<body>
    <!-- HEADER TOP -->
    <section class="header-top py-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 d-flex justify-content-end">
                    <p class="mt-3">@lang('home.callus') @lang('home.callus_value')</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 d-flex justify-content-end">
                    <span class="d-flex align-items-center">
                        <p class="mt-3">@lang('home.followus')</p>
                        <ul class="d-flex">
                            <li class="text-white">
                                <a target="_blank" href="https://www.facebook.com"><i class="fab fa-facebook-square fs-5"></i></a>
                            </li>
                            <li class="text-white">
                                <a target="_blank" href="https://www.twitter.com"><i class="fab fa-twitter-square fs-5"></i></a>
                            </li>
                            <li class="text-white">
                                <a target="_blank" href="https://www.linkedin.com"><i class="fab fa-linkedin fs-5"></i></i></a>
                            </li>
                            <li class="text-white">
                                <a target="_blank" href="https://www.instragram.com"><i class="fab fa-instagram-square fs-5"></i></a>
                            </li>
                        </ul>
                    </span>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 d-flex justify-content-end">
                    <span class="d-flex align-items-center">
                        <ul class="">
                            <li>
                                <a href="{{ route('service') }}#booking-request">@lang('home.become_neighbor_host')</a>
                            </li>
                        </ul>
                        <ul class="">
                            @if ($locale == 'ar')
                                <li>
                                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}"> @lang('home.english') </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}"> @lang('home.arabic') </a>
                                </li>
                            @endif
                        </ul>
                        <ul class="">
                            @if (Auth::guest())
                                <li>
                                    <a href="{{ route('login') }}">@lang('home.signup')</a>
                                </li>
                            @else
                                <li>
                                    @if (Auth::user()->role == 1)
                                        <a href="{{ route('admin.index') }}">
                                            <img style="border: 1px solid #a6adce;" width="35px" height="35px" class="rounded-circle" src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="user">
                                        </a>
                                    @elseif(Auth::user()->role == 2)
                                        <a href="{{ route('dashboard.index') }}">
                                            <img style="border: 1px solid #a6adce;" width="35px" height="35px" class="rounded-circle" src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="user">
                                        </a>
                                    @endif
                                </li>
                            @endif
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER TOP -->
    <!-- HEADER SECTION -->
    <header class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <div class="logo d-flex justify-content-between align-items-center">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                        </a>
                        <i class="fa fa-bars d-md-none text-dark" onClick="mobileClick()" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-8 d-none d-md-block">
                    <div class="menubar">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('home.home')</a></li>
                            <li><a href="{{ route('aboutus') }}">@lang('home.aboutus')</a></li>
                            <li class="pe-0">
                                <a href="{{ route('service') }}">
                                    @lang('home.services')
                                    {{-- <img src="{{ asset('assets/img/icon/dropeown.png') }}" alt="dropdown-img"> --}}
                                </a>
                            </i>
                            </li>
                            <li class="pe-0">
                                <a href="{{ route('valet.parking') }}">
                                    @lang('home.valet_parking')
                                    {{-- <img src="{{ asset('assets/img/icon/dropeown.png') }}" alt="dropdown-img"> --}}
                                </a>
                            </i>
                            <li><a href="{{ route('index') }}#latest-blog">@lang('home.blog')</a></li>
                            <li><a href="{{ route('contactus') }}">@lang('home.contactus')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END-->

    <!-- MOBILE MENU-->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="mobile-logo mb-5">
                <a href="route('index')">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times" onClick="mobileClick()"></i>
            </div>

            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('index') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.home')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('aboutus') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.aboutus')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('service') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.services')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('valet.parking') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.valet_parking')
                        </button>
                    </a>
                </h2>
            </div>
            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Services
                    </button>
                </h2>
                <div id="two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="booking_request.html"><i class="fa fa-chevron-right"></i>Services One</a></li>

                            <li><a href="booking_request.html"><i class="fa fa-chevron-right"></i>Service Two</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('index') }}#latest-blog">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.blog')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('contactus') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.contactus')
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('login') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            @lang('home.signup')
                        </button>
                    </a>
                </h2>
            </div>
        </div>
    </div>
    <div id="mobileOverlay" class="mobile-overlay" onClick="mobileClick()"></div>
    <!-- END MOBILE MENU-->

    @yield('content')

    <!-- FOOTER PART HERE -->
    <div class="container">
        <div class="triangle-div">
            <!-- footer triangle div -->
        </div>
    </div>
    <footer class="py-lg-5">
        <div class="container py-4">
            <div class="row pt-4">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <img src="{{ asset('assets/img/logo/footer-logo.png') }}" alt="footer-logo"><br>
                    <span>@lang('home.footer_paragraph')</span>
                    {{-- <form method="GET" action="{{ route('subscribe') }}">
                        <div class="input-group mt-3">
                            <input type="text" class="custom-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ old('email') }}" name="email">
                            <button type="submit" id="button-addon2"> Subscribe </button>
                        </div>
                        @error('email')
                            <span class="text-warning fw-bolder">{{ $message }}</span>
                        @enderror
                    </form> --}}
                    <div class="social-link mt-3">
                        <ul class="d-flex">
                            <li class="mx-2">
                                <a target="_blank" href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="mx-2">
                                <a target="_blank" href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="mx-2">
                                <a target="_blank" href=""><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="mx-2">
                                <a target="_blank" href=""><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="mx-2">
                                <a target="_blank" href=""><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-link">
                        <h6 class="mb-5">@lang('home.Quick_Link')</h6>
                        <ul>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('valet.parking') }}">@lang('home.valet_parking')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('valet.parking') }}">@lang('home.parking_management_system')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('service') }}#booking-request">@lang('home.become_neighbor_host')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('service') }}">@lang('home.property_management')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('aboutus') }}">@lang('home.land_rental_management')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-link">
                        <h6 class="mb-5">@lang('home.Important_Link')</h6>
                        <ul>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('login') }}">@lang('home.account')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('service') }}">@lang('home.service_page')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('index') }}#latest-blog">@lang('home.blog_page')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('contactus') }}">@lang('home.contact_page')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="{{ route('aboutus') }}">@lang('home.how_it_work')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-link">
                        <h6 class="mb-5">@lang('home.contact_info')</h6>
                        <ul>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="">@lang('home.address_value')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="">@lang('home.email_value')</a>
                            </li>
                            <li class="my-4">
                                <i class="fas fa-circle"></i>
                                <a class="ms-2" href="">@lang('home.phone') : @lang('home.phone_value')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER PART HERE -->

    <!-- COPY RIGHT PART -->
    <section class="copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3">
                    Copyrights © 2022 | All Rights Reserved at <span>Parking Incubatort</span>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <ul class="d-flex justify-content-end">
                        <li class="my-3">
                            <a href="">@lang('home.terms_and_condition')</a>
                        </li>
                        <li class="my-3">
                            <a href="">@lang('home.business_policy')</a>
                        </li>
                        <li class="my-3">
                            <a href="">@lang('home.business_policy')</a>
                        </li>
                        <li class="my-3">
                            <a href="">@lang('home.privacy_policy')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- COPY RIGHT PART -->

    <!--    JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--    SLICK SLIDER-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!--    BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Toastr script CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Toastr Scripts render -->
    {!! Notify::message() !!}
    {{-- All error show in Toaster --}}
    
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
            toastr.error(`{!! $error !!}`, 'Error')
        </script>
        @endforeach
    @endif


</body>
</html>
