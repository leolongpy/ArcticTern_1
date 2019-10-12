$('.qbcs').click(function (){
    if ($(".qt").is(':hidden')) {
        $(".qt").show();
    } else {
        $(".qt").hide();
    }
})
$('.sxl-tab1').click(function () {
    $('.sxl-1').show();
    $('.sxl-2,.sxl-3,.sxl-4,.sxl-5').hide();
});
$('.sxl-tab2').click(function () {
    $('.sxl-2').show();
    $('.sxl-1,.sxl-3,.sxl-4,.sxl-5').hide();
});
$('.sxl-tab3').click(function () {
    $('.sxl-3').show();
    $('.sxl-1,.sxl-2,.sxl-4,.sxl-5').hide();
});
$('.sxl-tab4').click(function () {
    $('.sxl-4').show();
    $('.sxl-1,.sxl-2,.sxl-3,.sxl-5').hide();
});
$('.sxl-tab5').click(function () {
    $('.sxl-5').show();
    $('.sxl-1,.sxl-2,.sxl-3,.sxl-4').hide();
});
$(function () {
    $("#ch1 span a").on("click", function () {
        $("#ch1 span a").css("background-color", "#ffffff");
        $(this).css("background-color", "#61bcba");
    })
});
$(function () {
    $("#ch1 span a ").on("click", function () {
        $("#ch1 span a").css("color", "#000000");
        $(this).css("color", "#ffffff");
    })
});
$(function () {
    $("#ch2 span a").on("click", function () {
        $("#ch2 span a").css("color", "#000000");
        $(this).css("color", "#ffffff");
    })
});
$(function () {
    $("#ch2 span a").on("click", function () {
        $("#ch2 span a").css("background-color", "#ffffff");
        $(this).css("background-color", "#61bcba");
    })
});
$(function () {
    $("#ch3 span a").on("click", function () {
        $("#ch3 span a").css("color", "#000000");
        $(this).css("color", "#ffffff");
    })
});
$(function () {
    $("#ch3 span a").on("click", function () {
        $("#ch3 span a").css("background-color", "#ffffff");
        $(this).css("background-color", "#61bcba");
    })
});
