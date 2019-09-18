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
<?php include('./navbar.php')?>
<!-- /头部 -->


<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php include('./sidebar.php')?>
        <!-- /Page Sidebar -->

        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li class="active">控制面板</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div style="text-align:center; line-height:1000%; font-size:24px;">
                    PHP7实战开发方糖博客<br /><p style="color:#f00;">QQ交流群：812630653</p></div>
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