@extends('layouts.app')
@section('title', 'Transection history')
@section('active_transection')
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
                        <h6><strong>Parking Incubators:</strong><span> Lorem ipsum dolor sit amit We are also able to do work </span></h6>
                        <a class="btn btn-outline-info ms-3 mt-1" href="{{ route('index') }}"><i class="fas fa-chevron-circle-left"></i> Back to Website</a>
                        <hr>
                        <div class="basic-information">
                            <h4>My Transection History</h4>
                            <hr>
                            <div class="row px-4 pb-4">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SI No.</th>
                                            <th>Payment Date</th>
                                            <th>Payable Amount</th>
                                            <th>Payment Status</th>
                                            <th>Transection ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <td>01</td>
                                            <td>Walton Parking Space</td>
                                            <td>2 Days</td>
                                            <td>$100</td>
                                            <td>Success</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Walton Parking Space</td>
                                            <td>2 Days</td>
                                            <td>$100</td>
                                            <td>Success</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Walton Parking Space</td>
                                            <td>2 Days</td>
                                            <td>$100</td>
                                            <td>Success</td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="">Delete</a>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


