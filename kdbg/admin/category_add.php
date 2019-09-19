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
                        <a href="#">栏目管理</a>
                    </li>
                                        <li class="active">添加栏目</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增栏目</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目名</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="username" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">上级栏目</label>
                            <div class="col-sm-6">
                                <select name="group_id" style="width: 100%;">
                                    <option selected="selected" value="8">顶级栏目</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="group_desc" class="col-sm-2 control-label no-padding-right">栏目描述</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="group_desc" id="group_desc" cols="30" rows="10"></textarea>
                            </div>
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