<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\PHPTutorial\WWW\ArcticTern_1/application/login\view\index\login.html";i:1529540539;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/login/index.css">
</head>
<body>
<div class="container">
    <p>登&nbsp;&nbsp;录</p>
    <div class="content">
        <form action="" method="post">
            <input type="text"  class="name" name="name" placeholder="请输入用户名">
            <br>
            <input type="password"  class="password" name="password" placeholder="请输入密码">
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