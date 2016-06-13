<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lifestyle—创造专属于你的生活方式</title>
    <!-- mobile meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- main style -->
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/style.css" media="screen" />
<!--弹性伸缩菜单
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/normalize.css" />-->

<!-- color scheme -->
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/red.css" media="screen" title="red" />
<!--miscellaneous-->
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/prettyPhoto.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/font-awesome.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/audioplayer.css" media="screen" />

<!-- revolution slider settings -->
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/rs-plugin/css/settings.css" media="screen" />

<!-- setting mobile environment -->
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/responsive.css" media="screen" />

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/font-awesome-ie7.min.css">
<![endif]-->
<!--jq-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery-1.8.3.min.js"></script>
<!--鼠标延时插件-->
<script type="text/javascript" src="/0/1/Public/Home/js/hoverIntent.js"></script>
<!--下拉菜单插件 延迟800ms-->
<script type="text/javascript" src="/0/1/Public/Home/js/superfish.js"></script>
<!--jq大图滚动浏览插件-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.jcarousel.js"></script>
<!--weeiter-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.tweet.js"></script>
<!--网络相册插件-->
<script type="text/javascript" src="/0/1/Public/Home/js/jflickrfeed.js"></script>
<!--图片浏览插件-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.prettyPhoto.js"></script>
<!--幻灯篇基础插件-->
<script type="text/javascript" src="/0/1/Public/Home/js/slides.min.jquery.js"></script>
<!--jq手机自适应菜单插件-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.mobilemenu.js"></script>
<!--不知道干什么的-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.contact.js"></script>
<!--大图插件-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.preloadify.min.js"></script>
<!--多媒体视频音频播放-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.jplayer.min.js"></script>
<!--图片筛选排版插件-->
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.isotope.min.js"></script>

<!-- jq轮播插件Revolution Slider -->
<script type="text/javascript" src="/0/1/Public/Home/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="/0/1/Public/Home/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!---->
<script type="text/javascript" src="/0/1/Public/Home/js/custom.js"></script>

<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/template-changer.css" media="screen"/>
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/0/1/Public/Home/js/styleswitch.js"></script>

<!-- Google Web Fonts -->
<link href='/0/1/Public/Home/google.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/0/1/Public/Home/js/jquery.wheelmenu.js"></script>
</head>
<body id="body">
<?php if(CONTROLLER_NAME == 'Index'): ?><script>
        document.getElementById('body').className='home';
    </script><?php endif; ?>

<div id="wrapper">
    <header id="header">
    <div class="centered-wrapper">
        <div class="one-third">
            <div class="logo"><a href="<?php echo U('Index/index');?>"></a></div>
        </div><!--end one-third-->

        <div class="two-third column-last">
            <nav id="navigation">
                <ul id="mainnav">
                    <li><a href="<?php echo U('index/index');?>"><span>首页 Home</span></a>
                    </li>
                    <li><a href="<?php echo U('Travel/index');?>"><span>旅行 Travel</span></a>
                    </li>
                    <li><a href="<?php echo U('Life/index');?>"><span>生活 Life</span></a>
                    </li>
                    <li><a href="<?php echo U('Digital/index');?>"><span>数码 Digital</span></a>
                    </li>
                    <li><a href="<?php echo U('Creative/index');?>"><span>创意 Creative</span></a>
                    </li>
                    <li><a href="<?php echo U('Share/index');?>"><span>分享 Share</span></a>
                    </li>
                </ul>
            </nav><!--end navigation-->
        </div><!--end two-third-->
        <div class="clear"></div>
    </div><!--end centered-wrapper-->
