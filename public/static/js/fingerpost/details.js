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
    //<!--���۾����л�-->
$('.pl').click(function () {
    $(".input").fadeIn("slow");
    $('.input2').hide()
});
$('.jc').click(function () {
    $(".input2").fadeIn("slow");
    $('.input').hide()
})
    //<!--���ض���-->
    //scrolltotop
$(function(){
    //���Ƚ�#back-to-top����
    $("#totop").hide();
    //����������λ�ô��ھඥ��100��������ʱ����ת���ӳ��֣�������ʧ
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
        //�������ת���Ӻ󣬻ص�ҳ�涥��λ��
        $("#totop").click(function(){
            $('body,html').animate({scrollTop:0},500);
            return false;
        });
    });
});
