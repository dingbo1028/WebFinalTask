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
                        <h2>我的博客 MY BLOG</h2>
                    </div>
                    <div class="one-third column-last">
                    </div>
                    <div class="clear"></div>
                </div><!--end title-content-->
            </div>
        </div><!--end title-wrapper-->
    </section>

    <div class="centered-wrapper">
        <section id="blog-page">
            <div id="posts">
                <!--大图-->
                <article class="post regular-article">
                    <div class="post-thumbnail">
                        <a href="#">
                            <span class="item-on-hover"><span class="hover-link"></span></span>
                            <img src="/0/1/Public/Home/images/blog/blog-image1.jpg" alt="" />
                        </a>
                    </div><!--end post-thumbnail-->
                    <div class="post-content">
						<span class="masonry-post-meta">
							13 June 2016 / <a href="#">看看电影</a> / <a href="#">425 评论</a>
						</span>
                        <i class="icon-pencil"></i>
                        <div class="clear"></div>
                        <h1><a href="#">意大利的光与暗</a></h1>

                        <p>古老的文化艺术城市。城区多广场，多文艺复兴时期的艺术珍藏和建筑古迹。有圣乔瓦尼巴蒂斯塔教堂、瓦尔登西安教堂等以及豪华的宫殿。沿波河左岸多公园。设有历史、艺术博物馆。还有创立于1405年的都灵大学、多所理工科高等院校和国家约瑟夫·弗迪音乐学院，以及现代科技研究实验中心。</p>
                        <a class="button red" href="<?php echo U('detail');?>">Read More</a>

                    </div><!--end post-content-->
                </article>
                <!--轮播-->
                <article class="post gallery-article">
                    <div class="post-thumbnail">
                        <div class="blog-slides">
                            <div class="slides_container">
                                <div class="slide">
                                    <a href="/0/1/Public/Home/images/blog/image-gallery1.jpg" rel="prettyPhoto[pp_gal]" title="Gallery Image 1"><img src="/0/1/Public/Home/images/blog/image-gallery1.jpg" width="695" height="400" alt="Slide 1"></a>
                                </div>
                                <div class="slide">
                                    <a href="/0/1/Public/Home/images/blog/image-gallery2.jpg" rel="prettyPhoto[pp_gal]" title="Gallery Image 2"><img src="/0/1/Public/Home/images/blog/image-gallery2.jpg" alt="Slide 2"></a>
                                </div>
                                <div class="slide">
                                    <a href="/0/1/Public/Home/images/blog/image-gallery3.jpg" rel="prettyPhoto[pp_gal]" title="Gallery Image 3"><img src="/0/1/Public/Home/images/blog/image-gallery3.jpg" alt="Slide 3"></a>
                                </div>
                            </div>
                            <a href="#" class="prev"><img src="/0/1/Public/Home/images/blog-arrow-prev.png" width="27" height="43" alt="Arrow Prev"></a>
                            <a href="#" class="next"><img src="/0/1/Public/Home/images/blog-arrow-next.png" width="27" height="43" alt="Arrow Next"></a>
                        </div><!--end slides-->
                    </div><!--end post-thumbnail-->
                    <div class="post-content">
						<span class="masonry-post-meta">
							13 June 2016 / <a href="#">吃好吃的</a> / <a href="#">425 评论</a>
						</span>
                        <i class="icon-pencil"></i>
                        <div class="clear"></div>
                        <h1><a href="#">如何让创造力起死回生</a></h1>

                        <p>这个时代的创造力死了么？这并不是一个很好回答的问题。单读用一本书去探讨这个问题，也不能说找到了答案。在越来越便捷的现代社会，真正的思考和创作到底在哪里？</p>
                        <p>19世纪高更、梵高的绘画、一战后的海明威、菲茨杰拉德、二战后法国的新浪潮电影……这些都是我们眼中的黄金时代的创作者。而我们生活的21世纪，技术的发展带来了前所未有的可能性，手机就可以创作影像，App就能录音，一台笔记本就可以写一段改变信息世界的代码，那么你呢？是否已经找到了改变世界的支点？</p>
                        <a class="button red" href="<?php echo U('detail');?>">Read More</a>

                    </div><!--end post-content-->
                </article>
                <!--短评-->
                <article class="post quote-article">
                    <div class="post-content">
						<span class="masonry-post-meta">
							13 June 2016 / <a href="#">逗你玩</a> / <a href="#">425 评论</a>
						</span>
                        <i class="icon-quote-left"></i>
                        <blockquote class="masonry-excerpt">历经中国传媒大学、北京大学两场宣讲之后，现在正式宣布，单读联合13家原创平台共同发起“我们的黄金时代”大型寻人计划。用一个月的时间去寻找年轻的创作者。如果你仍坚持创作，想要发出自己的声音，希望我们可以相遇。在一个“万象更新”的年代，这是建立属于我们自己的黄金时代的努力。</blockquote>
                        <h4 class="quote-author">- 落网</h4>

                    </div><!--end post-content-->
                </article>
                <!--音乐-->
                <article class="post music-article">
                    <div class="post-content">
						<span class="masonry-post-meta">
							13 June 2016 / <a href="#">听听音乐</a> / <a href="#">425 评论</a>
						</span>
                        <i class="icon-music"></i>
                        <div id="audio_jplayer" class="jp-jplayer"></div>
                        <div id="jp_container_1" class="jp-audio">
                            <div class="jp-type-single">
                                <div class="jp-gui jp-interface">
                                    <div class="jp-controls">
                                        <a href="javascript:;" class="jp-play" tabindex="1">play</a>
                                        <a href="javascript:;" class="jp-pause" tabindex="1">pause</a>
                                        <div class="jp-current-time"></div>
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div class="jp-play-bar"></div>
                                            </div>
                                        </div>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>

                                        <a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a>
                                        <a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a>
                                        <div class="jp-duration"></div>
                                    </div>
                                </div>
                                <div class="jp-no-solution">
                                    <span>Update Required</span>
                                    To play the media you will need to either update your browser to a recent version or update your <a href="../../../get.adobe.com/flashplayer/default.htm" target="_blank">Flash plugin</a>.
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <h1><a href="#">《OverWatch》原声——Nepal</a></h1>
                        <p>正在前往尼泊尔——你曾经告诉过我，谁都有一双不会飞的有意义的翅膀，因为那双翅膀，是你曾经在空中飞翔过的痕迹。晚风就那么温柔的拂过发丝，夕阳就那么不舍得离开大地。</p>
                        <a class="button red" href="<?php echo U('detail');?>">Read More</a>

                    </div><!--end post-content-->
                </article>
                <!--普通-->
                <article class="post regular-article">
                    <div class="post-thumbnail">
                        <a href="<?php echo U('detail');?>">
                            <span class="item-on-hover"><span class="hover-link"></span></span>
                            <img src="/0/1/Public/Home/images/blog/blog-image3.jpg" alt="" />
                        </a>
                    </div><!--end post-thumbnail-->
                    <div class="post-content">
						<span class="masonry-post-meta">
							10 June 2016 / <a href="#">玩</a> / <a href="<?php echo U('detail');?>">3 Comments</a>
						</span>
                        <i class="icon-pencil"></i>
                        <div class="clear"></div>
                        <h1><a href="<?php echo U('detail');?>">【直布罗陀】我们都是温斯顿</a></h1>

                        <p>对不起，我还是无法睡着，因为我在害怕，睁开眼睛后看到的是空荡荡的枕头，谁叫我不甘心，等到无法睁开眼睛了都要等。你曾经告诉过我，谁都有一双不会飞的有意义的翅膀，因为那双翅膀，是你曾经在空中飞翔过的痕迹。晚风就那么温柔的拂过发丝，夕阳就那么不舍得离开大地。曾近一度幻想拥有翅膀，就可以肆意离开家，就可以飞到繁星之中，找到最耀眼的那颗。关于我的属于你的一切，我会慢慢忘记，就像从来没有发生过，化成泡沫，消失在湛蓝的天空。</p>
                        <a class="button red" href="<?php echo U('detail');?>">Read More</a>

                    </div><!--end post-content-->
                </article>

                <div class="clear"></div>

                <div class="pagenav">
                    <span class="pages">Page 1 of 3</span>
                    <span class="current">1</span>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <a href="#" class="nextpostslink">&raquo;</a>
                </div>

            </div><!--end posts-->
        </section>

        <aside id="sidebar">
            <div class="widget recent-posts">
                <h3>最新发布</h3>
                <div class="sidebar-post">
                    <h5><a href="<?php echo U('detail');?>">【尼泊尔】探寻内心深处的那个禅亚塔</a></h5>
                    <span>13 July 2016 / <a href="#">5 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="<?php echo U('detail');?>">【直布罗陀】我们都是温斯顿</a></h5>
                    <span>13 July 2016 / <a href="#">22 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="<?php echo U('detail');?>">正在前往多拉多——人类最大的敌人是无序</a></h5>
                    <span>13 July 2016 / <a href="#">58 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="<?php echo U('detail');?>">编这些乱七八糟的东西真是好费脑细胞呢</a></h5>
                    <span>13 July 2016 / <a href="#">15 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="<?php echo U('detail');?>">人们按照自己的方式生活</a></h5>
                    <span>13 July 2016 / <a href="#">78 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="<?php echo U('detail');?>">乌托邦？</a></h5>
                    <span>13 July 2016 / <a href="#">还没有评论</a></span>
                </div><!--end sidebar-post-->
            </div>

            <div class="widget categories ">
                <h3>分类</h3>
                <ul>
                    <li><a href="#">逗你玩</a></li>
                    <li><a href="#">玩</a></li>
                    <li><a href="#">吃好吃的</a></li>
                    <li><a href="#">听听音乐</a></li>
                    <li><a href="#">看看电影</a></li>
                </ul>
            </div><!--end widget-->

            <div class="widget tags ">
                <h3>标签</h3>
                <ul>
                    <li><a href="#">CODING</a></li>
                    <li><a href="#">美食</a></li>
                    <li><a href="#">电影</a></li>
                    <li><a href="#">音乐</a></li>
                    <li><a href="#">摄影</a></li>
                    <li><a href="#">运动</a></li>
                    <li><a href="#">设计</a></li>
                </ul>
            </div><!--end widget-->

            <div class="widget flickr-widget">
                <h3></h3>
                <div id="flickr"></div>
            </div>
        </aside>

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
                    <h3>我们在社交</h3>
                    <ul>
                    <li>新浪 <a href="http://weibo.com/u/5255370930">幸福对我说要啥自行车</a></li>
                    <li>微信 <a href="">Lifestyle </a></li>
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