</header>
<div class="top-shadow"></div>
    

    <section class="page-title">
        <div class="page-background">
            <img src="/0/1/Public/Home/images/bg/title-bg1.jpg">
        </div>
        <div class="bottom-shadow"></div>
        <div class="title-wrapper">
            <div class="title-bg">
                <div class="title-content">
                    <div class="two-third">
                        <h2>设计说明</h2>
                    </div>
                    <div class="one-third column-last">
                    </div>
                    <div class="clear"></div>
                </div><!--end title-content-->
            </div>
        </div><!--end title-wrapper-->
    </section>
    <div class="centered-wrapper">
    <h6>jQuery插件说明</h6>
    <p>
        制作此网站，我使用了许多成熟的jQuery插件，这里列出，方便同学学习
    </p>
    </div>
    <div class="separator"></div>
    <div class="centered-wrapper">
        <div class="percent-one-third">
            <div class="service-item">
                <i class="icon-time"></i>
                <h3 class="service">HoverIntent 鼠标延迟</h3>
                <p class="clear">为了防止用户误操作，该插件将移动速度高于特定值的移动忽略，从而防止误操作。</p>
            </div>
        </div><!--end one-third-->

        <div class="percent-one-third">
            <div class="service-item">
                <i class="icon-check"></i>
                <h3 class="service">SuperFish 下拉菜单</h3>
                <p class="clear">一套成熟的下拉式导航菜单插件，自带延迟。</p>
            </div>
        </div><!--end one-third-->

        <div class="percent-one-third column-last">
            <div class="service-item">
                <i class="icon-envelope-alt"></i>
                <h3 class="service">Isotope 智能排版</h3>
                <p class="clear">对图片自动排版，可根据定义的数据值对网格进行重新排布。</p>
            </div>
        </div><!--end one-third-->

        <div class="space"></div>

        <div class="percent-one-third">
            <div class="service-item">
                <i class="icon-laptop"></i>
                <h3 class="service">MobileMenu 手机菜单</h3>
                <p class="clear">响应式布局，根据定义为网站添加下拉菜单式的导航栏</p>
            </div>
        </div><!--end one-third-->

        <div class="percent-one-third">
            <div class="service-item">
                <i class="icon-comments"></i>
                <h3 class="service">PrettyPhoto 点击看大图</h3>
                <p class="clear">JQ图片浏览插件，点击图片，展示大图，支持左右翻页，有优秀的外观！</p>
            </div>
        </div><!--end one-third-->

        <div class="percent-one-third column-last">
            <div class="service-item">
                <i class="icon-calendar"></i>
                <h3 class="service">Tweet 网格排版</h3>
                <p class="clear">对网页中的网格进行排序和重组，来源于Twitter公司</p>
            </div>
        </div><!--end one-third-->

        <div class="space"></div>

        <h3>技术参数:</h3>
        <div class="one-half">
            <ul class="customlist tick-list">
                <li>采用ThinkPHP 3.2.3 编写</li>
                <li>具有最低限度的交互功能</li>
                <li>富有创意的轮播图</li>
            </ul>
        </div>

        <div class="one-half column-last">
            <ul class="customlist tick-list">
                <li>源码公开，人人共享</li>
                <li>虽然可能页数不足，但是每页质量都很高@</li>
                <li>智能网格排版</li>
            </ul>
        </div>

        <div class="clear"></div>
    </div><!--end centered-wrapper-->

    <div class="space"></div>
<footer id="footer">
    <div class="centered-wrapper">
        <div id="topfooter">
            <div class="one-half">
                <h3>关于我们</h3>
                <p>我门存在于这个世界，为了更好的生活，我们渴望人们分享自己的生活方式，为了逼格和舒适！编不下去了就这样把。</p>
                <div class="footer-logo"></div>
            </div><!--end percent-one-half-->
            <div class="one-half column-last">
                <div class="percent-one-half">
                    <h3>我们在互联网</h3>
                    <ul>
                    <li>新浪微博 <a href="http://weibo.com/u/5255370930">幸福对我说要啥自行车</a></li>
                        <li>源码公开 <a href="<?php echo U('De/source');?>">从Github上获取源码 </a></li>
                        <li>设计说明 <a href="<?php echo U('De/index');?>">点这里查看设计资料 </a></li>
                    </ul>
                </div>

                <div class="percent-one-half column-last">
                    <h3>联系我们</h3>
                    <ul>
                        <li>地址:广东省珠海市金凤路18号 北京师范大学珠海分校</li>
                        <li>Phone: +86 137-2706-5748<br/>
                            E-mail: <a href="mailto:">db@db666.top</a></li>
                    </ul>
                </div><!--end one-half-->
            </div><!--end one-half-->
        </div><!--end topfooter-->
    </div><!--end centered-wrapper-->

    <div id="bottomfooter">
        <div class="centered-wrapper">
            <div class="one-half">
                <p>COPYRIGHT &copy; 2016 - Lifestyle | ALL RIGHTS RESERVED</p>
            </div><!--end one-half-->

            <div class="one-half column-last">
                <ul id="social">
                    <li><a class="rss" href="#">RSS Feed</a></li>
                    <li><a class="facebook" href="#">Facebook</a></li>
                    <li><a class="twitter" href="#">Twitter</a></li>
                    <li><a class="flickr" href="#">Flickr</a></li>
                    <li><a class="google" href="#">Google</a></li>
                    -->
                </ul>
            </div><!--end one-half-->
        </div><!--end centered-wrapper-->
    </div><!--end bottomfooter-->
