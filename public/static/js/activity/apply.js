$(document).ready(function(){
        $('#a').hover(function() {
            $("#b").css('display', 'block');
        }, function() {
           $("#b").css('display', 'none');
        });

        $("#b").hover(function() {
           $(this).css('display', 'block');;
        }, function() {
           $(this).css('display', 'none');
        });
 });
 function btnAction() {
	var num = document.getElementById("num");
	num.value = parseInt(num.value) + 1;
};
function show() {
	var getNum = parseInt(document.getElementById("num").value);
	if(getNum > 0) {
		document.getElementById("num").value = getNum - 1;
	} else {
		alert("不可以小于0");
	};
	};
	function btnAction1() {
	var num1 = document.getElementById("num1");
	num1.value = parseInt(num1.value) + 1;
};
function show1() {
	var getNum1 = parseInt(document.getElementById("num1").value);
	if(getNum1 > 0) {
		document.getElementById("num1").value = getNum1 - 1;
	} else {
		alert("不可以小于0");
	};
	};
	$(function() {
					$('#myTab').tab('show');
				});
 