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
        <div class="box round first grid">
            <h2>用户列表</h2>
            <div class="block">

                <div id="example_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="example_length">
                    <label>每页显示 <select size="1" name="example_length">
                        <option selected="selected" value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>
                        条数据</label></div><div id="example_filter" class="dataTables_filter"><label>搜索: <input type="text"></label></div><table class="data display datatable" id="example">
                    <thead>
                    <tr>
                        <th style="width: 339px;" colspan="1" rowspan="1" class="sorting_asc">用户名</th>
                        <th style="width: 419px;" colspan="1" rowspan="1" class="sorting">性别</th>
                        <th style="width: 394px;" colspan="1" rowspan="1" class="sorting">地区</th>
                        <th style="width: 285px;" colspan="1" rowspan="1" class="sorting">电子邮箱</th>
                        <th style="width: 205px;" colspan="1" rowspan="1" class="sorting">互动数</th></tr>
                    </thead>
                    <tbody><tr class="gradeA odd">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA even">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA odd">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA even">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA odd">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA even">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA odd">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA even">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA odd">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr><tr class="gradeA even">
                        <td class=" sorting_1">Gecko</td>
                        <td>男</td>
                        <td>广东珠海</td>
                        <td class="center">854543399@qq.com</td>
                        <td class="center">245</td>
                    </tr></tbody></table><div id="example_info" class="dataTables_info">显示 1 到 10 共 57 条数据</div><div id="example_paginate" class="dataTables_paginate paging_two_button"><div id="example_previous" title="Previous" class="paginate_disabled_previous"></div><div id="example_next" title="Next" class="paginate_enabled_next"></div></div></div>



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