$(document).ready(function() {
  
  var $wrapper = $('.tab-wrapper'),
      $allTabs = $wrapper.find('.tab-content > div'),
      $tabMenu = $wrapper.find('.tab-menu li'),
      $line = $('<div class="line"></div>').appendTo($tabMenu);
  
  $allTabs.not(':first-of-type').hide();  
  $tabMenu.filter(':first-of-type').find(':first').width('100%')
  
  $tabMenu.each(function(i) {
    $(this).attr('data-tab', 'tab'+i);
  });
  
  $allTabs.each(function(i) {
    $(this).attr('data-tab', 'tab'+i);
  });
  
  $tabMenu.on('click', function() {
    
    var dataTab = $(this).data('tab'),
        $getWrapper = $(this).closest($wrapper);
    
    $getWrapper.find($tabMenu).removeClass('active');
    $(this).addClass('active');
    
    $getWrapper.find('.line').width(0);
    $(this).find($line).animate({'width':'100%'}, 'fast');
    $getWrapper.find($allTabs).hide();
    $getWrapper.find($allTabs).filter('[data-tab='+dataTab+']').show();
  });

});//end ready

//        标签变色
$(function () {
    $("#list>li>a").on("click", function () {
        if ($(this).css("color") == "#ffffff") {
            $(this).css("background-color", "#f6f6f6").css("color", "#666666");
        } else {
            $(this).css("background-color", "#61bcba").css("color", "#ffffff");
        }


        $(this).parent().siblings().children().css("background-color", "#f6f6f6").css("color", "#666666");

    })
});

$(function () {
    $("#lise li a").on("click", function () {
        $("#lise li a").css("background-color", "#f6f6f6");
        $(this).css("background-color", "#61bcba");
    })
});
$(function () {
    $("#lise li a").on("click", function () {

        $("#lise li a").css("color", "#666666");
        $(this).css("color", "#ffffff");
    })
});
$(function () {
    $("#lisc li").on("click", function () {
        $("#lisc li").css("background-color", "#f6f6f6");
        $(this).css("background-color", "#61bcba");
    })
});
$(function () {
    $("#lisc li ").on("click", function () {
        $("#lisc li ").css("color", "#666666");
        $(this).css("color", "#ffffff");
    })
});
var last = null;
window.onload = function () {
    var a = document.getElementById("lisb").getElementsByTagName("li");
    for (i = 0, len = a.length; i < len; i++) {
        a[i].onclick = function () {
            if (last) {
                last.style.backgroundColor = "#ffffff"
            }
            this.style.backgroundColor = "#61bcba";
            last = this;
        }
    }
};
$(function () {
    $("#lisb li a").on("click", function () {
        $("#lisb li a ").css("color", "#666666");
        $(this).css("color", "#ffffff");
    })
});

//      切换页签
$('.cut_1').click(function () {
    $('.basic').show();
    $('.trajectory,.details,.photo').hide();
});
$('.cut_2').click(function () {
    $('.trajectory').show();
    $('.basic,.details,.photo').hide();
});
$('.cut_3').click(function () {
    $('.details').show();
    $('.basic,.trajectory,.photo').hide();
});
$('.cut_4').click(function () {
    $('.photo').show();
    $('.basic,.details,.trajectory').hide();
});

//      多选标签
$('#lisa>li>a').click(function (event) {
    if($(this).prev().prop('checked')==false){
        $(this).prev().prop('checked',true);
    }else {
        $(this).prev().prop('checked',false);

    }
    // $(this).prev().prop('checked',true);

    if (!$(this).hasClass('ashover') && $('.ashover').length < 13) {
        $(this).addClass('ashover');
        return false;
    }

    $(this).removeClass('ashover');
    return false;

});
$('#lisd>li>a').click(function (event) {
    if($(this).prev().prop('checked')==false){
        $(this).prev().prop('checked',true);
    }else {
        $(this).prev().prop('checked',false);

    }

    if (!$(this).hasClass('ashover') && $('.ashover').length < 13) {
        $(this).addClass('ashover');
        return false;
    }

    $(this).removeClass('ashover');
    return false;

});