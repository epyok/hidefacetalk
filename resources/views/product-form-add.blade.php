@extends('layouts.master-layouts')

@section('title') {{ trans('message.Add product') }} @endsection

@section('css')
<!-- select2 css -->
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

<!-- dropzone css -->
<link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') {{ trans('message.My product') }} @endslot
@slot('title') {{ trans('message.Add product') }} @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">กรอกข้อมูลพิ่มสินค้า</h4>
                <p class="card-title-desc">กรุณากรอกข้อมูลให้ครบทุกช่องที่มีเครื่องหมาย *</p>

                <!-- <div>
                    <form action="{{ route('addproductdb') }}" method="post" enctype="multipart/form-data" class="dropzone">
                        @csrf
                        <div class="fallback">
                            <input name="products_img[]" type="file" id="products_img" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>

                            <h4>Drop files here or click to upload.</h4>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">บันทึก</button>
                    </form>
                </div> -->

                <form action="{{ route('addproductdb') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="products_img">{{ trans('message.Image') }}*</label>
                                <input name="products_img[]" type="file" id="products_img" class="form-control @error('products_img') is-invalid @enderror" multiple />
                                @error('products_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="productname">ชื่อสินค้า*</label>
                                <input class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" type="text" placeholder="Product Name">
                                @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="product_details">รายละเอียดสินค้า</label>
                                <textarea class="form-control @error('product_details') is-invalid @enderror" id="product_details" name="product_details" rows="5" placeholder="Product Description"></textarea>
                                @error('product_details')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="low_bid_price">เสนอราคาขั้นต่ำ</label>
                                <input type="number" id="product_low_price" name="product_low_price" class="form-control" placeholder="Manufacturer Brand">
                            </div>
                            <div class="mb-3">
                                <label for="product_condition">สภาพสินค้า*</label>
                                <select style="width: 100%;" class="form-control select2 @error('product_condition') is-invalid @enderror" id="product_condition" name="product_condition">
                                    <option selected disabled>Select</option>
                                    <option value="มือหนึ่ง">มือหนึ่ง</option>
                                    <option value="มือสอง">มือสอง</option>
                                </select>
                                @error('product_condition')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="add_product_type">หมวดหมู่สินค้า*</label>
                                <select class="form-control select2 @error('product_type') is-invalid @enderror" id="add-product-type" style="width:100%;" name="product_type">
                                    <option selected disabled> กรุณาเลือกหมวดหมู่ </option>
                                    @foreach($product_type as $key => $val)
                                    <option value="{{ $val->id }}" product_type_name="{{ $val->product_type_name }}">{{ $val->product_type_name }}</option>
                                    @endforeach
                                </select>
                                @error('product_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3" id="product-type-big" style="display: none;">
                                <select class="form-control select2" id="add-product-type-big" name="product_type_big" style="width:100%;">
                                </select>
                            </div>

                            <div class="mb-3" id="product-type-medium" style="display: none;">
                                <select class="form-control select2" id="add-product-type-medium" name="product_type_medium" style="width:100%;">
                                </select>
                            </div>

                            <div class="mb-3" id="product-type-small" style="display: none;">
                                <select class="form-control select2" id="add-product-type-small" name="product_type_small" style="width:100%;">
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="product_open_price">ราคาเปิด*</label>
                                <input type="number" id="product_open_price" name="product_open_price" class="form-control" placeholder="ราคาเปิด">
                            </div>
                            <div class="mb-3">
                                <label for="product_close_price">ราคาปิด</label>
                                <input type="number" id="product_close_price" name="product_close_price" class="form-control" placeholder="ราคาปิด">
                            </div>
                            <div class="mb-3">
                                <label for="close_datetime">เวลาปิด</label>
                                <input type="datetime-local" id="close_datetime" name="close_datetime" class="form-control" placeholder="ราคาปิด">
                            </div>
                            <div class="mb-3">
                                <label class="control-label">tags</label>
                                <select style="width:100%;" name="tags" class="select2 form-control select2-multiple" name="tags" multiple="multiple" data-placeholder="Choose ...">
                                    <option value="Wireless">Wireless</option>
                                    <option value="Battery life">Battery life</option>
                                    <option value="Bass">Bass</option>
                                </select>

                            </div>

                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2 float-end">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">บันทึก</button>
                        <a href="{{ route('myshop') }}"><button type="button" class="btn btn-secondary waves-effect waves-light">ยกเลิก</button></a>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
<!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<!-- select 2 plugin -->
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<!-- dropzone js -->
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
<!-- เขียนเอง -->
<script src="{{ URL::asset('/assets/js/pages/sanerraka/add-product.js') }}"></script>

@endsection