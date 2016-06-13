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
                        <h2>夏天的一场雨</h2>
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
                        <img src="/0/1/Public/Home/images/blog/sh3.jpg" alt="" />
                    </div><!--end post-thumbnail-->
                    <div class="post-content">
						<span class="masonry-post-meta">
							7 Jan 2012 / <a href="#">吃好吃的</a> / <a href="#">3 评论</a>
						</span>
                        <i class="icon-pencil"></i>
                        <div class="clear"></div>

                        <p><span class="dropcap2">早</span>
                            上的窗外，格外阴沉。地面水汪汪的，树上湿漉漉的。仿佛昨天的那场疾风骤雨没有走远，还在半空中待命。我以为，只有夏天的雨才算及时雨。这不，经它一夜的功夫，那炎热难耐的酷暑，转眼就消失殆尽了。凉风吹来，好不宜人。我想到了一个地方，到那儿去赏雨定会别有意境。
                        </p>

                        <blockquote>
                            过了铁路，便是临江大道。翻过大堤就是绿化带江滩公园了。公园内，修建着两条笔直平坦的与江平行的大道。好似这景区的动脉。将大量的风景定格在两条动脉之间。
                        </blockquote>
                        <p>
                            第一条是紧挨堤脚的黑色沥青道路，几净宽敞，沿江而行。再往开去约一百五十米远处，挨近长江的另一条道路，明亮而悠长，路面铺着菱形的麻面大理石。路旁(靠江)，间或生长着柳树、樟树。此时，树木各自耷垂着，没有动静。左旁，那低矮硬轧植物，被修理的平平整整，杵在那里。仿佛刚刚经受了狂风暴雨的洗礼，已经精疲力尽、动弹不得了。那一地的黄叶来自柳树。樟树正值青春期，少有红叶落地。却也泼洒了一地的“豌豆米”。不时会被踩在脚下，发出啪嚓声，让人有“糟蹋食物”感觉，不忍下脚。引桥底下没有留下暴雨的痕迹，几位爹爹婆婆正在探讨舞步。引桥边下，一颗樟树的旁枝向右翻转，露出树叶灰白色的背面，仿佛诉说着昨天的遭遇。再右边下去是江滩，成片的柳树被江水淹没至腰身。浪花拍打着路基，枯枝败叶忽上忽下，漂浮其间。
                        <p>
                            抬头望去，乌云滚滚。有三只大雁一字型前飞，眨眼它们就消失在云层。树下的杂草丛中，有几只灰褐色的小鸟在啄食。它们每向前啄一嘴，赶紧往后跳一步，处处谨慎提防。偶尔底空飞跃，显出几分笨拙。稍不留意，它们就钻进草丛、消失在视线里。片刻，我听到了几声“雨咕咕”的叫声，莫非是它们——刚才的笨鸟?
                        </p>
                        <div class="post-thumbnail">
                            <img src="/0/1/Public/Home/images/blog/sh1.jpg" alt="" />
                        </div><!--end post-thumbnail-->
                        <p>
                            柳树巅上，那细条高枝弯成了弧形。一只麻雀迎风冒雨站在弧线上，不停的振动翅膀。它反复变换角度振动不止。好像说：“下吧下吧，谁怕谁呀”。俨然一副“试看天下谁能敌”的英雄气慨。想必它身上不会留下一丁点的雨水。人家多有能耐啊，能不骄傲吗?
                        </p>

                        <p>
                            远处，我看见了戴着神秘面纱的合欢花。毛茸茸的，有几分羞涩。我向来以为，合欢花如同蒲公英一样，最是弱不禁风的了。却不知它如何躲过了一劫，傲然挺立，分外妖娆。看来，万物自由它生存的秘诀，用不着凡人担心。
                        </p>
                        <div class="post-thumbnail">
                            <img src="/0/1/Public/Home/images/blog/sh2.jpg" alt="" />
                        </div><!--end post-thumbnail-->
                        <p>
                            曲径幽幽。一边的大叶植被高过人头。湿漉漉、颤巍巍的，恍若列队欢迎的人群，站在规定的安全线内，挤挤挨挨，意欲观探。倒是另一边的灌木松松散散，高高大大，茂密的枝叶将上空覆盖。一层阴云飘过，小径更显阴森，令人胆寒。好在荷塘边传来了赏花人的欢声笑语，我立马胆回于身，来到小桥。小桥边的凉亭里传来了悠悠琴声，凄清委婉，袅袅绵长
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
                            <img src="/0/1/Public/Home/images/blog/5.jpg" alt="author-gravatar" />
                            <div class="authorp">
                                <h2>作者: <a href="<?php echo U('User/myindex?user=老七');?>">老 七</a></h2>
                                <p>我们都是俗人，还装什么装？</p>
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
                                        <p>先问是不是，再问为什么！</p>
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
                                                <p>谢邀，我不准备评论！</p>
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
                                                <p>贵乎药丸</p>
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
                                        <p>说实话，作为一个法律学者，我对于评论一起没有审结的案件总是有些不安，楼主你这样是要进监狱的@—@</p>
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
                                        <p>你见过标准的十五个字么？</p>
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