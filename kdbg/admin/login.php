<?php
//引入数据库配置文件
require_once('../config.php');
//开启session
session_start();

//登录逻辑封装函数
function login(){
    //1.校验数据
    //2.持久化
    //3.响应请求
    if (empty($_POST['username'])){
        $GLOBALS['message'] = '请填写用户名';
        return;
    }
    if (empty($_POST['password'])){
        $GLOBALS['message'] = '请填写密码';
        return;
    }
    //连接数据库
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if (!$conn){
        echo '数据库连接失败，原因是：' . mysqli_connect_error();
    }


    //简单的登录逻辑
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn,"select * from kd_users where user_name='$username' limit 1");
    if (!$query){
        $GLOBALS['message'] = '登录失败';
        return;
    }
    $user = mysqli_fetch_assoc($query);
    if (!$user){
        $GLOBALS['message'] = '用户名和密码不匹配';
        return;
    }
    if ($password != $user['password']){
        $GLOBALS['message'] = '用户名和密码不匹配';
        return;
    }
    $_SESSION['current_login_user'] = $user;
    header('Location:./index.php');
}
//判断是否是post请求
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    login();
}

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>登录</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/assets/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/assets/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/assets/admin/style/beyond.css" rel="stylesheet">
    <link href="/static/assets/admin/style/demo.css" rel="stylesheet">
    <link href="/static/assets/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="./login.php" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center"><?php if (isset($message)){echo $message;}?></p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="/static/assets/admin/style/jquery.js"></script>
    <script src="/static/assets/admin/style/bootstrap.js"></script>
    <script src="/static/assets/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/assets/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>