</footer><!--end footer-->
</div>
<div id="menu" style="position: fixed; bottom: 2%;right: 2%; z-index: 999;">
    <script>
    $(document).ready(function(){
        $(".wheel-button").wheelmenu({
            trigger: "hover",
            animation: "fly",
            animationSpeed: "fast"
        });
    });

</script>

<style>
    .pointer {
        color: #34495e;
        font-family: 'Pacifico', cursive;
        font-size: 22px;
        margin-top: -15px;
    }

    .wheel-button, .wheel-button:visited {
        line-height: 35px;
        font-weight: bold;
        font-size: 36px;
        background: #df4727;
        padding: 10px 11px;
        text-align: center;
        border-radius: 50px;
        width: 35px;
        height: 35px;
        color: white;
        display: block;
        margin: 70px auto 20px;
        border: 0px solid #92311e;
        box-shadow: 0 1px 2px rgba(0,0,0,0.25);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.25);
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.25);
    }
    .loginbut {
        line-height: 35px;
        font-weight: bold;
        font-size: 36px;
        background: #df4727;
        padding: 10px 11px;
        text-align: center;
        border-radius: 50px;
        width: 35px;
        height: 35px;
        color: white;
        display: block;
        margin: 70px auto 20px;
        border: 0px solid #92311e;
        box-shadow: 0 1px 2px rgba(0,0,0,0.25);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.25);
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.25);
    }
    .wheel-button:hover{
        color: white;
    }

    .wheel-button.ne {
        border-color: white;
        background: #1ABC9C;
        color: #ffffff;
        position: absolute;
        bottom: 10px;
        left: 10px;
    }

    .wheel-button.nw {
        border-color: white;
        background-color: #E1472F;
        color: #ffffff;
        position: absolute;
        bottom: 10px;
        right: 10px;
    }

    .wheel-button span, .wheel span{
        position: relative;
        -moz-transition: all 1s ease;
        -webkit-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease;
        display: block;
    }

    .wheel-button.active span{
        transform: rotate(135deg);
        -ms-transform: rotate(135deg); /* IE 9 */
        -webkit-transform: rotate(135deg); /* Safari and Chrome */
    }

    .wheel li a, .wheel li a:visited{
        background: rgba(0, 0, 0, 0.75);
        border-radius: 50px;
        font-weight: bold;
        padding: 10px;
        text-align: center;
        width: 25px;
        height: 25px;
        border: 0px;
        /*box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 1px rgba(255,255,255,0.5);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 1px rgba(255,255,255,0.5);
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.25), inset 0 1px 1px rgba(255,255,255,0.5);*/
        color: white;
        -moz-transition: all 0.25s ease;
        -webkit-transition: all 0.25s ease;
        -o-transition: all 0.25s ease;
        transition: all 0.25s ease;
    }

    .wheel li a:hover{
        background: rgba(225, 72, 48, 1);
    }

    .main {
        float: left;
        width: 100%;
        margin: 0 auto;
    }

    .reload, .btn{
        display: inline-block;
        border: 4px solid #FFF;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        background: rgba(255,255,255, 0.75);
        display: inline-block;
        line-height: 100%;
        padding: 0.7em;
        text-decoration: none;
        opacity: 0.7;
        color: #555;
        width: 100px;
        line-height: 140%;
        font-size: 17px;
        font-family: open sans;
        font-weight: bold;
    }
    .reload:hover, .btn:hover {
        background: white;
    }
    .btn {
        width: 200px;
    }
    .btns {
        width: 230px;
        margin: 50px auto;
    }
    .credit {
        text-align: center;
        color: #999;
        padding: 10px;
        margin: 0 0 40px 0;
        background: rgba(255,255,255,0.25);
        float: left;
        width: 100%;
    }
    .credit a {
        color: #555;
        text-decoration: none;
        font-weight: bold;
    }
</style>

<link rel="stylesheet" type="text/css" href="/0/1/Public/Home/css/wheelmenu.css" />


