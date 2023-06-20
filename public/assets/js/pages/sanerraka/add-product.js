/******/ (function () {
    // webpackBootstrap
    var __webpack_exports__ = {};
    /*!*********************************************************!*\
      !*** ./resources/js/pages/product-filter-range.init.js ***!
      \*********************************************************/
    /*
    Template Name: Skote - Admin & Dashboard Template
    Author: Themesbrand
    Website: https://themesbrand.com/
    Contact: themesbrand@gmail.com
    File: Property list filter init js
    */

    /* DropZone ไว้ก่อน $(document).on("click", "#save-add-product-btn", function () {
        var product_name = $("#product_name").val();
        var product_details = $("#product_details").val();
        var product_low_price = $("#product_low_price").val();
        var product_condition = $("#product_condition").val();
        var product_type = $("#product_type").val();
        var product_open_price = $("#product_open_price").val();
        var product_close_price = $("#product_close_price").val();
        var close_datetime = $("#close_datetime").val();

        console.log(product_name);

    }); */

    $(document).on("change", "#add-product-type", function () {
        var product_type = $("#add-product-type").val();

        $.ajax({
            url: "ajax-add-product",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                product_type: product_type,
                function: "product_type",
            },
            beforeSend: function () {},
            success: function (data) {
                //console.log(JSON.stringy(data.data))
                if (data.success) {
                    if (data.check_type_big > 0) {
                        $("#add-product-type-big").html(data.product_type_big);
                        $("#product-type-big").show();
                        $("#product-type-medium").hide();
                        $("#product-type-small").hide();
                    } else {
                        $("#product-type-big").hide();
                        $("#product-type-medium").hide();
                        $("#product-type-small").hide();
                    }
                } else {
                }
            },
            error: function (request, status, err) {},
        });
    });

    $(document).on("change", "#add-product-type-big", function () {
        var product_type_big = $("#add-product-type-big").val();

        $.ajax({
            url: "ajax-add-product",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                product_type_big: product_type_big,
                function: "product_type_big",
            },
            beforeSend: function () {},
            success: function (data) {
                //console.log(JSON.stringy(data.data))
                if (data.success) {
                    if (data.check_type_medium > 0) {
                        $("#add-product-type-medium").html(
                            data.product_type_medium
                        );
                        $("#product-type-medium").show();
                        $("#product-type-small").hide();
                    } else {
                        $("#product-type-medium").hide();
                        $("#product-type-small").hide();
                    }
                } else {
                }
            },
            error: function (request, status, err) {},
        });
    });

    $(document).on("change", "#add-product-type-medium", function () {
        var product_type_medium = $("#add-product-type-medium").val();

        $.ajax({
            url: "ajax-add-product",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                product_type_medium: product_type_medium,
                function: "product_type_medium",
            },
            beforeSend: function () {},
            success: function (data) {
                //console.log(JSON.stringy(data.data))
                if (data.success) {
                    if (data.check_type_small > 0) {
                        $("#add-product-type-small").html(
                            data.product_type_small
                        );
                        $("#product-type-small").show();
                    } else {
                        $("#product-type-small").hide();
                    }
                } else {
                }
            },
            error: function (request, status, err) {},
        });
    });

    /******/
})();
