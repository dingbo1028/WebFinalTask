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
                        <h2>红尘有肉，无处觅食</h2>
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
                        <img src="/0/1/Public/Home/images/blog/li1.jpg" alt="" />
                    </div><!--end post-thumbnail-->
                    <div class="post-content">
						<span class="masonry-post-meta">
							7 Jan 2012 / <a href="#">吃好吃的</a> / <a href="#">3 评论</a>
						</span>
                        <i class="icon-pencil"></i>
                        <div class="clear"></div>

                        <p><span class="dropcap2">偶</span>见网上有人谈及移民时有一句感慨：去国之后，精神上已无祖国，但是胃是始终有故国的。作为一名资深觅食党，此话让我心头一震，并且胃疼。假使叫我移民美国，我会觉得一切都好，天蓝水绿，民风良善，但唯独一点不好：伙食。</p>

                        <blockquote>我算不挑食的，几十年来吃了无数潲水油和化学剂都没吭声，但在美国却只能埋头吃方便面和榨菜—那是我在国内绝对不碰的，因为看到毫无卖相的肉肠培根我就想吐。当我含泪喝着康师傅面汤时，忍不住想起童年时看的《中国少年报》，上面写的没错，美国人民果然生活在水深火热之中。我好想在洛杉矶开家中餐馆营救他们。</blockquote>
                        <p>今年我出差甚多，每逢大活动，必定大兵团作战，有同事就要伺候粮草补给之类，事先物色吃工作餐之地。湖南佬每到一地，自然要先寻湘菜馆，若实在寻不到，川菜馆也是候补神器，如果川菜亦难寻，则微辣界的云贵馆子亦成备胎。话说我有次出差深圳，怀念多年的深井烧鹅没吃上，城中村里的湘菜馆潲水油倒是储了一肚。

                        <p>
                        生活在嗜辣地区的人，犹如染上毒瘾。盛夏的某天，来自湖南的我和来自四川的宋石男在中国最北的漠河用望远镜窥探对河的俄罗斯泳装大妞，看得一团真火在体内窜来窜去，唯独那胃还是寒的，我们遂决定上馆子，食色必须两全。坐定，唤老板娘拿菜单，说多放点辣椒。老板娘曰：辣椒炒肉自然有辣椒。宋石男说你那大菜椒不作数，要放朝天椒。老板娘眼波一横道：官人，放朝天椒亦可，价格却要翻倍。
                        </p>
                        <p>
                            宋石男一拍桌子：黑店啊，你莫非是十字坡的孙二娘？我拍拍宋小哥肉嘟嘟的胖肚皮说：莫嚷，孙二娘最善做人肉包子，转眼叫你当“送噬腩”，这大兴安岭里哪会产辣椒，都是外面运来的，不如我们坐在太阳底下吃，你满头大汗地脑补一下水煮鱼跳跳蛙，自然有吃辣椒之感，也算魂归故里。
                        </p>
                        <h6>PHOTO GALLERY</h6>
                        <ul class="inner-blog-gallery">
                            <li>
                                <a href="/0/1/Public/Home/images/blog/gthumbnail1.jpg" rel="prettyPhoto[pp_gal]">
                                    <span class="item-on-hover"><span class="hover-image"></span></span>
                                    <img src="/0/1/Public/Home/images/blog/gthumbnail1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="/0/1/Public/Home/images/blog/gthumbnail2.jpg" rel="prettyPhoto[pp_gal]">
                                    <span class="item-on-hover"><span class="hover-image"></span></span>
                                    <img src="/0/1/Public/Home/images/blog/gthumbnail2.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="/0/1/Public/Home/images/blog/gthumbnail3.jpg" rel="prettyPhoto[pp_gal]">
                                    <span class="item-on-hover"><span class="hover-image"></span></span>
                                    <img src="/0/1/Public/Home/images/blog/gthumbnail3.jpg" alt="" />
                                </a>
                            </li>
                            <li class="column-last">
                                <a href="/0/1/Public/Home/images/blog/gthumbnail4.jpg" rel="prettyPhoto[pp_gal]">
                                    <span class="item-on-hover"><span class="hover-image"></span></span>
                                    <img src="/0/1/Public/Home/images/blog/gthumbnail4.jpg" alt="" />
                                </a>
                            </li>
                        </ul>
                        <p>
                            我心底虽无故乡，但胃却也有故乡。某日在长沙见一桂林米粉店，大喜，进去先问老板你是哪的。老板低着头煮粉说是临桂的。我心底一沉，知这粉必不正宗，因桂林一带人氏说起自己籍贯必是鼻孔朝天，慢慢哼出一句“桂林的”。及后一尝，果然赝品，再悄悄问帮厨的老太太是哪的，她说是衡阳的。我对攀老乡毫无兴趣，只是想确认食物是否正宗。最近在林科大旁边吃螺蛳粉，老板是柳城的，果然正宗得不行，因为粉里一丁点螺蛳都木有，我年轻时出差柳州最恨这种粉，全素，仿佛寺庙特供，昔年我刚吃完站起来即饿得眩晕，愤愤地想连肉星都不见，怪不得古龙常说死在柳州，显然都是饿死的。
                        </p>
                        <p>
                            吃货意义上的觅食并不难，满大街都是馆子。真正艰难的，是谋生意义上的觅食。小时候老师说：为什么美国那么富饶？因为咱们中国人每天晚上睡大觉时，美国人民还在勤奋地工作。后来我翻开中学地理课本，发现小学老师没诓我。
                        </p>



                        <h6 class="tag-title">标签:</h6>
                        <ul class="tags">
                            <li><a href="#">小时候</a></li>
                            <li><a href="#">吃的</a></li>
                            <li><a href="#">回忆杀</a></li>
                            <li><a href="#">散文</a></li>
                        </ul>

                        <div class="next-prev-posts">
                            <div class="previous-post"><a href="#"><i class="icon-double-angle-left"></i>贺卫方：北京大学vs邹恒甫</a></div>
                            <div class="next-post"><a href="#">繁杂世界中的一粒灰<i class="icon-double-angle-right"></i></a></div>
                        </div>

                        <div class="author-bio">
                            <img src="/0/1/Public/Home/images/blog/he.jpg" alt="author-gravatar" />
                            <div class="authorp">
                                <h2>作者: <a href="#">刘 原</a></h2>
                                <p>太阳底下无新事，我们见识到的天灾人祸也好，环肥燕瘦也好，基本上都似曾相识，所以，我们听闻的每一桩新闻，或是遇见的每一张面孔，其实都是重逢。</p>
                            </div>
                        </div>

                        <div class="double-separator"></div>

                        <h3>This post has 5 comments:</h3>

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
                                        <p> 现在的饱汉哪知饿汉的滋味。我是在80年代开始发育的，比野夫稍好，但启蒙读物也几乎没有，偶尔的几部小说，譬如《男人的一半是女人》《亮出你的舌苔或空空荡荡》，我又看不懂。吾友魏寒枫的性启蒙，是去撕法院的布告塞在枕头下，半夜秉烛研习张犯王犯是怎么欺侮妇女的。</p>
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
                                                <p>高科技会淘汰一切师傅：当我还在用文字给后生们性启蒙时，加藤鹰已经用影像去启蒙了，而充气娃娃出现后，一纸使用说明书就足以让我和加藤鹰下岗；以后3D技术日益发达，打印各款美女易如反掌，你家里那个整天唠叨的黄脸人生女导师也可以下岗了；</p>
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
                                                <p>幸亏我们这代人在最关键的历史关头，躬逢了三级片勃兴的盛世，若是没有那些片中导师，我们或许至今不知如何向姑娘们下手，即便被推进了优衣库的试衣间，也定然呆若木鸡。是的。木鸡。硬但不会动的木鸡。</p>
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
                                        <p>说实话，作为一个法律学者，我对于评论一起没有审结的案件总是有些不安，那似乎有某种影响司法的嫌疑。不过，就本案的事实而言，无论是见诸媒体的报道和法庭上药家鑫的言辞，都不存在争议。药家鑫驾车肇事后又将伤者六刀杀死，手段残忍，后果严重。</p>
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
                                        <p>当然，你也知道，我是一直主张无条件彻底废除死刑的。不过，主张废除死刑属于一种立法推进；司法方面，在立法没有变化的情况下，只能呼吁尽可能少判死刑，并在各个环节上全力防止冤狱的发生。至于法官在具体案件审理时，其义务是严格依据现行法律判决案件。</p>
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