<?php if($_SESSION['username'] == null): ?><a href="javascript:;" class="loginbut nw">
        <span><i class="icon-user"></i></span>
    </a>
    <?php else: ?>

    <a href="#wheel3" class="wheel-button nw">
        <span>+</span>
    </a>
    <ul id="wheel3" data-angle="NW" class="wheel">
        <li class="item"><a href="<?php echo U('User/gallery');?>"><i class="icon-camera-retro icon-large"></i></a></li>
        <li class="item"><a href="<?php echo U('User/myindex');?>"><i class="icon-user icon-large"></i></a></li>
        <li class="item"><a href="<?php echo U('User/myblog');?>"><i class=" icon-edit icon-large"></i></a></li>
        <li class="item"><a href="<?php echo U('User/logout');?>"><i class="icon-signout icon-large"></i></a></li>
    </ul><?php endif; ?>


<script>
    jQuery(document).ready(function($) {
        $('.loginbut').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-popover').slideDown(200);
        })
        $('.theme-poptit .close').click(function(){
            $('.theme-popover-mask').fadeOut(100);
            $('.theme-popover').slideUp(200);
        })

    })
</script>

<style>
    .clearfix:after, .central:after, .widget ul:after, .paging:after, .pagenav:after, .base-tit:after {
        content:".";
        display:block;
        height:0;
        clear:both;
        visibility:hidden
    }
    .clearfix, .central, .widget ul, .paging, .pagenav, .base-tit {
        height:1%;
    }
    body, button, input, select, textarea, code {
        font-size:12px;
        font-family:microsoft yahei;
        color: #444;
    }
    .theme-price dfn {
        font-style: normal;
        font-size: 18px;
        margin-right: 2px;
    }
    .theme-popover-mask {
        z-index: 9998;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:#000;
        opacity:0.4;
        filter:alpha(opacity=40);
        display:none
    }
    .theme-popover {
        z-index:99999;
        position:fixed;
        top:50%;
        left:50%;
        width:660px;
        height:360px;
        margin:-180px 0 0 -330px;
        border-radius:5px;
        border:solid 2px #666;
        background-color:#fff;
        display:none;
        box-shadow: 0 0 10px #666;
    }
    .theme-poptit {
        border-bottom:1px solid #ddd;
        padding:12px;
        position: relative;
    }
    .theme-popbod {
        padding:30px 15px;
        color:#444;
        height: 148px;
        text-align: center;
    }

    .theme-popbom a {
        margin-left:8px
    }
    .theme-poptit .close {
        float:right;
        color:#999;
        padding:5px;
        margin:-2px -5px -5px;
        font:bold 14px/14px simsun;
        text-shadow:0 1px 0 #ddd
    }

    .basiclogininput{
        margin-bottom: 10px;
        width: 60%;
        padding: 3% 5%;
        height: 10px;
        line-height: 20px;
        background: #f7f7f7;
    }

</style>
<div class="theme-popover">
    <div class="theme-poptit">
        <a href="javascript:;" title="关闭" class="close">×</a>
        <h3 style="margin-bottom: auto">登录 Lifestyle</h3>
    </div>
    <div class="theme-popbod dform">
        <form class="theme-signin" name="loginform" action="<?php echo U('User/login');?>" method="post">
            <table style="margin: auto;width: 75%">
                <tr style="height: 30px;">
                    <td>
                        <a>用户名</a>
                    </td>
                    <td style="width: 70%;">
                        <input id="name" name="name" type="text" class="basiclogininput"
                               style="margin-bottom: 10px;width: 60%;padding: 3% 5%;height: 15px;line-height: 20px;background: #f7f7f7;">
                    </td>
                </tr>
                <tr style="height: 80px;">
                    <td>
                        <a>密码</a>
                    </td>
                    <td style="width: 80%;">
                        <input id="pass" name="name" type="password" class="basiclogininput"
                               style="margin-bottom: 10px;width: 60%;padding: 3% 5%;height: 15px;line-height: 20px;background: #f7f7f7;">
                    </td>
                </tr>
                <tr style="height: 30px;">
                    <td colspan="2">
                        <input name="send" value="登录" id="submit" class="button red" type="submit">
                        还没有帐号？<a href="<?php echo U('User/reg');?>">点此注册</a>
                    </td>
                </tr>

            </table>



        </form>
    </div>
</div>
<div class="theme-popover-mask"></div>
</div>
</body>
</html>