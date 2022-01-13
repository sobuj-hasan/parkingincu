@extends('admin.layouts.app')
@section('title',' Parking Space list')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Parking Space </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Parking Space List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Parking Space List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Parking Space</th>
                                <th>Image</th>
                                <th>Price Hourly</th>
                                <th>Price Monthly</th>
                                <th>Published</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($parking_space as $parking)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>

                                        <td>
                                            <a href="{{ route('space.show',$parking->id) }}">{{ Str::limit($parking->name, 45, $end='...') }}</a>
                                        </td>

                                        <td>
                                            <img width="80px" src="{{ asset('assets/img/parking_img/') }}/{{ $parking->image }}" alt="img" title="contact-img"/>
                                        </td>

                                        <td>
                                            {{ $parking->price_hourly }}
                                        </td>

                                        <td>
                                            {{ $parking->price_monthly }}
                                        </td>

                                        <td>
                                            {{ $parking->created_at->diffForHumans() }}
                                        </td>

                                        <td>
                                            {{ $parking->address }}
                                        </td>

                                        <form method="POST" action="{{ route('space.destroy', $parking->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                {{-- {{ route('space.edit', $parking->id) }} --}}
                                                <a href="" class="table-action-btn"> <i class="far fa-edit"></i> </a>
                                                <button onclick="blogDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($parking)
                                        <div class="alert alert-info">
                                            Nothing to show any Blog post !
                                        </div>
                                    @endempty
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
            alert('Are you shure ? You want to delete this Blog !')
        }
    </script>
@endsection
