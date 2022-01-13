@extends('admin.layouts.app')
@section('title',' Parkingspace Details')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Parkingspace Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Parkingspace Details</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 style="margin-top: 20px" class="m-t-0 header-title pb-3 mt-4"><b>{{ $parkingspaces->title }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Parking Name</th>
                                <td>{{ $parkingspaces->name }}</td>
                            </tr>
                            <tr>
                                <th>Parking Description</th>
                                <td>{{ $parkingspaces->description }}</td>
                            </tr>
                            <tr>
                                <th>Parking Country</th>
                                <td>{{ $parkingspaces->country }}</td>
                            </tr>
                            <tr>
                                <th>Parking City</th>
                                <td>{{ $parkingspaces->city }}</td>
                            </tr>
                            <tr>
                                <th>Parking Post Code</th>
                                <td>{{ $parkingspaces->post_code }}</td>
                            </tr>
                            <tr>
                                <th>Parking Address</th>
                                <td>{{ $parkingspaces->address }}</td>
                            </tr>
                            <tr>
                                <th>Parking Hourly Price</th>
                                <td>{{ $parkingspaces->price_hourly }}</td>
                            </tr>
                            <tr>
                                <th>Parking Day Price</th>
                                <td>{{ $parkingspaces->price_day }}</td>
                            </tr>
                            <tr>
                                <th>Parking Monthly Price</th>
                                <td>{{ $parkingspaces->price_monthly }}</td>
                            </tr>
                            <tr>
                                <th>Parking Money Type</th>
                                <td>{{ $parkingspaces->money_type }}</td>
                            </tr>
                            <tr>
                                <th>Parking Parking Type</th>
                                <td>{{ $parkingspaces->parking_type }}</td>
                            </tr>
                            <tr>
                                <th>Parking Space Type</th>
                                <td>{{ $parkingspaces->space_type }}</td>
                            </tr>
                            <tr>
                                <th>Parking Space Area</th>
                                <td>{{ $parkingspaces->space_area }}</td>
                            </tr>
                            <tr>
                                <th>Parking Cancellation terms</th>
                                <td>{{ $parkingspaces->cancellation_terms }}</td>
                            </tr>
                            <tr>
                                <th>Parking Location</th>
                                <td>{{ $parkingspaces->location }}</td>
                            </tr>
                            <tr>
                                <th>Parking Image</th>
                                <td><img width="100" src="{{ asset('assets/img/parking_img/') }}/{{ $parkingspaces->image }}" alt=""></td>
                            </tr>
                            <tr>
                                <th>Parking Icon Image</th>
                                <td><img width="40" src="{{ asset('assets/img/parking_img/') }}/{{ $parkingspaces->icon_image }}" alt=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        function OrderDelete(){
            alert('Are you shure ? You want to delete this Order !')
        }
    </script>
@endsection
