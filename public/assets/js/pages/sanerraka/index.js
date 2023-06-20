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
    var close_datetime = $("#time-close-1").val();

    console.log(close_datetime)

    countdown('2033-06-19 15:25:00');

    function countdown(targetDateTime) {
        var targetTime = new Date(targetDateTime).getTime();

        var countdownInterval = setInterval(function () {
            var now = new Date().getTime();

            var diff = targetTime - now;

            if (diff > 0) {
                var hours = Math.floor(diff / (1000 * 60 * 60));
                var minutes = Math.floor(
                    (diff % (1000 * 60 * 60)) / (1000 * 60)
                );
                var seconds = Math.floor((diff % (1000 * 60)) / 1000);

                /*console.log(
                    "เหลือเวลาถอยหลัง: " +
                        hours +
                        " ชั่วโมง " +
                        minutes +
                        " นาที " +
                        seconds +
                        " วินาที"
                );*/

                $("#time-close-1").html(
                    "เหลือเวลาประมูล: " +
                        hours +
                        " ชั่วโมง " +
                        minutes +
                        " นาที " +
                        seconds +
                        " วินาที"
                );
            } else {
                $.ajax({
                    url: "time-close",
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    data: {
                        function: "timeClose",
                    },
                    beforeSend: function () {},
                    success: function (data) {
                        if (data.success) {
                            $("#time-close-1").html('หมดเวลาประมูล');
                        } else {
                        }
                    },
                    error: function (request, status, err) {},
                });
                /*console.log("เวลาที่กำหนดผ่านไปแล้ว");*/
                clearInterval(countdownInterval);
            }
        }, 1000);
    }
    /******/
})();
