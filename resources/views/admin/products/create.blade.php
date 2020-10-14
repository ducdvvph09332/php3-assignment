@extends('admin.layout.master')
@section('title', 'Admin | Create Product')
@section('item', 'Product')
@section('sub_item', 'Create')
@section('content')
<div class="row">
    <div id="basic" class="col-lg-12 layout-spacing">

        <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">

                        <div class="form-group">
                            <label class="text-primary">Name</label>
                            <input type="text" name="name" placeholder="Product Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Category</label>
                            <select name="category_id" class="form-control" id="">
                                @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Image</label>
                            <input type="text" name="image_url" placeholder="Address Image Url..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Price</label>
                            <input type="number" min="0" name="price" placeholder="price..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Sale Percent</label>
                            <input type="number" min="0" step="any" name="sale_percent" placeholder="Sale Percent..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Stocks</label>
                            <input type="number" min="0" name="stocks" placeholder="Stocks..." class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Status</label>
                            <select name="is_active" class="form-control" id="">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Description</label>
                            <textarea name="description" id="" cols="10" rows="10" class="form-control"></textarea>
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Create">
                        <a href="{{route('products.index')}}" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
                
            </div>
        </form>
</div>
</div>
@endsection