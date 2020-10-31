@extends('admin.layout.master')
@section('title', 'Admin | Create Categories')
@section('item', 'Categories')
@section('sub_item', 'Create')
@section('content')
<div class="row">
    <div id="basic" class="col-lg-12 layout-spacing">

        <form method="post" action="{{route('categories.update',$Category->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">

                        <div class="form-group">
                            <label class="text-primary">Name</label>
                            <input type="text" name="name" value="{{$Category->name}}"  class="form-control">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                        <select name="parent_id" class="form-control" id="">
                            <option value="" {{$Category->parent_id=="" ? "selected" : ""}}>Null</option>
                                <option value="" disabled>------------------------</option>
                                @foreach($categories as $item)
                                <option value="{{$item->id}}" 
                               {{($item->id) == ($Category->parent_id) ? "selected":""}}
                                >{{$item->name}}</option>
                                @endforeach
                            </select>
                         @error('parent_id')
                         <div class="alert alert-danger">{{$message}}</div>
                         @enderror
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Update">
                         <a href="{{route('categories.index')}}" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
                

            </div>
                 

        </form>
</div>
</div>
@endsection