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
    

    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>


                <li data-transition="fade" data-slotamount="15" data-masterspeed="300">
                    <img src="/0/1/Public/Home/images/slides/index_3.jpg" alt="" />
                </li>

                <!-- THE FIRST SLIDE -->
                <li data-transition="slidedown" data-slotamount="15" data-masterspeed="300">
                    <img src="/0/1/Public/Home/images/slides/index_5.jpg" alt="" />

                    <div class="caption box-slide1 lfl ltl"
                         data-x="0"
                         data-y="150"
                         data-speed="300"
                         data-start="1000"
                         data-easing="easeOutExpo">
                        <h2>HEY THERE!<br/>我的大作业终于做完啦！</h2>
                        <p>哈哈WEB大作业真的不好做呢，但是终于做完啦哈哈哈哈哈，很艰难啊！</p>
                    </div>
                </li>






                <!-- THE SECOND SLIDE -->
                <li data-transition="fade" data-slotamount="15" data-masterspeed="300">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img src="/0/1/Public/Home/images/slides/index_2.jpg" alt="" />

                    <!-- THE CAPTIONS IN THIS SLDIE -->
                    <div class="caption box-slide2 lft ltt"
                         data-x="770"
                         data-y="110"
                         data-speed="300"
                         data-start="500"
                         data-easing="easeOutExpo">
                        <h2>源码公开哦</h2>
                        <p>这次的大作业花费了我很大的心血，但是本着互相学习的态度，我将我的源码放在了GitHub上供大家免费下载和学习</p>
                        <a class="button red" href="https://github.com/dingbo1028/WebFinalTask" target="_blank">点这里去 GitHub</a>
                    </div>
                </li>

                <!-- THE THIRD SLIDE -->
                <li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-link="<?php echo U('Share/detail');?>">
                    <img src="/0/1/Public/Home/images/slides/index_1.jpg" alt="" />
                </li>





                <!-- THE FIFTH SLIDE -->
                <li data-transition="slideright" data-slotamount="15" data-masterspeed="300">
                    <img src="/0/1/Public/Home/images/slides/index_4.jpg" alt="" />

                    <div class="caption title_text lfl stl"
                         data-x="80"
                         data-y="250"
                         data-speed="300"
                         data-start="1000"
                         data-easing="easeOutExpo">生活不易</div>

                    <div class="caption description_text lfl stl"
                         data-x="80"
                         data-y="292"
                         data-speed="300"
                         data-start="1300"
                         data-easing="easeOutExpo">且装逼且珍惜！</div>
                </li>





                <!-- THE SIX SLIDE -->




            </ul>
            <!--enable slider timer
                <div class="tp-bannertimer"></div>
            -->
        </div>
        <div class="bottom-shadow" style="display: block;"></div>
    </div><!--end slider-->


    <div class="centered-wrapper">

        <section class="intro">
            <h2>让更多的人发现生活从而热爱生活</h2>
            <h5>我们致力于让每个人都找到适合自己的生活方式，<a href="#">点这里从分享你的生活开始</a></h5>
        </section>


        <section class="homeblock">
                <div class="half-space"></div>
                <h1 class="onepage-title">热门文章</h1>
            <ul id="portfolio-carousel">
                <li>
                    <a href="/0/1/Public/Home/images/index/1.jpg" rel="prettyPhoto[pp_gal]" title="黑夜里发光的人">
                        <span class="item-on-hover"><span class="hover-image"></span></span>
                        <img src="/0/1/Public/Home/images/index/1.jpg" alt=" " />
                    </a>
                    <div class="portfolio-carousel-details">
                        <h3><a href="<?php echo U('Share/detail');?>">黑夜里发光的人</a></h3>
                        <span>黑夜里黑夜里发光发光啊的人人人哈哈</span>
                    </div>
                </li>

                <li>
                    <a href="/0/1/Public/Home/images/index/2.jpg" rel="prettyPhoto[pp_gal]" title="日本富士音乐节巡礼">
                        <span class="item-on-hover"><span class="hover-image"></span></span>
                        <img src="/0/1/Public/Home/images/index/2.jpg" alt=" " />
                    </a>
                    <div class="portfolio-carousel-details">
                        <h3><a href="<?php echo U('Share/detail');?>">日本富士音乐节巡礼</a></h3>
                        <span>日本富士音乐节哈哈</span>
                    </div>
                </li>

                <li>
                    <a href="/0/1/Public/Home/images/index/3.jpg" rel="prettyPhoto[pp_gal]" title="提琴后摇的五重色彩">
                        <span class="item-on-hover"><span class="hover-image"></span></span>
                        <img src="/0/1/Public/Home/images/index/3.jpg" alt=" " />
                    </a>
                    <div class="portfolio-carousel-details">
                        <h3><a href="<?php echo U('Share/detail');?>">提琴后摇的五重色彩</a></h3>
                        <span>好困啊啊啊啊</span>
                    </div>
                </li>

                <li>
                    <a href="/0/1/Public/Home/images/index/4.jpg" rel="prettyPhoto[pp_gal]" title="Hello Nico：在歌声里起舞">
                        <span class="item-on-hover"><span class="hover-image"></span></span>
                        <img src="/0/1/Public/Home/images/index/4.jpg" alt=" " />
                    </a>
                    <div class="portfolio-carousel-details">
                        <h3><a href="<?php echo U('Share/detail');?>">Hello Nico：在歌声里起舞</a></h3>
                        <span>在歌声里起舞飞呀飞呀飞走了</span>
                    </div>
                </li>

                <li>
                    <a href="/0/1/Public/Home/images/index/5.jpg" rel="prettyPhoto[pp_gal]" title="​幻视幻听的靡靡之音">
                        <span class="item-on-hover"><span class="hover-image"></span></span>
                        <img src="/0/1/Public/Home/images/index/5.jpg" alt=" " />
                    </a>
                    <div class="portfolio-carousel-details">
                        <h3><a href="<?php echo U('Share/detail');?>">​幻视幻听的靡靡之音</a></h3>
                        <span>没有守望玩我要死了</span>
                    </div>
                </li>

                <li>
                    <a href="/0/1/Public/Home/images/index/6.jpg" rel="prettyPhoto[pp_gal]" title="关于“爱情”，阿肆有话要说">
                        <span class="item-on-hover"><span class="hover-image"></span></span>
                        <img src="/0/1/Public/Home/images/index/6.jpg" alt=" " />
                    </a>
                    <div class="portfolio-carousel-details">
                        <h3><a href="<?php echo U('Share/detail');?>">关于“爱情”，阿肆有话要说</a></h3>
                        <span>真是在IMBA了</span>
                    </div>
                </li>
            </ul>
        </section>
        <div class="space"></div>
        <section class="homeblock">
            <div class="half-space"></div>
            <h1 class="onepage-title">牛逼闪闪</h1>
            <section class="homepage-grid">
                <div class="bgtitle"><h2>选择分类</h2></div>
                <section id="options">
                    <ul id="home-filters" class="option-set clearfix" data-option-key="filter">
                        <li><a href="#filter" data-option-value="*" class="selected active">All</a></li>
                        <li><a href="#filter" data-option-value=".marketing">逼格</a></li>
                        <li><a href="#filter" data-option-value=".photography">创意</a></li>
                        <li><a href="#filter" data-option-value=".branding">装逼必备</a></li>
                        <li><a href="#filter" data-option-value=".print">6666666</a></li>
                        <li><a href="#filter" data-option-value=".webdesign">技能</a></li>
                    </ul>
                </section>

                <section id="portfolio-wrapper">
                    <ul class="portfolio grid ">
                        <li data-category="marketing" class="print photography item-wide">
                            <a href="http://vimeo.com/7449107" rel="prettyPhoto">
                                <div class="grid-item-on-hover">
                                    <div class="grid-text">
                                        <h1>Lorem Ipsum Dolor Sit Amet Consectetur</h1>
                                    </div>
                                    <span>photography, printing identity</span>

                                </div>
                                <img src="/0/1/Public/Home/images/portfolio/image5-small.jpg" alt=" " />
                            </a>
                        </li>
                        <li data-category="branding" class="branding print item-small">
                            <a href="/0/1/Public/Home/images/portfolio/image1.jpg" rel="prettyPhoto">
                                <div class="grid-item-on-hover">
                                    <div class="grid-text">
                                        <h1>Cervejaria Republica Project</h1>
                                    </div>
                                    <span>printing identity, branding</span>
                                </div>
                                <img src="/0/1/Public/Home/images/portfolio/image1-small.jpg" alt=" " />
                            </a>
                        </li>
                        <li data-category="marketing" class="marketing webdesign item-high">
                            <a href="/0/1/Public/Home/images/portfolio/image3.jpg" rel="prettyPhoto">
                                <div class="grid-item-on-hover">
                                    <div class="grid-text">
                                        <h1>Lorem Ipsum Dolor Sit Amet</h1>
                                    </div>
                                    <span>business cards</span>
                                </div>
                                <img src="/0/1/Public/Home/images/portfolio/image3-small-high.jpg" alt=" " />
                            </a>
                        </li>
                        <li data-category="media" class="marketing branding item-small">
                            <a href="/0/1/Public/Home/images/portfolio/image8.jpg" rel="prettyPhoto">
                                <div class="grid-item-on-hover">
                                    <div class="grid-text">
                                        <h1>Adidas Store</h1>
                                    </div>
                                    <span>retail, marketing</span>
                                </div>
                                <img src="/0/1/Public/Home/images/portfolio/image8-small.jpg" alt=" " />
                            </a>
                        </li>
                        <li data-category="retail" class="webdesign marketing print item-small">
                            <a href="<?php echo U('Share/detail');?>">
                                <div class="grid-item-on-hover">
                                    <div class="grid-text">
                                        <h1>Website Redesign</h1>
                                    </div>
                                    <span>web design</span>
                                </div>
                                <img src="/0/1/Public/Home/images/portfolio/image2-small.jpg" alt=" " />
                            </a>
                        </li>
                        <li data-category="retail" class="photography item-small">
                            <a href="/0/1/Public/Home/images/portfolio/image6.jpg" rel="prettyPhoto">
                                <div class="grid-item-on-hover">
                                    <div class="grid-text">
                                        <h1>Grayscale Shooting Session </h1>
                                    </div>
                                    <span>photography</span>
                                </div>
                                <img src="/0/1/Public/Home/images/portfolio/image6-small.jpg" alt=" " />
                            </a>
                        </li>
                        <li data-category="marketing" class="marketing print branding item-long">
                            <a href="/0/1/Public/Home/images/portfolio/image7.jpg" rel="prettyPhoto">
                                <div class="grid-item-on-hover">
                                    <div class="grid-text">
                                        <h1>Carlito`s Bar </h1>
                                    </div>
                                    <span>branding, business cards</span>
                                </div>
                                <img src="/0/1/Public/Home/images/portfolio/image7-small-long.jpg" alt=" " />
                            </a>
                        </li>
                    </ul>
                </section>
            </section><!--end home-grid-->
        </section>
        <div class="space"></div>
        <section class="homeblock">
            <div class="half-space"></div>
            <h1 class="onepage-title">热门分享</h1>
            <ul id="homeblog-carousel">
                <li>
                    <a href="<?php echo U('Share/detail');?>">
                        <span class="item-on-hover"></span>
                        <img src="/0/1/Public/Home/images/share/1.jpg" alt="LOREM IPSUM DOLOR SIT AMET" />
                    </a>
                    <div class="blog-carousel-details">
                        <h2><a href="<?php echo U('Share/detail');?>">编这些乱七八糟的东西真是好费脑细胞呢</a></h2>
                        <div class="carousel-meta">
                            <span class="post-format"><i class="icon-pencil"></i></span><span class="details">May 18, 2016 / <a href="#">3 评论</a></span>
                        </div>
                        <p>关于我的属于你的一切，我会慢慢忘记，就像从来没有发生过，化成泡沫，消失在湛蓝的天空;关于你的属于我的一切，我会慢慢藏匿，就像是过往的曾经笑容，化成种子，扎根在柔软的心底。</p>
                    </div>
                </li>

                <li>
                    <a href="<?php echo U('Share/detail');?>">
                        <span class="item-on-hover"></span>
                        <img src="/0/1/Public/Home/images/share/2.jpg" alt="LOREM IPSUM DOLOR SIT AMET" />
                    </a>
                    <div class="blog-carousel-details">
                        <h2><a href="<?php echo U('Share/detail');?>">【尼泊尔】探寻内心深处的那个禅亚塔</a></h2>
                        <div class="carousel-meta">
                            <span class="post-format"><i class="icon-pencil"></i></span><span class="details">December 07, 2015 / <a href="#">4 评论</a></span>
                        </div>
                        <p>曾近一度幻想拥有翅膀，就可以肆意离开家，就可以飞到繁星之中，找到最耀眼的那颗。 </p>
                    </div>
                </li>
                <li>
                    <a href="<?php echo U('Share/detail');?>">
                        <span class="item-on-hover"></span>
                        <img src="/0/1/Public/Home/images/share/3.jpg" alt="LOREM IPSUM DOLOR SIT AMET" />
                    </a>
                    <div class="blog-carousel-details">
                        <h2><a href="<?php echo U('Share/detail');?>">【直布罗陀】我们都是温斯顿</a></h2>
                        <div class="carousel-meta">
                            <span class="post-format"><i class="icon-facetime-video"></i></span><span class="details">May 18, 2016 / <a href="#">3 评论</a></span>
                        </div>
                        <p>你曾经告诉过我，谁都有一双不会飞的有意义的翅膀，因为那双翅膀，是你曾经在空中飞翔过的痕迹。晚风就那么温柔的拂过发丝，夕阳就那么不舍得离开大地。</p>
                    </div>
                </li>

                <li>
                    <a href="<?php echo U('Share/detail');?>">
                        <span class="item-on-hover"></span>
                        <img src="/0/1/Public/Home/images/share/4.jpg" alt="LOREM IPSUM DOLOR SIT AMET" />
                    </a>
                    <div class="blog-carousel-details">
                        <h2><a href="<?php echo U('Share/detail');?>">正在前往多拉多——人类最大的敌人是无序</a></h2>
                        <div class="carousel-meta">
                            <span class="post-format"><i class="icon-quote-left"></i></span><span class="details">December 07, 2015 / <a href="#">4 评论</a></span>
                        </div>
                        <p>对不起，我还是无法睡着，因为我在害怕，睁开眼睛后看到的是空荡荡的枕头，谁叫我不甘心，等到无法睁开眼睛了都要等。</p>
                    </div>
                </li>
            </ul>
        </section>
        <div class="space"></div>

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