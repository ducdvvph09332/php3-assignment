@extends('admin.layout.master')
@section('title', 'Admin | Create Product')
@section('item', 'Product')
@section('sub_item', 'Create')
@section('content')
<div class="row">
    <div id="basic" class="col-lg-12 layout-spacing">

        <form method="post" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">

                        <div class="form-group">
                            <label class="text-primary">Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Category</label>
                            <select name="category_id" class="form-control" id="">
                                @foreach($categories as $item)
                                <option value="{{$item->id}}" 
                               {{($item->id) == ($product->category_id) ? "selected":""}}
                                >{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Image</label>
                            <input type="file" name="image_url" class="form-control"><img src="{{asset("$product->image_url")}}" width=500>
                            @error('image_url')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Price</label>
                            <input type="number" min="0" name="price" value="{{$product->price}}" class="form-control">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Sale Percent</label>
                            <input type="number" min="0" step="any" name="sale_percent" value="{{$product->sale_percent}}" class="form-control">
                        </div>
                        @error('sale_percent')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label class="text-primary">Stocks</label>
                            <input type="number" min="0" name="stocks" value="{{$product->stocks}}" class="form-control">
                            @error('stocks')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Status</label>
                            <select name="is_active" class="form-control" id="">
                                <option value="1" {{($product->is_active) == 1 ? "selected" : ""}}>Activate</option>
                                <option value="0" {{($product->is_active) == 0 ? "selected" : ""}}>Deactivate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Description</label>
                            <textarea name="description" id="" cols="10" rows="10" class="form-control">{{$product->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Update">
                        <a href="{{route('products.index')}}" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
        </form>

    </div>
</div>
</div>
@endsection