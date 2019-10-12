/**
 * Created by liuzhaotai on 2018/6/22.
 */
    //文字滚动
    var demo = document.getElementById("demo");
    var demo1 = document.getElementById("demo1");
    var demo2 = document.getElementById("demo2");
    demo2.innerHTML=document.getElementById("demo1").innerHTML;
    function Marquee(){
        if(demo.scrollLeft-demo2.offsetWidth>=0){
            demo.scrollLeft-=demo1.offsetWidth;
        }
        else{
            demo.scrollLeft++;
        }
    }
    var myvar=setInterval(Marquee,30);
    demo.onmouseout=function (){myvar=setInterval(Marquee,30);}
    demo.onmouseover=function(){clearInterval(myvar);}

    function load() {
        var a= setTimeout("loading.style.transition='opacity 1s'",0)
        //设置透明度改变的过渡时间为0.3秒
        var b= setTimeout("loading.style.opacity=0",4000)
        //0.5秒后加载动画开始变为透明
        var c= setTimeout("loading.style.display='none'",4500)
        //当透明度为0的时候，隐藏掉它
    }

    //二级菜单
    $(function(){
        $(".menu1").mouseover(function(){
            $(this).children("ul").show();
        })
    })
    // 关键二：正确使用jQuey的语法完成行为。
    $(function(){
        $(".menu1").mouseout(function(){
            $(this).children("ul").hide();
        })
    })
    //返回顶部
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
    //更多模块弹出
    $(document).ready(function(){
        $("#hide").click(function(){
            $(".two").fadeOut("slow");
        });
        $(document).ready(function(){
            $("#more").click(function(){
                $(".two").fadeIn("slow");
            });
        });
    });
    $(document).ready(function(){
        $("#hide2").click(function(){
            $(".three").fadeOut("slow");
        });
        $(document).ready(function(){
            $("#more2").click(function(){
                $(".three").fadeIn("slow");
            });
        });
    });
    $(document).ready(function(){
        $("#hide3").click(function(){
            $(".fore").fadeOut("slow");
        });
        $(document).ready(function(){
            $("#more3").click(function(){
                $(".fore").fadeIn("slow");
            });
        });
    });
    $(document).ready(function(){
        $("#hide4").click(function(){
            $(".five").fadeOut("slow");
        });
        $(document).ready(function(){
            $("#more4").click(function(){
                $(".five").fadeIn("slow");
            });
        });
    });