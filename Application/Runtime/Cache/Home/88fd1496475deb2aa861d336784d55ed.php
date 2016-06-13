<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>窝窝</title>
<link href="/0/1/Public/Home/css/main.css" rel="stylesheet">
<link href="/0/1/Public/Home/css/pic.css" rel="stylesheet">
<link href="/0/1/Public/Home/css/index.css" rel="stylesheet">
<script src="/0/1/Public/Home/js/jquery-1.10.2.min.js"></script>
<script src="/0/1/Public/Home/js/slider.js"></script>
</head>
<body>
<header>
    <div class="top">
        <a class="logo">
            <span><img src="/0/1/Public/Home/images/logo.png"></span>窝窝
        </a>
        <div class="menu">
            <ul>
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Music/index');?>">音乐</a></li>
                <li><a href="<?php echo U('Book/index');?>">阅读</a></li>
                <li><a href="<?php echo U('Movie/index');?>">电影</a></li>
                <li><a href="<?php echo U('Column/index');?>">专栏</a></li>
            </ul>
        </div>

        <div style="float:left;">
            <form action="" id="headSearchForm">
                <input type="text" class="searchText" placeholder="输入搜索内容">

            </form>
        </div>
        <!-- logged-in-wrapper -->
        <div id="loggedInWrapper" style="display: none;"></div>
        <!-- logged-in-wrapper end-->

        <div class="top_login" onmousemove="show_login_box()" onmouseout=";">
            <a>注册</a>
            <a id="position0">|</a>
            <a>登录</a>
        </div>
        <!-- logged-out-wrapper -->
    </div>
</header>
<div id="login_box" onmouseover="show_login_box();" onmouseout="hide_login_box()" data-qtip-id="headLoginDialog" aria-hidden="false" aria-describedby="qtip-headLoginDialog-content"
     aria-atomic="false" aria-live="polite" role="alert" tracking="false"
     style="width: 235px; z-index: 15001; display: none; top: 48px;left:950px "
     class="qtip qtip-default qtip-luoo qtip-pos-tc qtip-focus" id="qtip-headLoginDialog">
    <div style="background-color: transparent ! important; border: 0px none ! important; width: 8px; height: 8px; line-height: 8px; left: 50%; margin-left: -4px; top: -8px;" class="qtip-tip">
        <canvas height="8" width="8" style="background-color: transparent ! important; border: 0px none ! important; width: 8px; height: 8px;"></canvas>
    </div>
    <div aria-atomic="true" id="qtip-headLoginDialog-content" class="qtip-content">
        <div class="dialog-passport">
            <div class="dialog-head">
		        <span class="title">
		        	登录
		        </span>
                <a href="<?php echo U('User/reg');?>" rel="nofollow" class="ln-reg btn-dialog-register" data-tipid="registerDialog"  data-width="235">
                    注册
                </a>
                <span class="fright">没有账号？</span>
            </div>
            <form class="form-ajax" action="http://www.luoo.net/login/" callback="login_cback">
                <div class="inline-input">
                    <span class="label">邮箱</span>
                    <input class="input-passport input_def" name="name" required="" type="text">
                </div>
                <div class="inline-input">
                    <span class="label">密码</span>
                    <input class="input-passport input_def" name="password" required="" type="password">
                </div>
                <div class="btn-wrapper">
                    <a href="javascript:;" class="btn btn-positive btn-login-submit rounded" rel="nofollow">
                        登录
                    </a>
		        	<span class="btn btn-positive btn-login-msg rounded" style="display:none;">
		        		提示
		        	</span>
                </div>
                <div class="clearfix">
                    <label><input name="remember" type="checkbox"> 下次自动登录</label>
                    <a href="http://www.luoo.net/login/forgot" rel="nofollow" class="ln-resetpwd">找回密码</a>
                </div>
            </form>
        </div>
        <div class="dialog-login-oauth">
            <div class="platforms">
                <a href="http://www.luoo.net/login/oauth/site/weibo" class="icon-open-weibo" rel="nofollow"></a>
                <a href="http://www.luoo.net/login/oauth/site/douban" class="icon-open-douban" rel="nofollow">
                </a>
                <a href="http://www.luoo.net/login/oauth/site/qq" class="icon-open-qq" rel="nofollow"></a>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload=function(){
        var odiv=document.getElementById('position0');
        document.getElementById("login_box").style.left=(odiv.getBoundingClientRect().left-114)+"px";
    };
    var isshow=0;
    function show_login_box(){
        if(isshow==0){
            document.getElementById("login_box").style.display="block";
            isshow=1;
        }
    }
    function hide_login_box() {
        if(isshow==1){
            document.getElementById("login_box").style.display="none";
            isshow=0;
        }
    }

</script>

<main>
    <div style="min-height: 523px;" class="container index-ct">
        
    <main>
        阅读

    </main>
    <script type="text/javascript">
        $(function() {
            var bannerSlider = new Slider($('#banner_tabs'), {
                time: 5000,
                delay: 400,
                event: 'hover',
                auto: true,
                mode: 'fade',
                controller: $('#bannerCtrl'),
                activeControllerCls: 'active'
            });
            $('#banner_tabs .flex-prev').click(function() {
                bannerSlider.prev()
            });
            $('#banner_tabs .flex-next').click(function() {
                bannerSlider.next()
            });
        })
    </script>

    </div>
</main>
<footer>
    <div class="foot-ct clearfix">
        <div class="about-wrapper">
            <h4 class="foot-item-head">关于</h4>
            <p><a class="ln-about" href="">关于我们</a></p>
            <p><a class="ln-about" href="">加入我们</a></p>
            <p><a class="ln-about" href="">联系合作</a></p>
            <p><a class="ln-about" href="" id="feedback">反馈建议</a></p>
            <p><a class="ln-about" href="">友情链接</a></p>
        </div>
        <div class="app-wrapper">
            <h4 class="foot-item-head">APP</h4>
            <p>
                <a class="ln-app" href="">for iPhone</a>
            </p>
            <p><a class="ln-app" href="">for Android</a></p>
            <p><a class="ln-app" href="">for Windows Phone 8</a></p>
        </div>
        <div class="sns-wrapper">
            <h4 class="foot-item-head">关注我们</h4>
            <div class="sns-items">

            </div>
            <p class="icp">© 2016 **</p>
            <p class="slogan">
                <span class="icon-slogan"></span>
            </p>
        </div>
    </div>
</footer>
</body>
</html>