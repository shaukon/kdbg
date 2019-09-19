<?php
//引用公共函数文件
require_once('../functions.php');
//调用加检查登录的方法
kd_check_login();

//添加分类
function add_cate(){
    if (empty(trim($_POST['cate_name']))){
        $GLOBALS['message'] = '必填条件不能为空';
        return;
    }
    if (empty(trim($_POST['slug']))){
        $GLOBALS['message'] = '必填条件不能为空';
        return;
    }

    $cate_name = trim($_POST['cate_name']);
    $slug = trim($_POST['slug']);

    $sql = "insert into kd_category values (null,'{$cate_name}','{$slug}')";
    $rows = kd_sql_execute($sql);
    if ($rows >= 1){
        $GLOBALS['message'] = '添加数据成功';
    }else{
        $GLOBALS['message'] = '添加数据失败';
        return;
    }
}

//判断是否是POST方式提交
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    add_cate();
}


?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>康丁博客</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/assets/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/assets/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/static/assets/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/assets/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/assets/admin/style/demo.css" rel="stylesheet">
    <link href="/static/assets/admin/style/typicons.css" rel="stylesheet">
    <link href="/static/assets/admin/style/animate.css" rel="stylesheet">
    
</head>
<body>
<!-- 头部 -->
<!--include 加载即使加载的文件不存在，也不影响主页面-->
<?php include('./inc/navbar.php') ?>
<!-- /头部 -->


<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php $current_page = 'category_add'?>
        <?php include('./inc/sidebar.php') ?>
        <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="#">分类管理</a>
                    </li>
                                        <li class="active">添加分类</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增分类 <?php if (isset($message)) echo $message?></span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="./category_add.php" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">分类名</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="cate_name" placeholder="" name="cate_name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">别名</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="slug" placeholder="" name="slug" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="/static/assets/admin/style/jquery_002.js"></script>
    <script src="/static/assets/admin/style/bootstrap.js"></script>
    <script src="/static/assets/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/assets/admin/style/beyond.js"></script>
    


</body></html>