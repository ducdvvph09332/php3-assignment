@extends('admin.layout.master')
@section('title', 'Admin | Comment')
@section('item', 'Comment')
@section('sub_item', 'List')
@section('content')
<div id="tableHover" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Comment Table</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-4 text-center">
                    <thead>
                        <tr>
                            <th>Comment By</th>
                            <th>In Product</th>
                            <th>Content</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $item)
                        <tr>
                            <td>{{$item->user->first_name}} {{$item->user->last_name}}</td>
                            <td>{{$item->product->name}}</td>
                            <td>{{$item->content}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection