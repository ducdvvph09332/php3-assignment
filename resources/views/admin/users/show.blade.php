@extends('admin.layout.master')
@section('title', 'Admin | Create Comment')
@section('item', 'Comment')
@section('sub_item', 'Create')
@section('content')

<div class="container col-xl-10 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

    <div class="user-profile layout-spacing">
        <div class="widget-content widget-content-area">
            <div class="d-flex justify-content-between">
                <h2 class="text-primary">Profile</h2>
                <a href="{{route('users.edit', $user->id)}}" class="mt-2 text-success"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg></a>
            </div>
            <div class="user-info-list">

                <div class="">
                    <ul class="contacts-block list-unstyled text-center">
                        <li class="contacts-block__item mt-3">

                            <h4><svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> {{$user->first_name}} {{$user->last_name}}</h4>
                        </li>
                        <li class="contacts-block__item mt-3">

                            <h4><svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg> {{$user->address}}</h4>
                        </li>
                        <li class="contacts-block__item mt-3">

                            <h4><svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg> {{$user->email}}</h4>
                        </li>
                        <li class="contacts-block__item mt-3">

                            <h4><svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                </svg> {{$user->birthday}}</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

@endsection