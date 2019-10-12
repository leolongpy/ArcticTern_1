<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\PHPTutorial\WWW\ArcticTern_1/application/login\view\index\index.html";i:1529540539;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/login/index.css">
</head>
<body>
<div class="container">
    <p>注&nbsp;&nbsp;册</p>
    <div class="content">
        <form action="" method="post">
            <input type="text" class="name" name="name" placeholder="请输入用户名">
            <br>
            <input type="password" class="password" name="password" placeholder="请输入密码">
            <br>
            <input type="text" class="phone" name="phone" placeholder="请输入手机号">
            <br>
            <span>性别：</span>
            <input type="radio" name="sex" value="男" style="width: 85px;height: 24px">男
            <input type="radio" name="sex" value="女" style="width: 85px;height: 24px">女
            <br>
            <input type="text" class="address" name="address" placeholder="请输入地址">
            <br>
            <input type="email" class="email" name="email" placeholder="请输入邮箱">
            <br>
            <div class="cut">
                <a href="<?php echo url('login/index/login'); ?>">已有账号？点击登录</a>
            </div>
            <button name="button">注册</button>
        </form>
    </div>

</div>
<script>
</script>
</body>
</html>