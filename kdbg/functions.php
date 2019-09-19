<?php
/**
 * Created by PhpStorm.
 * User: 52818
 * Date: 2019/9/19
 * Time: 13:25
 */
//将其放在函数外面，方便引入文件，不用再次开启session。
session_start();
//引入数据库配置文件
require_once("config.php");

function kd_check_login(){
    //检验是否登录，如果没有登录，跳转到的登录页面
    if (empty($_SESSION['current_login_user'])){
        header('Location:./login.php');
    }
}

//数据添加、修改、删除操作封装
function kd_sql_execute($sql){
    //创建数据库连接
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if (!$conn){
        $msg = '数据库连接失败，出错原因是：' . mysqli_connect_error();
        exit($msg);
    }
    mysqli_query($conn,"set names utf8");
    $query = mysqli_query($conn,$sql);
    if (!$query){
        //sql执行失败
        return false;
    }

    //数据库受影响行数
    $affected_rows = mysqli_affected_rows($conn);
    mysqli_close($conn);
    return $affected_rows;
}

