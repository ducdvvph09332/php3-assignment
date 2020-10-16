@extends('admin.layout.master')
@section('title', 'Admin | Edit User')
@section('item', 'User')
@section('sub_item', 'Edit')
@section('content')
<div class="row">
    <div id="basic" class="col-lg-12 layout-spacing">

        <form method="POST" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT" id="">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-primary">First Name</label>
                                    <input type="text" name="first_name" placeholder="Your First Name" class="form-control" value="{{$user->first_name}}">
                                    <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-primary">Last Name</label>
                                    <input type="text" name="last_name" placeholder="Your Last Name" class="form-control" value="{{$user->last_name}}">
                                    <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Email</label>
                            <input type="text" name="email" placeholder="Your Email..." class="form-control" value="{{$user->email}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Address</label>
                            <input type="text" name="address" placeholder="Your Address..." class="form-control" value="{{$user->address}}">
                            <span class="text-danger">@error('address') {{$message}} @enderror</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Birthday</label>
                            <div class="form-group mb-0">
                                <input id="basicFlatpickr" name="birthday" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Your Birthday.." value="{{$user->birthday}}">
                                <span class="text-danger">@error('birthday') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="text-primary">Status</label>
                            <select name="is_active" id="" class="form-control">
                                <option value="1" {{($user->is_active) == 1 ? "selected" : ""}}>Activate</option>
                                <option value="0" {{($user->is_active) == 0 ? "selected" : ""}}>Deactivate</option>
                            </select>
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Update">
                        <a href="{{route('users.index')}}" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>

            </div>
    </div>
    </form>
</div>
</div>
@endsection