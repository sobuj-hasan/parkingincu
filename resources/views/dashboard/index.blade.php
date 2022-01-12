@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <section class="dashboard">
        <div class="container">
            <div class="user-dashboard">
                <div class="row">
                    <!-- Dashboard left bar Here ! -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="left-side">
                        <div class="profile">
                            <img src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="">
                            <h3>{{ Auth::user()->name }}</h3>
                            <p>{{ Auth::user()->phone }}</p>
                            <div class="btn">
                                <a class="btn btn-outline-info" href="{{ route('user.profile.edit') }}"><i class="far fa-edit"></i> profile edit </a>
                            </div>
                        </div>
                        <div class="left-menu">
                            <ul>
                                <li class="active">
                                    <a href="{{ route('dashboard.index') }}"><i class="fas fa-id-card"></i>&nbsp; Dashboard </a>
                                </li>
                                <li class="">
                                    <a href="{{ route('user.setting') }}"><i class="fas fa-user-alt"></i>&nbsp; Profile Settings</a>
                                </li>
                                <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button><i class="fas fa-sign-out-alt"></i> Logout</button>
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="information">
                        <h6><strong>Saudi Hemam:</strong><span> Lorem ipsum dolor sit amit We are also able to do work </span></h6>
                        <a class="btn btn-outline-info ms-3 mt-1" href="{{ route('index') }}"><i class="fas fa-chevron-circle-left"></i> Back to Website</a>
                        <hr>
                        <div class="basic-information">
                            <h4>Account Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="title">
                                    <ul>
                                        <li>
                                            <p>Name </p>
                                        </li>
                                        <li>
                                            <p>Email </p>
                                        </li>
                                        <li>
                                            <p>phone </p>
                                        </li>
                                        <li>
                                            <p>Joining </p>
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
                            <h4>Your Statistics</h4>
                            <hr>
                            <div class="statistics p-4">
                                <div class="row">
                                <div class="col-lg-6 col-md-12 text-center mb-5">
                                    <div style="box-shadow: 2px 2px 12px #e2e2e2; padding: 10px;">
                                        <h5 class="m-3 text-uppercase font-bold font-secondary text-overflow">Join Date</h5>
                                        <h3 class="font-600 m-3"> {{ Auth::user()->created_at->format('d M Y') }} </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center mb-5">
                                    <div style="box-shadow: 2px 2px 12px #e2e2e2; padding: 10px;">
                                        <h5 class="m-3 text-uppercase font-bold font-secondary text-overflow">User Activities</h5>
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
    
    <style>
        .dashboard{
            background: #f7f8fa;
        }
        .dashboard .user-dashboard{
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .dashboard .user-dashboard .left-side {
            width: 100%;
            height: auto;
            background: #FFFFFF;
            box-sizing: border-box;
            box-shadow: -3px 3px 20px -6px #00000033;
            border-radius: 2px;
        }
        .dashboard .user-dashboard .left-side .profile{
            text-align: center;
        }
        .dashboard .user-dashboard .left-side .profile img{
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 2px solid #0c629c;
            margin-top: 20px;
            margin-bottom: 5px;
        }
        .dashboard .user-dashboard .left-side .profile h3 {
            font-size: 20px;
            font-weight: 500;
            color: #74408f;
            line-height: 32px;
        }
        .dashboard .user-dashboard .left-side .profile p {
            font-size: 18px;
            font-weight: 400;
            color: #975563;
            line-height: 32px;
        }
        .dashboard .user-dashboard .left-side .left-menu{
            margin-top: 10px;
            padding-bottom: 40px;
        }
        .dashboard .user-dashboard .left-side .left-menu ul li {
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 10%;
        }
        .dashboard .user-dashboard .left-side .left-menu ul li a {
            font-size: 16px;
            font-weight: 500;
            color: #74408f;
            line-height: 32px;
            text-decoration: none;
        }
        .dashboard .user-dashboard .left-side .left-menu ul li button {
            font-size: 16px;
            font-weight: 500;
            color: #74408f;
            line-height: 32px;
            text-decoration: none;
            background: none;
            border: none;
        }
        .dashboard .user-dashboard .left-side .left-menu .active {
            font-size: 16px;
            font-weight: 500;
            line-height: 32px;
            text-decoration: none;
            background: #364a7b;
        }
        .dashboard .user-dashboard .left-side .left-menu .active a{
            color: #ffffff;
        }
        .dashboard .user-dashboard .left-side .left-menu ul li:hover{
            background: #364a7b;
            transition: 0.3s;
        }
        .dashboard .user-dashboard .left-side .left-menu ul li:hover a{
            color: #ffffff;
            transition: 0.3s;
        }
        .dashboard .user-dashboard .left-side .left-menu ul li:hover button{
            color: #ffffff;
            transition: 0.3s;
        }
        .dashboard .information {
            width: 100%;
            height: auto;
            background: #FFFFFF;
            box-sizing: border-box;
            box-shadow: 0px 3px 13px -6px #00000033;
            border-radius: 2px;
        }
        .dashboard .information h6 {
            font-size: 16px;
            font-weight: 400;
            color: #74408f;
            line-height: 29px;
            padding: 15px;
        }
        .dashboard .information .basic-information h4 {
            font-size: 18px;
            font-weight: 500;
            color: #74408f;
            line-height: 0px;
            padding: 15px;
        }
        .dashboard .information .basic-information .title ul li {
            padding-top: 13px;
            padding-bottom: 13px;
            padding-left: 15px;
        }
        .dashboard .information .basic-information .title ul li p {
            font-size: 16px;
            font-weight: 500;
            color: #1f2937;
            line-height: 12px;
        }
        .dashboard .information .basic-information .answer ul li {
            padding-top: 13px;
            padding-bottom: 13px;
            padding-left: 15px;
        }
        .dashboard .information .basic-information .answer ul li p {
            font-size: 16px;
            font-weight: 400;
            color: #374151;
            line-height: 12px;
        }
        .dashboard .information .personal-information h4 {
            font-size: 16px;
            font-weight: 500;
            color: #74408f;
            line-height: 0px;
            margin-top: 20px;
            padding: 15px;
        }
        .dashboard .information .personal-information h3 {
            font-size: 22px;
            font-weight: 500;
            color: #74408f;
        }
        .dashboard .information .personal-information h5 {
            font-size: 22px;
            font-weight: 500;
        }
        .dashboard .information .personal-information .title ul li {
            padding-top: 13px;
            padding-bottom: 13px;
            padding-left: 15px;
        }
        .dashboard .information .personal-information .title ul li p {
            font-size: 16px;
            font-weight: 500;
            color: #1f2937;
            line-height: 12px;
        }
        .dashboard .information .personal-information .answer ul li {
            padding-top: 13px;
            padding-bottom: 13px;
            padding-left: 15px;
        }
        .dashboard .information .personal-information .answer ul li p {
            font-size: 18px;
            font-weight: 400;
            color: #374151;
            line-height: 12px;
        }
    </style>
@endsection






