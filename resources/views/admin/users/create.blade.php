@extends('admin.layout.master')
@section('title', 'Admin | Create User')
@section('item', 'User')
@section('sub_item', 'Create')
@section('content')
<div class="row">
    <div id="basic" class="col-lg-12 layout-spacing">

        <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">

                        <div class="form-group">
                            <label class="text-primary">First Name</label>
                            <input type="text" name="first_name" placeholder="Your First Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Last Name</label>
                            <input type="text" name="last_name" placeholder="Your Last Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Email</label>
                            <input type="text" name="email" placeholder="Your Email..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Password</label>
                            <input type="password" name="password" placeholder="Your Password..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Repeat Password</label>
                            <input type="password" name="cf_password" placeholder="Confirm Your Password..." class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Address</label>
                            <input type="text" name="address" placeholder="Your Address..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Birthday</label>
                            <div class="form-group mb-0">
                                <input id="basicFlatpickr" name="birthday" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Your Birthday..">
                            </div>
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Create">
                        <a href="{{route('users.index')}}" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection