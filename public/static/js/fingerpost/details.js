/**
 * Created by liuzhaotai on 2018/6/22.
 */
$('.zn').click(function () {
    $(".guidelines").fadeIn("slow");
    $('.guidelines2').hide()
});
$('.mdd').click(function () {
    $(".guidelines2").fadeIn("slow");
    $('.guidelines').hide()
})
    //<!--评论纠错切换-->
$('.pl').click(function () {
    $(".input").fadeIn("slow");
    $('.input2').hide()
});
$('.jc').click(function () {
    $(".input2").fadeIn("slow");
    $('.input').hide()
})
    //<!--返回顶部-->
    //scrolltotop
$(function(){
    //首先将#back-to-top隐藏
    $("#totop").hide();
    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>100){
                $("#totop").fadeIn();
            }
            else
            {
                $("#totop").fadeOut();
            }
        });
        //当点击跳转链接后，回到页面顶部位置
        $("#totop").click(function(){
            $('body,html').animate({scrollTop:0},500);
            return false;
        });
    });
});
