@extends('admin.layout.master')
@section('title', 'Admin | Create Comment')
@section('item', 'Comment')
@section('sub_item', 'Create')
@section('content')
<div class="row">
    <div id="basic" class="col-lg-12 layout-spacing">

        <form method="post" action="{{route('comments.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">

                        <div class="form-group">
                            <label class="text-primary">User</label>
                            <select name="user_id" id="" class="form-control">
                                <option value="">Choose one...</option>
                            @foreach($users as $item)
                                <option value="{{$item->id}}">{{$item->first_name}} {{$item->first_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Product</label>
                            <select name="product_id" id="" class="form-control">
                                <option value="">Choose one...</option>
                            @foreach($products as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Content</label>
                            <textarea name="content" id="" cols="30" rows="6" class="form-control"></textarea>
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Create">
                        <a href="{{route('users.index')}}" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
        </form>

    </div>
</div>
</div>
@endsection