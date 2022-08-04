@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')



    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('../admin/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            @if (Auth::user())
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ Auth::User()->foto }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ Auth::User()->name }}
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                {{ Auth::User()->email }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <marquee behavior="" direction="">
                            <h3>Selamat Datang {{ strtoupper(Auth::user()->status) }}</h3>
                        </marquee>
                    </div>
                </div>
        </div>
        @endif
    </div>
@endsection
