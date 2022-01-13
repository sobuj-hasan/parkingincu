@extends('admin.layouts.app')
@section('title',' Host request details')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Host Request Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Host Request Details</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 style="margin-top: 20px" class="m-t-0 header-title pb-3 mt-4"><b>{{ $neighborhost->name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Contact Person Name</th>
                                <td>{{ $neighborhost->name }}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{ $neighborhost->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $neighborhost->phone }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $neighborhost->country }}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $neighborhost->city }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $neighborhost->address }}</td>
                            </tr>
                            <tr>
                                <th>Money Type</th>
                                <td>{{ $neighborhost->money_type }}</td>
                            </tr>
                            <tr>
                                <th>Parking Type</th>
                                <td>{{ $neighborhost->parking_type }}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{ $neighborhost->message }}</td>
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
