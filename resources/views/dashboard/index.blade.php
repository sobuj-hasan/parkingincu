@extends('layouts.app')
@section('title', 'Dashboard')
@section('active_dashboard')
    active
@endsection
@section('content')
    <section class="dashboard">
        <div class="container">
            <div class="user-dashboard">
                <div class="row">
                    <!-- Dashboard left bar Here ! -->
                    @include('dashboard.layouts.left_sidebar')

                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="information">
                        <h6><strong>Saudi Hemam:</strong><span> Lorem ipsum dolor sit amit We are also able to do work </span></h6>
                        <a class="btn btn-outline-info ms-3 mt-1" href="{{ route('index') }}"><i class="fas fa-chevron-circle-left"></i> Back to Website</a>
                        <hr>
                        <div class="basic-information">
                            <h4>@lang('home.Account_Information')</h4>
                            <hr class="divider">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="title">
                                    <ul>
                                        <li>
                                            <p>@lang('home.full_name') </p>
                                        </li>
                                        <li>
                                            <p>@lang('home.email_address') </p>
                                        </li>
                                        <li>
                                            <p>@lang('home.phone') </p>
                                        </li>
                                        <li>
                                            <p>@lang('home.JOIN_DATE') </p>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                <div class="answer">
                                    <ul>
                                        <li>
                                            <p>{{ Auth::user()->name }}</p>
                                        </li>
                                        <li>
                                            <p>{{ Auth::user()->email }}</p>
                                        </li>
                                        <li>
                                            <p>{{ Auth::user()->phone }}</p>
                                        </li>
                                        <li>
                                            <p>{{ Auth::user()->created_at->format('d M Y') }}</p>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="personal-information">
                            <h4>@lang('home.Your_Statistics')</h4>
                            <hr class="divider">
                            <div class="statistics p-4">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 text-center mb-5">
                                        <div style="box-shadow: 2px 2px 12px #e2e2e2; padding: 10px;">
                                            <h5 class="m-3 text-uppercase font-bold font-secondary text-overflow">@lang('home.SPACE_BOOKED')</h5>
                                            <h3 class="font-600 m-3"> {{ Auth::user()->created_at->format('d M Y') }} </h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 text-center mb-5">
                                        <div style="box-shadow: 2px 2px 12px #e2e2e2; padding: 10px;">
                                            <h5 class="m-3 text-uppercase font-bold font-secondary text-overflow">@lang('home.JOIN_DATE')</h5>
                                            <h3 class="font-600 m-3"> 00 </h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 text-center mb-5">
                                        <div style="box-shadow: 2px 2px 12px #e2e2e2; padding: 10px;">
                                            <h5 class="m-3 text-uppercase font-bold font-secondary text-overflow">@lang('home.USER_ACTIVITIES')</h5>
                                            <h3 class="font-600 m-3"> 00 </h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 text-center mb-5">
                                        <div style="box-shadow: 2px 2px 12px #e2e2e2; padding: 10px;">
                                            <h5 class="m-3 text-uppercase font-bold font-secondary text-overflow">@lang('home.TOTAL_TRANSECTION')</h5>
                                            <h3 class="font-600 m-3"> GOOD </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection






