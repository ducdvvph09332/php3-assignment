@extends('admin.layout.master')
@section('title', 'Admin | Show Product')
@section('item', 'Product')
@section('sub_item', 'Show')
@section('content')

<div class="container col-xl-10 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

    <div class="user-profile layout-spacing">
        <div class="widget-content widget-content-area">
            <div class="d-flex justify-content-between">
                <h1 class="text-primary font-weight-bold">Information</h1>
                <a href="{{route('products.edit', $product->id)}}" class="mt-2 text-success"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg></a>
            </div>
            <div class="user-info-list">

                <div class="">
                    <ul class="contacts-block list-unstyled">
                        <li class="contacts-block__item mt-3">

                            <h4><span class="font-weight-bold">Name: </span> {{$product->name}}</h4>
                        </li>
                        <li class="contacts-block__item mt-3">

                            <h4><span class="font-weight-bold">Category: </span> {{$product->category->name}}</h4>
                        </li>
                        <li class="contacts-block__item mt-3">

                            <h4><span class="font-weight-bold">Image: </span> <img src="{{$product->image_url}}" width="300" alt=""> </h4>
                        </li>
                        <li class="contacts-block__item mt-3">

                             <h4><span class="font-weight-bold">Description: </span>{{$product->description}}</h4>
                        </li>
                        <li class="contacts-block__item mt-3">

                            <h4><span class="font-weight-bold">Price: </span> {{$product->price}}</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

@endsection