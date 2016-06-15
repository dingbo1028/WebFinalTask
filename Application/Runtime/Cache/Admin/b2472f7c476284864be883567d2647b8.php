<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>后台管理系统 | Lifestyle</title>
<link rel="stylesheet" type="text/css" href="/0/1/Public/Admin/css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/0/1/Public/Admin/css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/0/1/Public/Admin/css/grid.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/0/1/Public/Admin/css/layout.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/0/1/Public/Admin/css/nav.css" media="screen" />

<!-- BEGIN: load jquery -->
<script src="/0/1/Public/Admin/js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/0/1/Public/Admin/js/jquery-ui/jquery.ui.core.min.js"></script>
<script src="/0/1/Public/Admin/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
<script src="/0/1/Public/Admin/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
<script src="/0/1/Public/Admin/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
<script src="/0/1/Public/Admin/s/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
<!-- END: load jquery -->
<!-- BEGIN: load jqplot -->
<link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/excanvas.min.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/jquery.jqplot.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
<!-- END: load jqplot -->
<script src="/0/1/Public/Admin/js/setup.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function () {
        setupDashboardChart('chart1');
        setupLeftMenu();
        setSidebarHeight();


    });
</script>
</head>
<body id="body">
<div  class="container_12">
    <div class="grid_12 header-repeat">
    <div id="branding">
        <div class="floatleft">
            <img src="/0/1/Public/Admin/img/logo_g_s.png" alt="Logo" />
            <a style="font-size: 30px;">后台管理系统</a>
        </div>
        <div class="floatright">
            <div class="floatleft">
                <img src="/0/1/Public/Admin/img/img-profile.jpg" alt="Profile Pic" /></div>
            <div class="floatleft marginleft10">
                <ul class="inline-ul floatleft">
                    <li>欢迎你： 丁波</li>
                    <li><a href="<?php echo U('pass');?>">帐号设置</a></li>
                    <li><a href="<?php echo U('logout');?>">退出登录</a></li>
                </ul>
                <br />
                <span class="small grey">上次登录: 3 小时之前</span>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<div class="clear">
</div>
<div class="grid_12">
    <ul class="nav main">
        <li class="ic-dashboard"><a href="dashboard.html"><span>站点概述</span></a> </li>
        <li class="ic-form-style"><a href="javascript:"><span>文章管理</span></a>
            <ul>
                <li><a href="form-controls.html">文章列表</a> </li>
                <li><a href="buttons.html">垃圾箱</a> </li>
            </ul>
        </li>

        <li class="ic-charts"><a href="charts.html"><span>会员管理</span></a>
            <ul>
                <li><a href="form-controls.html">会员列表</a> </li>
                <li><a href="buttons.html">封禁信息</a> </li>
                <li><a href="buttons.html">实名审核</a> </li>
            </ul>
        </li>
        <li class="ic-grid-tables"><a href="table.html"><span>数据中心</span></a></li>
        <li class="ic-gallery dd"><a href="image-gallery.html"><span>图片中心</span></a></li>
        <li class="ic-notifications"><a href="notifications.html"><span>站点信息</span></a></li>

    </ul>
</div>
<div class="clear">
</div>
<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
                <li><a class="menuitem">快捷操作</a>
                    <ul class="submenu">
                        <li><a href="<?php echo U('doclist');?>">文章列表</a> </li>
                        <li><a href="<?php echo U('newdoc');?>">添加文章</a> </li>
                        <li><a href="<?php echo U('userlist');?>">会员列表</a> </li>
                        <li><a href="<?php echo U('imagelist');?>">图片管理</a> </li>
                        <li><a href="<?php echo U('typelist');?>">栏目管理</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">系统设置</a>
                    <ul class="submenu">
                        <li><a href="<?php echo U('set');?>">站点设置</a> </li>
                        <li><a href="<?php echo U('pass');?>">帐号设置</a> </li>
                        <li><a>管理员设置</a> </li>
                        <li><a>权限管理</a> </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
    



    <div class="clear">
</div>
<div id="site_info">
    <p>
        COPYRIGHT &copy; 2016 - Lifestyle | ALL RIGHTS RESERVED
    </p>
</div>
</div>

</body>
</html>