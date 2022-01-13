@extends('admin.layouts.app')
@section('title','Create Parking Space')
@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Create New Space</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Create Parking Space</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Parking Space</h4>
                    </div>
                    <form method="POST" action="{{ route('space.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Space Name</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="space name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Description</label>
                                        <textarea class="form-control" cols="30" rows="10" placeholder="description" name="description"> {{ old('description') }} </textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Country Name</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="country name" name="country" value="{{ old('country') }}">
                                        @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">City Name</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="city name" name="city" value="{{ old('city') }}">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Post Code</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="post code" name="post_code" value="{{ old('post_code') }}">
                                        @error('post_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Space Address</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="space address" name="address" value="{{ old('address') }}">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Price (Hourly)</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="price hourly" name="price_hourly" value="{{ old('price_hourly') }}">
                                        @error('price_hourly')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Price (Day)</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="price day" name="price_day" value="{{ old('price_day') }}">
                                        @error('price_day')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Price (Monthly)</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="price monthly" name="price_monthly" value="{{ old('price_monthly') }}">
                                        @error('price_monthly')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Money Type</label>
                                        <select class="form-control" name="money_type">
                                            <option value="">Select Type</option>
                                            <option value="Contactual">Contactual</option>
                                            <option value="NonContactual">NonContactual</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @error('money_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Parking Type</label>
                                        <select class="form-control" name="parking_type">
                                            <option value="">Select Type</option>
                                            <option value="Residencial">Residencial</option>
                                            <option value="NonResidencial">NonResidencial</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @error('parking_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Space Type</label>
                                        <select class="form-control" name="space_type">
                                            <option value="">Select Space Type</option>
                                            <option value="Allowed">Allowed</option>
                                            <option value="Not Allowed">Not Allowed</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @error('space_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Space Area</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="Not Mention" name="space_area" value="{{ old('space_area') }}">
                                        @error('space_area')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Cencellation Terms</label>
                                        <select class="form-control" name="cancellation_terms">
                                            <option value="">Select Cencellation Terms</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Not Allowed">Not Allowed</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @error('cancellation_terms')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Google Location</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="Add Google Location with Iframe Tag" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-1" class="control-label">Image <span class="text-light"> &nbsp;(Preferable width : 580px Height: 330px)</span></label><br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" name="image" />
                                    </button><br>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="field-1" class="control-label">Parking Icon Image <span class="text-light"> &nbsp;(Preferable width : 60px Height: 60px)</span></label><br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" name="icon_image" />
                                    </button><br>
                                    @error('icon_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    {{-- <h6>Icon Image Demo:</h6>
                                    <img style="border: 1px solid red; padding: 20px;" src="{{ asset('assets/img/icon/city-spot.png') }}" alt="icon-img"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light"> Published Now </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

