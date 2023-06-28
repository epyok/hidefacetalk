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

    <div class="text-sm-center">
        <button type="button" style="width:100%" class="btn btn-light waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="mdi mdi-plus me-1"></i></button>
    </div>

    <!--  <div class="col-sm-3">

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

         <div class="row">
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
        </div> 
    </div> -->

    <!------------------>
    <div class="col-sm-12">

        <div class="">
            <div class="progress animated-progess mb-4">
                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress animated-progess mb-4">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress animated-progess mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress animated-progess mb-4">
                <div id="progress-payment" class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
<script>
    myTimeout1 = setTimeout(function() {
        $('#progress-payment').css('width', '10%').attr('aria-valuenow', '10');
    }, 100);

    myTimeout2 = setTimeout(function() {
        $('#progress-payment').css('width', '20%').attr('aria-valuenow', '20');
    }, 1000);

    myTimeout3 = setTimeout(function() {
        $('#progress-payment').css('width', '30%').attr('aria-valuenow', '30');
    }, 1000 * 2);

    myTimeout4 = setTimeout(function() {
        $('#progress-payment').css('width', '40%').attr('aria-valuenow', '40');
    }, 1000 * 3);

    myTimeout5 = setTimeout(function() {
        $('#progress-payment').css('width', '50%').attr('aria-valuenow', '50');
    }, 1000 * 4);

    myTimeout6 = setTimeout(function() {
        $('#progress-payment').css('width', '60%').attr('aria-valuenow', '60');
    }, 1000 * 5);

    myTimeout7 = setTimeout(function() {
        $('#progress-payment').css('width', '70%').attr('aria-valuenow', '70');
    }, 1000 * 6);

    myTimeout8 = setTimeout(function() {
        $('#progress-payment').css('width', '80%').attr('aria-valuenow', '80');
    }, 1000 * 7);

    myTimeout9 = setTimeout(function() {
        $('#progress-payment').css('width', '90%').attr('aria-valuenow', '90');
    }, 1000 * 8);

    myTimeout10 = setTimeout(function() {
        $('#progress-payment').css('width', '100%').attr('aria-valuenow', '100');
    }, 1000 * 9);

    $('#alert-payment').html('กำลังนำเข้าข้อมูลการชำระเงิน...');
                $('#alert-payment').addClass('text-danger');
</script>
@endsection