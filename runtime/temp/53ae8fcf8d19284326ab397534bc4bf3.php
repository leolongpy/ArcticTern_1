<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\xampp\htdocs\ArcticTern_1/application/login\view\index\index.html";i:1532931387;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">

    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/login/index.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
</head>
<body>
<div class="container" id="zhuce">
    <p>注&nbsp;&nbsp;册</p>
    <div class="content">
        <form action="" method="post">
            <input type="text" class="name" name="name" maxlength="10" minlength="3" placeholder="请输入用户名"
                   required="required">
            <br>
            <input type="password" class="password" name="password" placeholder="请输入密码" required="required"
                   minlength="3">
            <br>
            <input type="tel" class="phone" name="phone" placeholder="请输入手机号" required="required" maxlength="11"
                   minlength="11">
            <br>
            <span>性别：</span>
            <input type="radio" name="sex" value="男" style="width: 85px;height: 24px" required="required">男
            <input type="radio" name="sex" value="女" style="width: 85px;height: 24px" required="required">女
            <br>
            <input type="text" class="address" name="address" placeholder="请输入地址" required="required">
            <br>
            <input type="email" class="email" name="email" placeholder="请输入邮箱" required="required">
            <br>
            <div class="cut">
                <a class="zhuce" style="cursor: pointer">已有账号？点击登录</a>
            </div>
            <button name="button">注册</button>
        </form>
    </div>
</div>
<div class="container" id="denglu" style="display: none">
    <p>登&nbsp;&nbsp;录</p>
    <div class="content">
        <form action="" method="post">
            <input type="text" class="name" name="name" maxlength="10" minlength="3" placeholder="请输入用户名">
            <br>
            <input type="password" class="password" name="password" placeholder="请输入密码" minlength="3">
            <br>
            <input type="text" class="password" name="yzm" placeholder="请输入验证码">
            <br>
            <div><img src="<?php echo captcha_src(); ?>" id="verify_img" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>'"/></div>
            <br>
            <div class="cut">
                <a class="denglu" style="cursor: pointer">还没账号？点击注册</a>
            </div>
            <button name="button2">登录</button>
        </form>
    </div>
</div>
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js">
</script>
<script>
    $('.zhuce').click(function () {
        $('#denglu').show();
        $('#zhuce').hide();
    })
    $('.denglu').click(function () {
        $('#zhuce').show();
        $('#denglu').hide();
    })
</script>
</body>
</html>