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

    <div class="row mb-1 mt-3">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded " company-id="ems" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/ems_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="kerry" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/kerryexpress_logo.png?v=1">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="fedex" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/fedex_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="dhl" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/dhl_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="dhlexpress" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/dhlexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="nimexpress" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/nimexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="ninjavan" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/ninjavan_logo.png">
            </a>
        </div>
        <div class="col-sm-1">

        </div>
    </div>

    <div class="row mb-1 mt-3">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded " company-id="ems" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/bestexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="kerry" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/scgexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="fedex" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/flashexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="dhlexpress" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/cjlogistics_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="nimexpress" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/lazadaelogistics_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="ninjavan" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/shopeeexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="ninjavan" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/yusenlogistics_logo.png">
            </a>
        </div>
        <div class="col-sm-1">

        </div>
    </div>

    <div class="row mb-4 mt-3">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="fedex" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/interexpresslogistics_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="dhlexpress" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/porlorexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="nimexpress" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/aliexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded " company-id="ems" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/shippop_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="kerry" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/tplogistics_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="ninjavan" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/ztoexpress_logo.png">
            </a>
        </div>
        <div class="col-sm-1 mx-4">
            <a href="#">
                <img class="img-company rounded" company-id="ninjavan" alt="ไปรษณีย์ไทย" src="https://images.thaiware.com/trace/company/sendit_logo.png">
            </a>
        </div>
        <div class="col-sm-1">

        </div>
    </div>



    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-6">
            <input class="form-control mb-3" id="tracking-number" placeholder="กรอกเลขพัสดุ" style="font-size:larger">
        </div>
        <div class="text-sm-center col-sm-2">
            <button type="button" id="tracking-submit" style="width:100%; font-size:larger" class="btn btn-secondary waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"> ตรวจสอบพัสดุ </button>
        </div>
        <div class="col-sm-2">
        </div>
    </div>

</div>


@endsection
@section('script')
<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>

<!-- เขียนเอง -->

<script>
    $(document).on('click', '.img-company', function() {

        company_id = $(this).attr('company-id');

        $('.img-company').removeClass('img-company-click');
        $(this).addClass("img-company-click");
    });

    $(document).on('click', '#tracking-submit', function() {

        tracking_number = $('#tracking-number').val();

        if (company_id == 'ems') {
            url = 'https://track.thailandpost.co.th/?trackNumber=' + tracking_number;
        } else if (company_id == 'kerry') {
            url = 'https://th.kerryexpress.com/th/track/?track=' + tracking_number;
        } else if (company_id == 'dhl') {
            url = 'https://www.dhl.com/th-th/home/tracking.html?tracking-id=' + tracking_number;
        } else if (company_id == 'dhlexpress') {
            url = 'https://mydhl.express.dhl/th/th/tracking.html#/results?id=' + tracking_number;
        } else if (company_id == 'fedex') {
            url = 'https://www.fedex.com/fedextrack/summary?trknbr=' + tracking_number;
        } else if (company_id == 'nimexpress') {
            url = 'https://www.nimexpress.com/web/p/tracking?h_i=' + tracking_number;
        } else if (company_id == 'ninjavan') {
            url = 'https://www.ninjavan.co/th-th/tracking?id=' + tracking_number;
        }


        window.open(url, '_blank');
    });
</script>
@endsection