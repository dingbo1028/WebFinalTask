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
                        <h2>意大利的光与暗</h2>
                    </div>
                    <div class="one-third column-last">
                    </div>
                    <div class="clear"></div>
                </div><!--end title-content-->
            </div>
        </div><!--end title-wrapper-->
    </section>

    <div class="centered-wrapper">


        <section id="blog">
            <div id="posts" class="single-post">
                <article class="post">
                    <div class="post-thumbnail">
                        <img src="/0/1/Public/Home/images/blog/tr1.jpg" alt="" />
                    </div><!--end post-thumbnail-->
                    <div class="post-content">
						<span class="masonry-post-meta">
							7 Jan 2012 / <a href="#">吃好吃的</a> / <a href="#">3 评论</a>
						</span>
                        <i class="icon-pencil"></i>
                        <div class="clear"></div>

                        <p><span class="dropcap2">意</span>大利是欧洲民族及文化的摇篮，曾孕育出罗马文化及伊特拉斯坎文明，而意大利的首都罗马，几个世纪以来都是西方世界的政治中心，也曾经是罗马帝国的首都。十三世纪末的意大利更是成为欧洲文艺复兴发源地。</p>

                        <blockquote>意大利是欧洲历史古国，在旧石器时代就已有人类在这片土地上生活。据古代神话，传说罗慕路斯（Lomulus）和他的孪生兄弟雷穆斯（Lemus）是由母狼抚养和哺育的——于公元前753年建立了罗马。事实上，自公元前2000年左右，古意大利部落就居住于此。</blockquote>
                        <p>568年，意大利北部建立了伦巴德王国，774并入法兰克王国。意大利中世纪最显著的特征就是北部强大城邦的崛起，其中著名的有米兰公国、威尼斯共和国、热那亚共和国、佛罗伦萨共和国等。15世纪，文艺复兴造就了多那太罗（Donatello）、波提切利（Botticelli）、达·芬奇（LeonardodaVinci）、拉斐尔（Raffaello）和米开朗基罗（Michelangelo）等艺术天才。到了16世纪早期，意大利大部分领土处于奥地利哈布斯堡王朝统治之下。在拿破仑于1796年入侵之后，消失了几个世纪的统一迹象又重新显现。
                        <p>意大利统一之后就走上了对外扩张的资本主义殖民道路并且以强国的姿态出现在欧洲的政治外交中，在19世纪60到80年代成功蚕食了东非红海沿岸的交通要地厄立特里亚和南索马里；1912年夺取了北非的利比亚和爱琴海罗德诸岛。</p>


                        <p>
                            我心底虽无故乡，但胃却也有故乡。某日在长沙见一桂林米粉店，大喜，进去先问老板你是哪的。老板低着头煮粉说是临桂的。我心底一沉，知这粉必不正宗，因桂林一带人氏说起自己籍贯必是鼻孔朝天，慢慢哼出一句“桂林的”。及后一尝，果然赝品，再悄悄问帮厨的老太太是哪的，她说是衡阳的。我对攀老乡毫无兴趣，只是想确认食物是否正宗。最近在林科大旁边吃螺蛳粉，老板是柳城的，果然正宗得不行，因为粉里一丁点螺蛳都木有，我年轻时出差柳州最恨这种粉，全素，仿佛寺庙特供，昔年我刚吃完站起来即饿得眩晕，愤愤地想连肉星都不见，怪不得古龙常说死在柳州，显然都是饿死的。
                        </p>
                        <p>
                            吃货意义上的觅食并不难，满大街都是馆子。真正艰难的，是谋生意义上的觅食。小时候老师说：为什么美国那么富饶？因为咱们中国人每天晚上睡大觉时，美国人民还在勤奋地工作。后来我翻开中学地理课本，发现小学老师没诓我。
                        </p>



                        <h6 class="tag-title">标签:</h6>
                        <ul class="tags">
                            <li><a href="#">游记</a></li>
                            <li><a href="#">意大利</a></li>
                            <li><a href="#">文化</a></li>
                        </ul>

                        <div class="next-prev-posts">
                            <div class="previous-post"><a href="#"><i class="icon-double-angle-left"></i>贺卫方：北京大学vs邹恒甫</a></div>
                            <div class="next-post"><a href="#">繁杂世界中的一粒灰<i class="icon-double-angle-right"></i></a></div>
                        </div>

                        <div class="author-bio">
                            <img src="/0/1/Public/Home/images/blog/6.jpg" alt="author-gravatar" />
                            <div class="authorp">
                                <h2>作者: <a href="#">Frank Underwood</a></h2>
                                <p>We`are all same!</p>
                            </div>
                        </div>

                        <div class="double-separator"></div>

                        <h3>这篇文章有 5 回复:</h3>

                        <ol class="commentlist">
                            <li class="comment">
                                <div class="commentwrap">
                                    <div class="avatar">
                                        <img src="/0/1/Public/Home/images/blog/1.jpg" width="60" height="60" alt="" />
                                    </div><!--end avatar-->

                                    <div class="metacomment">
                                        <span><a href="#">贺卫方</a></span>发表于 June 31, 2016, at 5:34am <a class="c_reply" href="#">回复</a>
                                    </div><!--end metacomment-->

                                    <div class="bodycomment">
                                        <p>支持楼主！写的很好！</p>
                                    </div><!--end bodycomment-->
                                </div><!--end comment-wrap-->

                                <ul class="threaded">
                                    <li class="comment">
                                        <div class="commentwrap">
                                            <div class="avatar">
                                                <img src="/0/1/Public/Home/images/blog/2.jpg" width="60" height="60" alt="" />
                                            </div><!--end avatar-->

                                            <div class="metacomment">
                                                <span><a href="#">王大傻</a></span>发表于 June 31, 2016, at 5:34am <a class="c_reply" href="#">回复</a>
                                            </div><!--end metacomment-->

                                            <div class="bodycomment">
                                                <p>你这是在捧杀楼主么？</p>
                                            </div><!--end bodycomment-->
                                        </div><!--end comment-wrap-->
                                    </li>

                                    <li class="comment">
                                        <div class="commentwrap">
                                            <div class="avatar">
                                                <img src="/0/1/Public/Home/images/blog/1.jpg" width="60" height="60" alt="" />
                                            </div><!--end avatar-->

                                            <div class="metacomment">
                                                <span><a href="#"></a>贺卫方</span>发表于 June 31, 2016, at 5:34am <a class="c_reply" href="#">回复</a>
                                            </div><!--end metacomment-->

                                            <div class="bodycomment">
                                                <p>唉，还是要多学习的么，你是煞笔么？无脑喷子滚蛋！</p>
                                            </div><!--end bodycomment-->
                                        </div><!--end comment-wrap-->
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="commentwrap">
                                    <div class="avatar">
                                        <img src="/0/1/Public/Home/images/blog/3.jpg" width="60" height="60" alt="" />
                                    </div><!--end avatar-->

                                    <div class="metacomment">
                                        <span><a href="#">鲁哈</a></span>发表于 June 31, 2016, at 5:34am <a class="c_reply" href="#">回复</a>
                                    </div><!--end metacomment-->

                                    <div class="bodycomment">
                                        <p>说实话，楼主写的文笔的确不怎么样啊，一般般么，有种百度百科的既视感。。。。。</p>
                                    </div><!--end bodycomment-->
                                </div><!--end comment-wrap-->
                            </li>

                            <li class="comment">
                                <div class="commentwrap">
                                    <div class="avatar">
                                        <img src="/0/1/Public/Home/images/blog/4.jpg" width="60" height="60" alt="" />
                                    </div><!--end avatar-->

                                    <div class="metacomment">
                                        <span><a href="#">陈丹尼</a></span>发表于 June 31, 2016, at 5:34am <a class="c_reply" href="#">回复</a>
                                    </div><!--end metacomment-->

                                    <div class="bodycomment">
                                        <p>这完全就是百科上抄来的吗，还这么懒也不多陪几张图</p>
                                    </div><!--end bodycomment-->
                                </div><!--end comment-wrap-->
                            </li>
                        </ol>

                        <h3>说说你的看法:</h3>
                        <form action="#" id="commentform" method="post">

                            <fieldset>
                                <label><a>回复：</a></label>
                                <textarea name="comment" id="mycomment" rows="20" cols="30"></textarea>
                            </fieldset>
                            <fieldset>
                                <input name="mysubmitted" id="mysubmitted" class="button small red" value="提交评论" type="submit"/>
                            </fieldset>
                        </form>
                    </div><!--end post-content-->
                </article>

            </div><!--end posts-->
        </section>

        <aside id="sidebar">
            <div class="widget recent-posts">
                <h3>最新发布</h3>
                <div class="sidebar-post">
                    <h5><a href="blog-single.html">【尼泊尔】探寻内心深处的那个禅亚塔</a></h5>
                    <span>13 July 2016 / <a href="#">5 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="blog-single.html">【直布罗陀】我们都是温斯顿</a></h5>
                    <span>13 July 2016 / <a href="#">22 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="blog-single.html">正在前往多拉多——人类最大的敌人是无序</a></h5>
                    <span>13 July 2016 / <a href="#">58 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="blog-single.html">编这些乱七八糟的东西真是好费脑细胞呢</a></h5>
                    <span>13 July 2016 / <a href="#">15 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="blog-single.html">人们按照自己的方式生活</a></h5>
                    <span>13 July 2016 / <a href="#">78 评论</a></span>
                </div><!--end sidebar-post-->
                <div class="sidebar-post">
                    <h5><a href="blog-single.html">乌托邦？</a></h5>
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