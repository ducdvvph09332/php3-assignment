@extends('admin.layout.master')
@section('title', 'Admin | Show Product')
@section('item', 'Product')
@section('sub_item', 'Show')
@section('content')
<?php

use Illuminate\Support\Facades\Auth;

?>
<div class="container col-xl-10 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

    <div class="user-profile layout-spacing">
        <div class="widget-content widget-content-area">
            <div class="d-flex justify-content-between">
                <h2 class="text-primary font-weight-bold">Information</h2>
                <a href="{{route('products.edit', $product->id)}}" class="mt-2 text-success"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg></a>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col">
                    <img src="{{asset($product->image_url)}}" width="100%" class="rounded shadow" alt="">
                </div>
                <div class="col">

                    <div class="user-info-list">

                        <div class="">
                            <ul class="contacts-block list-unstyled">
                                <li class="contacts-block__item mt-3">
                                    <h4><span class="font-weight-bold text-primary">Product Name: </span> {{$product->name}}</h4>
                                </li>
                                <li class="contacts-block__item mt-3">
                                    <h4><span class="font-weight-bold text-primary">Category: </span>
                                        @if(isset($product->category->name))
                                        <span>{{$product->category->name}}</span>
                                        @else
                                        <span class="text-danger">Null</span>
                                        @endif</h4>
                                </li>
                                <li class="contacts-block__item mt-3">
                                    <h4><span class="font-weight-bold text-primary">Description: </span>{{$product->description}}</h4>
                                </li>
                                <li class="contacts-block__item mt-3">
                                    <h4><span class="font-weight-bold text-primary">Price: </span> {{number_format($product->price,0, ",", ".")}}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="user-profile layout-spacing">
        <div class="widget-content widget-content-area">
            <div class="d-flex justify-content-between">
                <h4 class="text-primary font-weight-bold">Comments</h4>
            </div>
            <form action="{{route('comments.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Leave a comment</label>
                    <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
                    <input type="hidden" name="product_id" id="" value="{{$product->id}}">
                    <textarea name="content" class="form-control" id="" rows="6"></textarea>
                    <span class="text-danger">@error('content'){{$message}} @enderror</span>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Comment</button>
                </div>
            </form>
        </div>
    </div>

    <div class="user-profile layout-spacing">
        <div class="widget-content widget-content-area">
            <div class="d-flex justify-content-between">
                <h4 class="text-primary font-weight-bold">All Comments</h4>
            </div>
            <div class="form-group">
                <label for="">List of all comments</label>
                @foreach ($comments as $item)
                <div class="card mb-3">
                    <p class="d-flex align-items-center">
                        <form action="{{route('comments.destroy', $item->id)}}" method="POST" class="">
                            &nbsp;&nbsp; By <a href="{{route('users.show',$item->user_id)}}" class="text-info font-weight-bold">{{$item->user->first_name}} {{$item->user->last_name}} </a>
                            at <span class="text-muted">{{date('d-m-Y', strtotime($item->updated_at))}}</span>
                            @csrf
                            <input type="hidden" name="_method" value="DELETE" id="">
                            <button type="submit" class="btn btn-danger float-right" onclick="return confirm('Are you sure')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </button>
                            <a href="{{route('comments.edit', $item->id)}}" class="btn btn-success float-right"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                </svg>
                            </a>
                        </form>

                    </p>
                    <div class="card-header">

                        <h6>{{$item->content}}</h6>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

</div>

</div>

@endsection