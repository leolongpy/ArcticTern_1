/**
 * Created by liuzhaotai on 2018/6/22.
 */
    //���ֹ���
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
        //����͸���ȸı�Ĺ���ʱ��Ϊ0.3��
        var b= setTimeout("loading.style.opacity=0",4000)
        //0.5�����ض�����ʼ��Ϊ͸��
        var c= setTimeout("loading.style.display='none'",4500)
        //��͸����Ϊ0��ʱ�����ص���
    }

    //�����˵�
    $(function(){
        $(".menu1").mouseover(function(){
            $(this).children("ul").show();
        })
    })
    // �ؼ�������ȷʹ��jQuey���﷨�����Ϊ��
    $(function(){
        $(".menu1").mouseout(function(){
            $(this).children("ul").hide();
        })
    })
    //���ض���
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
    //����ģ�鵯��
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