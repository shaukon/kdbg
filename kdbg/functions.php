<?php
/**
 * Created by PhpStorm.
 * User: 52818
 * Date: 2019/9/19
 * Time: 13:25
 */
//������ں������棬���������ļ��������ٴο���session��
session_start();
//�������ݿ������ļ�
require_once("config.php");

function kd_check_login(){
    //�����Ƿ��¼�����û�е�¼����ת���ĵ�¼ҳ��
    if (empty($_SESSION['current_login_user'])){
        header('Location:./login.php');
    }
}

//������ӡ��޸ġ�ɾ��������װ
function kd_sql_execute($sql){
    //�������ݿ�����
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if (!$conn){
        $msg = '���ݿ�����ʧ�ܣ�����ԭ���ǣ�' . mysqli_connect_error();
        exit($msg);
    }
    mysqli_query($conn,"set names utf8");
    $query = mysqli_query($conn,$sql);
    if (!$query){
        //sqlִ��ʧ��
        return false;
    }

    //���ݿ���Ӱ������
    $affected_rows = mysqli_affected_rows($conn);
    mysqli_close($conn);
    return $affected_rows;
}

