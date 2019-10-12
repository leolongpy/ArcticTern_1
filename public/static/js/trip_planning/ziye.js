// 页签切换效果
$('.cut1').click(function () {
    $('.con_b_1').show().siblings().hide();
});
$('.cut2').click(function () {
    $('.con_b_2').show().siblings().hide();
});
$('.cut3').click(function () {
    $('.con_b_1').show().siblings().hide();
});
$('.cut4').click(function () {
    $('.con_b_4').show().siblings().hide();
});
// 评分效果
var wjx_s = "★";
var wjx_k = "☆";
//1. 给所有的li注册mouseenter事件
$(".start li").mouseenter(function () {
    //2. 让当前li和前面所有的li变成实心,让后面所有的兄弟变成空心
    //前面兄弟：prevAll()：
    //后面兄弟：nextAll()：
    $(this).text(wjx_s).prevAll().text(wjx_s);
    $(this).nextAll(wjx_k);
});
//2. 离开ul的时候，把所有的li变成空心
$(".start").mouseleave(function () {
    $(this).children().text(wjx_k);
    //如果我知道了我刚刚点了那个五角星
    //可以让点的那个五角星以及前面的兄弟变成实心就可以。
    //4. 找到我点击的那个li
    $("li.current").text(wjx_s).prevAll().text(wjx_s)
});
//3. 给所有的li注册点击事件，点击的时候，留下点东西(class)
$(".start li").click(function () {
    $(this).addClass("current").siblings().removeClass("current")
});

