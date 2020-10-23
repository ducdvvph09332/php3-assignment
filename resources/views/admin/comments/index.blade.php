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
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $item)
                        <tr>
                            <td>{{$item->user->first_name}} {{$item->user->last_name}}</td>
                            <td>{{$item->product->name}}</td>
                            <td>{{$item->content}}</td>
                            <td>
                                <a href="{{route('comments.edit',$item->id)}}" class="btn btn-success mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg>
                                </a>
                                <form action="{{route('comments.destroy', $item->id)}}" method="POST" class="mt-2">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE" id="">
                                    <button type="submit" class="btn btn-danger btn-destroy">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection