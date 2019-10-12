$('.second_list').click(function () {
    if ($(".nav_list").is(":hidden")) {
        $('.nav_list').slideDown();
    } else {
        $('.nav_list').slideUp();
    }
});
$('.act_btn1').click(function () {
    $('.act_1').show();
    $('.act_2,.act_3').hide();
});
$('.act_btn2').click(function () {
    $('.act_2').show();
    $('.act_1,.act_3').hide();
});
$('.act_btn3').click(function () {
    $('.act_3').show();
    $('.act_1,.act_2').hide();
});