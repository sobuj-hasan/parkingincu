@extends('admin.layouts.app')
@section('title',' Neighbor host request')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Neighbor Host Request</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Neighbor Host Request</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Neighbor Host Request List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">
                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>User</th>
                                <th>Contact Person Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Price Rate</th>
                                <th>City</th>
                                <th>Request Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($hostrequests as $hostrequest)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <h5 class="badge badge-warning p-1">{{ $hostrequest->user_id ?? "Guest" }}</h5>
                                        </td>

                                        <td>
                                            <a href="{{ route('hostrequest.show',$hostrequest->id) }}">{{ Str::limit($hostrequest->name, 45, $end='...') }}</a>
                                        </td>

                                        <td>
                                            {{ $hostrequest->email }}
                                        </td>

                                        <td>
                                            {{ $hostrequest->phone }}
                                        </td>

                                        <td>
                                            {{ $hostrequest->parking_rate }}
                                        </td>

                                        <td>
                                            {{ $hostrequest->city }}, {{ $hostrequest->country }}
                                        </td>

                                        <td>
                                            {{ $hostrequest->created_at->diffForHumans() }}
                                        </td>
                                        <form method="POST" action="{{ route('hostrequest.destroy', $hostrequest->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="mailto:{{ $hostrequest->email }}"> <i class="fas fa-paper-plane"></i> </a>
                                                <button onclick="blogDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('footer_script')
    <script>
        function blogDelete(){
            alert('Are you shure ? You want to delete this Request !')
        }
    </script>
@endsection
