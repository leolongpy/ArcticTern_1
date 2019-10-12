<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\xampp\htdocs\ArcticTern_1/application/login\view\index\login.html";i:1531966643;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/login/index.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
</head>
<body>
<div class="container">
    <p>登&nbsp;&nbsp;录</p>
    <div class="content">
        <form action="" method="post">
            <input type="text" class="name" name="name" maxlength="10" minlength="3" placeholder="请输入用户名">
            <br>
            <input type="password" class="password" name="password" placeholder="请输入密码" minlength="3">
            <br>
            <input type="text" class="password" name="yzm" placeholder="请输入验证码码">
            <br>
            <div><img src="<?php echo captcha_src(); ?>" alt="captcha"/></div>
            <br>
            <div class="cut">
                <a href="<?php echo url('login/index/index'); ?>">还没账号？点击注册</a>
            </div>
            <button name="button">登录</button>
        </form>
    </div>

</div>
<script>
</script>
</body>
</html>