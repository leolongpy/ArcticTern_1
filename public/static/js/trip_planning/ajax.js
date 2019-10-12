var dataObj = {
    "cityName":"",
    "typeName":"",
    "nanduName":""
};

// TODO 1. 给所有的 a 标签绑定了单击事件
$('.sx-cs span a').click(function () {
    // TODO 2. 发送 ajax 请求，然后在 ajax 请求的回调函数里面，解析响应数据，最后进行 DOM 重绘操作

    // TODO 问题？请求的参数至少几个？ 3个参数 - cityName typeName tagName
    //

    var $this = $(this);
    var $value = $this.text();// 表示当前点击的那个 a 标签的文本值
    console.log($value);

    var $parent = $this.closest('p');

    // TODO 怎么依据一个分支条件？
    switch($parent.attr('data-gp')) {
        case "city_gp":
            dataObj.cityName = $value;
            break;
        case "type_gp":
            dataObj.typeName = $value;
            break;
        case "label_gp":
            dataObj.nanduName = $value;
            break;
    }

    $.ajax({
        type:"POST",
        url:"{:url('trip_planning/index/ajax')}",
        dataType:"JSON",
        data:"dataObj",

        erro:function () {

        },
        success:function(data){
            console.log(data)
            // 删除原有DOM，增加新的DOM
        }
    })
});