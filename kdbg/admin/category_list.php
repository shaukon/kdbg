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
                                        <li class="active">栏目管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加栏目" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '/admin/user/add.html'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th width="5%" class="text-center">ID</th>
                                <th>栏目名称</th>
                                <th width="15%" class="text-center">操作</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td align="center">6</td>
                                <td >test</td>
                                <td align="center">
                                    <a href="/admin/user/edit/id/6.html" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗', '/admin/user/del/id/6.html')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                                                        <tr>
                                <td align="center">7</td>
                                <td >aaaaaa</td>
                                <td align="center">
                                    <a href="/admin/user/edit/id/7.html" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗', '/admin/user/del/id/7.html')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                                                        <tr>
                                <td align="center">8</td>
                                <td >bbb</td>
                                <td align="center">
                                    <a href="/admin/user/edit/id/8.html" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗', '/admin/user/del/id/8.html')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                                                    </tbody>
                    </table>
                </div>
                <div>
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