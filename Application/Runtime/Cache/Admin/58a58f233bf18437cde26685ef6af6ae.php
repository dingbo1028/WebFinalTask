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
<script src="/0/1/Public/Admin/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
<!-- END: load jquery -->
<!-- BEGIN: load jqplot -->
<link rel="stylesheet" type="text/css" href="/0/1/Public/Admin/css/jquery.jqplot.min.css" />
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/excanvas.min.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/jquery.jqplot.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.highlighter.min.js"></script>
<script language="javascript" type="text/javascript" src="/0/1/Public/Admin/js/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
<!-- END: load jqplot -->
<script src="/0/1/Public/Admin/js/popup/jquery.facebox.js" type="text/javascript"></script>
<script src="/0/1/Public/Admin/js/quick-sand/jquery.quicksand.js" type="text/javascript"></script>



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
        <li class="ic-dashboard"><a href="<?php echo U('index');?>"><span>站点概述</span></a> </li>
        <li class="ic-form-style"><a href="javascript:"><span>文章管理</span></a>
            <ul>
                <li><a href="<?php echo U('doclist');?>">文章列表</a> </li>
                <li><a href="#">垃圾箱</a> </li>
            </ul>
        </li>

        <li class="ic-charts"><a href="javascript:"><span>会员管理</span></a>
            <ul>
                <li><a href="<?php echo U('userlist');?>">会员列表</a> </li>
                <li><a href="#">封禁信息</a> </li>
                <li><a href="#">实名审核</a> </li>
            </ul>
        </li>
        <li class="ic-grid-tables"><a href="#"><span>数据中心</span></a></li>
        <li class="ic-gallery dd"><a href="<?php echo U('imagelist');?>"><span>图片中心</span></a></li>
        <li class="ic-notifications"><a href="#"><span>站点信息</span></a></li>

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
    
    <div class="grid_10">
        <div class="box round first">

            <h2>Gallery</h2>
            <div class="block">
                <div class="gallery-sand">
                    <div class="filter-options">
                        <!-- Big Gallery Sorting: Start -->
                        <ul class="sorting">
                            <li><a href="#" data-type="all" class="active">Show All</a></li>
                            <li><a class="" href="#" data-type="buildings">Buildings</a></li>
                            <li><a class="" href="#" data-type="streets">Streets</a></li>
                            <li><a class="" href="#" data-type="nature">Nature</a></li>
                            <li><a class="" href="#" data-type="clothing">Clothing</a></li>
                        </ul>
                    </div>
                    <!-- Big Gallery Sorting: End -->
                    <!-- Small Gallery Content: Start -->
                    <div class="filter-results">
                        <ul style="height: 391px;" class="gallery small"><li data-type="buildings" data-id="g001">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_01.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_01.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_01.png" alt="">
                            </a></li><li data-type="nature" data-id="g002">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_02.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_02.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_02.png" alt="">
                            </a></li><li data-type="buildings" data-id="g003">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_03.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_03.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_03.png" alt="">
                            </a></li><li data-type="streets" data-id="g004">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_04.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_04.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_04.png" alt="">
                            </a></li><li data-type="streets" data-id="g005">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_05.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_05.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_05.png" alt="">
                            </a></li><li data-type="nature" data-id="g006">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_06.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_06.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_06.png" alt="">
                            </a></li><li data-type="nature" data-id="g007">
                            <div style="display: none;" class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_07.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_07.jpg" class="popup">
                                <img style="opacity: 1;" src="/0/1/Public/Admin/img/gallery/thumbs_small/image_07.png" alt="">
                            </a></li><li data-type="buildings" data-id="g008">
                            <div style="display: none;" class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_08.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_08.jpg" class="popup">
                                <img style="opacity: 1;" src="/0/1/Public/Admin/img/gallery/thumbs_small/image_08.png" alt="">
                            </a></li><li data-type="streets" data-id="g009">
                            <div style="display: none;" class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_09.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_09.jpg" class="popup">
                                <img style="opacity: 1;" src="/0/1/Public/Admin/img/gallery/thumbs_small/image_09.png" alt="">
                            </a></li><li data-type="buildings" data-id="g010">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_10.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_10.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_10.png" alt="">
                            </a></li><li data-type="nature" data-id="g0011">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_11.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_11.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_11.png" alt="">
                            </a></li><li data-type="nature" data-id="g012">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_12.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_12.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_12.png" alt="">
                            </a></li><li data-type="buildings" data-id="g013">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_13.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_13.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_13.png" alt="">
                            </a></li><li data-type="streets" data-id="g014">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_14.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_14.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_14.png" alt="">
                            </a></li><li data-type="nature" data-id="g015">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_15.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_15.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_15.png" alt="">
                            </a></li><li data-type="streets" data-id="g016">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_16.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_16.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_16.png" alt="">
                            </a></li><li data-type="buildings" data-id="g017">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_17.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_17.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_17.png" alt="">
                            </a></li><li data-type="streets" data-id="g018">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_18.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_18.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_18.png" alt="">
                            </a></li><li data-type="buildings" data-id="g019">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_19.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_19.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_19.png" alt="">
                            </a></li><li data-type="streets" data-id="g020">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_20.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_20.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_20.png" alt="">
                            </a></li><li data-type="nature" data-id="g021">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_21.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_21.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_21.png" alt="">
                            </a></li><li data-type="nature" data-id="g022">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_22.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_22.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_22.png" alt="">
                            </a></li><li data-type="buildings" data-id="g023">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_23.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_23.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_23.png" alt="">
                            </a></li><li data-type="clothing" data-id="g024">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_24.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_24.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_24.png" alt="">
                            </a></li><li data-type="clothing" data-id="g025">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_25.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_25.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_25.png" alt="">
                            </a></li><li data-type="clothing" data-id="g026">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_26.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_26.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_26.png" alt="">
                            </a></li><li data-type="clothing" data-id="g027">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_27.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_27.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_27.png" alt="">
                            </a></li><li data-type="streets" data-id="g028">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_28.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_28.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_28.png" alt="">
                            </a></li><li data-type="streets" data-id="g029">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_29.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_29.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_29.png" alt="">
                            </a></li><li data-type="buildings" data-id="g030">
                            <div class="actions">
                                <a href="#" class="delete">delete</a> <a href="#" class="edit">edit</a> <a href="/0/1/Public/Admin/img/gallery/image_30.jpg" class="view popup">view</a>
                            </div>
                            <a href="/0/1/Public/Admin/img/gallery/image_30.jpg" class="popup">
                                <img src="/0/1/Public/Admin/img/gallery/thumbs_small/image_30.png" alt="">
                            </a></li>
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                            <!-- Small Gallery Image: Start -->

                            <!-- Small Gallery Image: End -->
                        </ul>
                    </div>
                    <!-- Small Gallery Content: End -->
                </div>
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