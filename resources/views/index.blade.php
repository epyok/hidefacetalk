@extends('layouts.master')

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
                    <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" class="d-block" width="100%" height="220" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" class="d-block" width="100%" height="220" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.w3schools.com/howto/img_lights_wide.jpg" class="d-block" width="100%" height="220" alt="...">
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


    <div class="col-sm-3">

        <div class="text-sm-end">
            <button type="button" style="width:100%"  class="btn btn-second waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>{{ GoogleTranslate::trans('Create Post', app()->getLocale()) }}</button>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle img-thumbnail">
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <div class="text-muted">
                                    <h5 class="mb-1">Henry wells</h5>
                                    <p class="mb-0">UI / UX Designer</p>
                                </div>
                            </div>
                            <div class="flex-shrink-0 dropdown ms-2">
                                <button class="btn btn-light btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bxs-cog align-middle me-1"></i> Setting
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <div>
                                    <p class="text-muted text-truncate mb-2">Total Post</p>
                                    <h5 class="mb-0">32</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div>
                                    <p class="text-muted text-truncate mb-2">Subscribes</p>
                                    <h5 class="mb-0">10k</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!------------------>
    <div class="col-sm-9">
        <div class="card">
            <div class="card-body">
                <div>
                    <h4 class="card-title mb-3"><img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle img-thumbnail">  &nbsp; {{ GoogleTranslate::trans('ยินดีต้อนรับสู่ hidefacetalk.', app()->getLocale()) }}</h4>
                    <p class="text-muted">{{ GoogleTranslate::trans('สวัสดีครับ เป็นยังไงบ้าง ชาว hidefacetalk.', app()->getLocale()) }} </p>
                </div>
            </div>
            <div class="card-footer bg-transparent border-top">
                <div class="contact-links d-flex font-size-20">
                    <div class="flex-fill mx-4">
                        <a href="javascript: void(0);"><i class="bx bx bx-like"></i></a>
                    </div>
                    <div class="flex-fill mx-4">
                        <a href="javascript: void(0);"><i class="bx bx-message-square-dots"></i></a>
                    </div>
                    <div class="flex mx-4">
                        <a href="javascript: void(0);"><i class="mdi mdi-share-outline"></i></a>
                    </div>
                </div>

                <div class="border-top mt-2">
                    <div class="mt-2">
                        <h5 class="font-size-14"><a href="#"><i class="bx bx-message-dots text-muted align-middle me-1"></i> {{ GoogleTranslate::trans('Read more', app()->getLocale()) }}</a></h5>

                        <div>
                            <div class="d-flex py-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                            <i class="bx bxs-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-14 mb-1">Delores Williams <small class="text-muted float-end">1 hr Ago</small></h5>
                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual</p>
                                    <div>
                                        <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex py-3 border-top">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid d-block rounded-circle">
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="font-size-14 mb-1">Clarence Smith <small class="text-muted float-end">2 hrs Ago</small></h5>
                                    <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                    <div>
                                        <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>

                                    <div class="d-flex pt-3">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-light text-primary">
                                                    <i class="bx bxs-user"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-grow-1">
                                            <h5 class="font-size-14 mb-1">Silvia Martinez <small class="text-muted float-end">2 hrs Ago</small></h5>
                                            <p class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exercise</p>
                                            <div>
                                                <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex py-3 border-top">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                            <i class="bx bxs-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="font-size-14 mb-1">Keith McCoy <small class="text-muted float-end">12 Aug</small></h5>
                                    <p class="text-muted">Donec posuere vulputate arcu. phasellus accumsan cursus velit</p>
                                    <div>
                                        <a href="javascript: void(0);" class="text-success"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <h4 class="card-title mb-3">Invite your friends to Skote</h4>
                        <p class="text-muted">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally.</p>
                        <div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="bx bx-user-plus align-middle"></i> Invite Friends</a>
                        </div>
                    </div>
                    <div>
                        <img src="assets/images/jobs.png" alt="" height="130">
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



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

@endsection