@extends('layouts.master-layouts')

@section('title') Home @endsection

@section('css')
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
@endsection

@section('content')

<div class="row">

    <div class="col-xl-12">
        <div id="carouselExampleAutoplaying" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.w3schools.com/howto/img_lights_wide.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="col-xl-12">

        <div class="row">
            <div class="col-lg-12  mb-4">
                <div class="owl-carousel owl-theme clients-carousel" id="clients-carousel" dir="ltr">
                    <div class="item">
                        <div class="client-images">
                            <img src="{{ URL::asset('/assets/images/clients/1.png') }}" alt="client-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-images">
                            <img src="{{ URL::asset('/assets/images/clients/2.png') }}" alt="client-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-images">
                            <img src="{{ URL::asset('/assets/images/clients/3.png') }}" alt="client-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-images">
                            <img src="{{ URL::asset('/assets/images/clients/4.png') }}" alt="client-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-images">
                            <img src="{{ URL::asset('/assets/images/clients/5.png') }}" alt="client-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-images">
                            <img src="{{ URL::asset('/assets/images/clients/6.png') }}" alt="client-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="col-xl-2">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Skote Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate">Str::ucfirst(Auth::user()->name)</h5>
                        <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                    </div>

                    <div class="col-sm-">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">125</h5>
                                    <p class="text-muted mb-0">Projects</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">$1245</h5>
                                    <p class="text-muted mb-0">Revenue</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Earning</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="text-muted">This month</p>
                        <h3>$34,252</h3>
                        <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>

                        <div class="mt-4">
                            <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mt-4 mt-sm-0">
                            <div id="radialBar-chart" data-colors='["--bs-primary"]' class="apex-charts"></div>
                        </div>
                    </div>
                </div>
                <p class="text-muted mb-0">We craft digital</p>
            </div>
        </div>
    </div>

    <div class="col-xl-10">
        <div class="card">
            <!-- Team start -->
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme events navs-carousel" id="team-carousel" dir="ltr" style="margin-bottom: -18pt;">
                    @foreach($products as $key => $val)
                    @php
                    $product_img = DB::table('products_img')
                    ->where('product_id',$val->product_id)
                    ->first() ;
                    @endphp
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="{{ asset('assets/images/upload/products_img/'.$product_img->product_img_url) }}" width="200pt" height="200pt" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>{{ $val->product_name }}</h5>
                                    <P class="text-muted mb-0"> @if($val->product_bid_price <> '')
                                            {{ number_format(" $val->product_bid_price",2) }} {{ GoogleTranslate::trans('Baht', app()->getLocale()) }}
                                            @elseif($val->product_open_price > 0 )
                                            {{ number_format(" $val->product_open_price",2) }} {{ GoogleTranslate::trans('Baht', app()->getLocale()) }}
                                            @else
                                            {{ 0 }} {{ GoogleTranslate::trans('Baht', app()->getLocale()) }}
                                            @endif</P>
                                </div>
                                <div id="time-close-{{$key+1}}" value="{{ $val->close_datetime }}"></div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links" id="tooltip-container">
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- end row -->
        </div>

        <div class="card">
            <!-- Team start -->
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme events navs-carousel" id="team-carousel" dir="ltr">
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>Mark Hurley</h5>
                                    <P class="text-muted mb-0">CEO & Lead</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links" id="tooltip-container">
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>Calvin Smith</h5>
                                    <P class="text-muted mb-0">Blockchain developer</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links" id="tooltip-container2">
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container2" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container2" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container2" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-8.jpg') }}" alt="" class="rounded">
                                </div>
                                <div class="mt-3">
                                    <h5>Vickie Sample</h5>
                                    <P class="text-muted mb-0">Designer</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links" id="tooltip-container3">
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container3" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container3" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container3" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-5.jpg') }}" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>Alma Farley</h5>
                                    <P class="text-muted mb-0">App developer</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links" id="tooltip-container4">
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container4" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container4" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container4" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card text-center team-box">
                            <div class="card-body">
                                <div>
                                    <img src="{{ URL::asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded">
                                </div>

                                <div class="mt-3">
                                    <h5>Amy Hood </h5>
                                    <P class="text-muted mb-0">Designer</P>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-top">
                                <div class="d-flex mb-0 team-social-links" id="tooltip-container5">
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container5" title="Facebook">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container5" title="Linkedin">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </div>
                                    <div class="flex-fill">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container5" title="Google">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>

    <div class="card">
        <!-- Team start -->
        <div class="col-lg-12">
            <div class="owl-carousel owl-theme events navs-carousel" id="team-carousel" dir="ltr">
                <div class="item">
                    <div class="card text-center team-box">
                        <div class="card-body">
                            <div>
                                <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt="" class="rounded">
                            </div>

                            <div class="mt-3">
                                <h5>Mark Hurley big</h5>
                                <P class="text-muted mb-0">CEO & Lead</P>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-top">
                            <div class="d-flex mb-0 team-social-links" id="tooltip-container">
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Facebook">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Linkedin">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container" title="Google">
                                        <i class="mdi mdi-google"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card text-center team-box">
                        <div class="card-body">
                            <div>
                                <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}" alt="" class="rounded">
                            </div>

                            <div class="mt-3">
                                <h5>Calvin Smith</h5>
                                <P class="text-muted mb-0">Blockchain developer</P>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-top">
                            <div class="d-flex mb-0 team-social-links" id="tooltip-container2">
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container2" title="Facebook">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container2" title="Linkedin">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container2" title="Google">
                                        <i class="mdi mdi-google"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card text-center team-box">
                        <div class="card-body">
                            <div>
                                <img src="{{ URL::asset('/assets/images/users/avatar-8.jpg') }}" alt="" class="rounded">
                            </div>
                            <div class="mt-3">
                                <h5>Vickie Sample</h5>
                                <P class="text-muted mb-0">Designer</P>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-top">
                            <div class="d-flex mb-0 team-social-links" id="tooltip-container3">
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container3" title="Facebook">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container3" title="Linkedin">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container3" title="Google">
                                        <i class="mdi mdi-google"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card text-center team-box">
                        <div class="card-body">
                            <div>
                                <img src="{{ URL::asset('/assets/images/users/avatar-5.jpg') }}" alt="" class="rounded">
                            </div>

                            <div class="mt-3">
                                <h5>Alma Farley</h5>
                                <P class="text-muted mb-0">App developer</P>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-top">
                            <div class="d-flex mb-0 team-social-links" id="tooltip-container4">
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container4" title="Facebook">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container4" title="Linkedin">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container4" title="Google">
                                        <i class="mdi mdi-google"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card text-center team-box">
                        <div class="card-body">
                            <div>
                                <img src="{{ URL::asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded">
                            </div>

                            <div class="mt-3">
                                <h5>Amy Hood </h5>
                                <P class="text-muted mb-0">Designer</P>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-top">
                            <div class="d-flex mb-0 team-social-links" id="tooltip-container5">
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container5" title="Facebook">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container5" title="Linkedin">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </div>
                                <div class="flex-fill">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-container="#tooltip-container5" title="Google">
                                        <i class="mdi mdi-google"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex flex-wrap">
                <h4 class="card-title mb-4">Email Sent</h4>
                <div class="ms-auto">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Month</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Year</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="stacked-column-chart" data-colors='["--bs-primary", "--bs-warning", "--bs-success"]' class="apex-charts" dir="ltr"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Social Source</h4>
                <div class="text-center">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                            <i class="mdi mdi-facebook text-primary"></i>
                        </span>
                    </div>
                    <p class="font-16 text-muted mb-2"></p>
                    <h5><a href="javascript: void(0);" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                    <a href="javascript: void(0);" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-primary font-size-16">
                                    <i class="mdi mdi-facebook text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Facebook</h5>
                            <p class="text-muted mb-0">125 sales</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-info font-size-16">
                                    <i class="mdi mdi-twitter text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Twitter</h5>
                            <p class="text-muted mb-0">112 sales</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-pink font-size-16">
                                    <i class="mdi mdi-instagram text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Instagram</h5>
                            <p class="text-muted mb-0">104 sales</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Activity</h4>
                <ul class="verti-timeline list-unstyled">
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “Volunteer Activities
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Everyone realizes why a new common language would be desirable... <a href="javascript: void(0);">Read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list active">
                        <div class="event-timeline-dot">
                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Joined the group “Boardsmanship Forum”
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “In-Kind Opportunity”
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center mt-4"><a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Top Cities Selling Product</h4>

                <div class="text-center">
                    <div class="mb-4">
                        <i class="bx bx-map-pin text-primary display-4"></i>
                    </div>
                    <h3>1,456</h3>
                    <p>San Francisco</p>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table align-middle table-nowrap">
                        <tbody>
                            <tr>
                                <td style="width: 30%">
                                    <p class="mb-0">San Francisco</p>
                                </td>
                                <td style="width: 25%">
                                    <h5 class="mb-0">1,456</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Los Angeles</p>
                                </td>
                                <td>
                                    <h5 class="mb-0">1,123</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">San Diego</p>
                                </td>
                                <td>
                                    <h5 class="mb-0">1,026</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check font-size-16 align-middle">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                        <label class="form-check-label" for="transactionCheck01"></label>
                                    </div>
                                </th>
                                <th class="align-middle">Order ID</th>
                                <th class="align-middle">Billing Name</th>
                                <th class="align-middle">Date</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Payment Status</th>
                                <th class="align-middle">Payment Method</th>
                                <th class="align-middle">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>Neal Matthews</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck03">
                                        <label class="form-check-label" for="transactionCheck03"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                <td>Jamal Burnett</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $380
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-danger font-size-11">Chargeback</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck04">
                                        <label class="form-check-label" for="transactionCheck04"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                <td>Juan Mitchell</td>
                                <td>
                                    06 Oct, 2019
                                </td>
                                <td>
                                    $384
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck05">
                                        <label class="form-check-label" for="transactionCheck05"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                <td>Barry Dick</td>
                                <td>
                                    05 Oct, 2019
                                </td>
                                <td>
                                    $412
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck06">
                                        <label class="form-check-label" for="transactionCheck06"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                <td>Ronald Taylor</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $404
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-warning font-size-11">Refund</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck07">
                                        <label class="form-check-label" for="transactionCheck07"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                <td>Jacob Hunter</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $392
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!-- Transaction Modal -->
<div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/product/img-7.png') }}" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                    </div>
                                </td>
                                <td>$ 255</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/product/img-4.png') }}" alt="" class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                    </div>
                                </td>
                                <td>$ 145</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Shipping:</h6>
                                </td>
                                <td>
                                    Free
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
<!-- ICO landing init -->
<script src="{{ URL::asset('/assets/js/pages/ico-landing.init.js') }}"></script>
<!-- เขียนเอง -->
<script src="{{ URL::asset('/assets/js/pages/sanerraka/index.js') }}"></script>

@endsection