<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>窝窝</title>
<link href="/0/1/Public/Home/css/main.css" rel="stylesheet">
<link href="/0/1/Public/Home/css/pic.css" rel="stylesheet">
<link href="/0/1/Public/Home/css/essay.css" rel="stylesheet">
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
        
    <?php if($page == 1): ?><div class="essay-banner clearfix">
            <img src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201606/Fj--kYsegdyjUJ8meGCXwlyPAQaA.jpg?imageView2/1/w/750/h/530" alt="日本富士音乐节巡礼" class="cover">
            <div class="meta">
                <a href="http://www.luoo.net/essay/720" class="title">日本富士音乐节巡礼</a>
                <p class="content">清晨在帐篷里被小鸟的叫声唤醒，你可以乘坐世界上最长的苗场缆车去山顶做白日梦，或者边喝咖啡边步入森林，去绿色舞台和4万陌生人在草坪上共同摇摆，去林中的木道亭安静的听日本独立音乐，要不然就去“天堂”和嬉皮士们吹泡泡。</p>
                <p class="date">2016-06-08</p>
                <p class="more">
                    <a href="http://www.luoo.net/essay/720" class="ln-more">全文</a>
                </p>
            </div>
        </div><?php endif; ?>
    <div class="clearfix">
        <!-- article start-->
        <div class="article article-sm">
            <!-- essay-list -->
            <div class="essay-list">
                <!-- <div class="list-filter">
                           <span class="list-title">最新文章</span>
                           <span class="separator">&#12539;</span>
                           <a href="http://www.luoo.net/essays/" class="filter actived">全部</a>					</div> -->
                <div class="item">
                    <a href="http://www.luoo.net/essay/719" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201606/FlUz-lSnDrbvC0xkk462Mv8GDDVW.jpg?imageView2/1/w/350/h/250" alt="提琴后摇的五重色彩">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/719" title="提琴后摇的五重色彩" class="title">
                            提琴后摇的五重色彩
                        </a>
                        <div class="meta">
                            <span class="category">言之</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/112508">InSolitude</a><span class="separator">・</span><span class="time">2016-06-07</span>
                        </div>
                        <div class="subscribe">
                            可能是Dirty Three挖掘出了小提琴在后摇滚雏形里潜在的可能性，在探索过程中，人们逐渐发现了提琴这一类乐器高亢或哀婉的演奏风格恰与后摇滚相得益彰。
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.luoo.net/essay/718" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201606/FhIOOLhY6xqJip0ueG7jxeLBI3y-.jpg?imageView2/1/w/350/h/250" alt="如何让创造力起死回生">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/718" title="如何让创造力起死回生" class="title">
                            如何让创造力起死回生
                        </a>
                        <div class="meta">
                            <span class="category">公告</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/5183">LUO</a><span class="separator">・</span><span class="time">2016-06-06</span>
                        </div>
                        <div class="subscribe">
                            我们讲述生命，我们前行，同时告别它的正在移栖的鸟群。 我们属于美好的一代人。
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.luoo.net/essay/717" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201606/Fh8drFy7cX7t_yiDWL9JUrGF_I-J.jpg?imageView2/1/w/350/h/250" alt="丁可：从美到残酷的蜕变">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/717" title="丁可：从美到残酷的蜕变" class="title">
                            丁可：从美到残酷的蜕变
                        </a>
                        <div class="meta">
                            <span class="category">专访</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/656733">eyelight</a><span class="separator">・</span><span class="time">2016-06-03</span>
                        </div>
                        <div class="subscribe">
                            我们都在描绘生命的残酷，还有残酷的美，孤独的美。
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.luoo.net/essay/716" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201606/Frd6qcxJ8A6B79NWaNpcyws3F9nL.jpg?imageView2/1/w/350/h/250" alt="Hello Nico：在歌声里起舞">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/716" title="Hello Nico：在歌声里起舞" class="title">
                            Hello Nico：在歌声里起舞
                        </a>
                        <div class="meta">
                            <span class="category">言之</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/1033112">竖</a><span class="separator">・</span><span class="time">2016-06-02</span>
                        </div>
                        <div class="subscribe">
                            在他们的歌曲里面，你可以找到不一样的东西，或许解答你心中的疑惑不解之处，或只是一种情感上的宣泄，或单纯因为好听，被感动。
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.luoo.net/essay/715" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201606/FvtIUs_y09RKjBJYk_5qltUFT7mZ.jpg?imageView2/1/w/350/h/250" alt="你永远是一个少年">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/715" title="你永远是一个少年" class="title">
                            你永远是一个少年
                        </a>
                        <div class="meta">
                            <span class="category">言之</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/656733">eyelight</a><span class="separator">・</span><span class="time">2016-06-01</span>
                        </div>
                        <div class="subscribe">
                            你拥有别人不再拥有的青春年少
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.luoo.net/essay/714" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201605/FmqcUxlEnDh-wza5wcjX-imr_nVe.jpg?imageView2/1/w/350/h/250" alt="语言尚未发明前的音乐是什么模样？">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/714" title="语言尚未发明前的音乐是什么模样？" class="title">
                            语言尚未发明前的音乐是什么模样？
                        </a>
                        <div class="meta">
                            <span class="category">他们</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/1038996">瓦_瓦</a><span class="separator">・</span><span class="time">2016-05-31</span>
                        </div>
                        <div class="subscribe">
                            然，音乐本身光去谈词这个部份也未免狭隘，但，我认为音乐还是很难不去用语言的逻辑脉络去思考。我想要强调的是音乐的叙事性，词只是一种可能，它也可以是一种概念，总之纯粹理性的音乐必须包含某种可能是与它对立存在的感性，才有办法真正伟大。
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.luoo.net/essay/713" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201605/FghipogHwSLpFKzi4fSFhfxClWIG.jpg?imageView2/1/w/350/h/250" alt="​幻视幻听的靡靡之音">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/713" title="​幻视幻听的靡靡之音" class="title">
                            ​幻视幻听的靡靡之音
                        </a>
                        <div class="meta">
                            <span class="category">言之</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/29527">sixbang</a><span class="separator">・</span><span class="time">2016-05-30</span>
                        </div>
                        <div class="subscribe">
                            70年代末到90年代，一种结合了Kraut－Rock、自由即兴与当代实验噪音音乐的迷幻摇滚风格受到了广大乐迷的追捧——新迷幻噪音，新风格属于不失者、光束夜 、Ghost 、迷幻公社Acid Mothers Temple等带有实验、前卫标签的名字，他们除了追求音乐上的突破外，乐队特立独行的风格与音乐之外的精神追求。
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.luoo.net/essay/712" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201605/FjJysT9JHwE_Zdq3Js1p7bu2L6DP.jpg?imageView2/1/w/350/h/250" alt="老炮儿复出！——飘乐队已过去，我是石磊4rock">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/712" title="老炮儿复出！——飘乐队已过去，我是石磊4rock" class="title">
                            老炮儿复出！——飘乐队已过去，我是石磊4rock
                        </a>
                        <div class="meta">
                            <span class="category">专访</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/5032">森田</a><span class="separator">・</span><span class="time">2016-05-27</span>
                        </div>
                        <div class="subscribe">
                            飘乐队组建于2000年的夏天。正值千禧年之际，中国的摇滚开始从启蒙到了一种精神阶段。爆炸头，喇叭裤，还有当时被称为造星工厂的红星生产社。都在被叫做青春的血液里流淌，爆发。飘乐队赶上了好时候，被红星一眼相中。05年时，他们带着首张专辑《赤脚青春》在合肥举行了首场演唱会。
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.luoo.net/essay/711" class="cover-wrapper">
                        <img class="cover rounded" src="http://7xkszy.com2.z0.glb.qiniucdn.com/library/201605/FlGNG69YGk6Z8zwg7qjAcHt2MzTm.jpg?imageView2/1/w/350/h/250" alt="关于“爱情”，阿肆有话要说">
                    </a>
                    <div class="essay-wrapper">
                        <a href="http://www.luoo.net/essay/711" title="关于“爱情”，阿肆有话要说" class="title">
                            关于“爱情”，阿肆有话要说
                        </a>
                        <div class="meta">
                            <span class="category">言之</span><span class="separator">・</span><a class="entry-author" href="http://www.luoo.net/author/essays/1033112">竖</a><span class="separator">・</span><span class="time">2016-05-26</span>
                        </div>
                        <div class="subscribe">
                            关于“爱情”这一主旋律，在歌声里不断演绎，不同的歌手有着自己不一样的发声，即有很私人化的情感融入，也有触动大众心中的某一幕感同身受。关于“爱情”，阿肆以自己的亲身经历道出她的爱情，也许这是你的爱情或你周围人的爱情。
                        </div>
                    </div>
                </div>
            </div>
            <!--/// essay-list end-->
            <div class="paginator">
                <?php if($page == 1): else: ?>
                    <a class="previous" href="<?php echo U('index');?>?p=<?php echo ($page-1); ?>">上一页</a><?php endif; ?>
                <?php $__FOR_START_23805__=1;$__FOR_END_23805__=10;for($i=$__FOR_START_23805__;$i < $__FOR_END_23805__;$i+=1){ if($i == $page): ?><a class="page actived" rel="nofollow" href="javascript:;"><?php echo ($i); ?></a>
                        <?php else: ?>
                        <a class="page" href="<?php echo U('index');?>?p=<?php echo ($i); ?>"><?php echo ($i); ?></a><?php endif; } ?>
                <span class="break">...</span>
                <a class="page" href="<?php echo U('index');?>?p=23">23</a>
                <a class="next" href="<?php echo U('index');?>?p=<?php echo ($page+1); ?>">下一页</a>
            </div>
        </div>
        <!--/// article end-->
        <!-- aside start-->
        <div style="" class="aside">
            <div class="widget">
                <div class="widget-head">
                    <span class="title">推荐文章</span>
                </div>
                <div class="widget-ct pic-widget">
                    <div class="item">
                        <a href="http://www.luoo.net/essay/337" title="电影中的音乐传奇" class="cover-wrapper">
                            <img src="http://7xkszy.com2.z0.glb.qiniucdn.com//pics/essays/201407/53b7de9fa87d2.jpg?imageView2/1/w/350/h/250" alt="电影中的音乐传奇" class="essay-cover rounded">
                        </a>
                        <div class="info">
                            <a href="http://www.luoo.net/essay/337" title="电影中的音乐传奇" class="title">电影中的音乐传奇</a>
                            <p class="description"><span>言之</span><span class="separator">・</span><a href="http://www.luoo.net/author/essays/186462">悬在时间轴上</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <a href="http://www.luoo.net/essay/338" title="忘掉南方一条河——【电台往事】" class="cover-wrapper">
                            <img src="http://7xkszy.com2.z0.glb.qiniucdn.com//pics/essays/201407/53bf4f170796b.jpg?imageView2/1/w/350/h/250" alt="忘掉南方一条河——【电台往事】" class="essay-cover rounded">
                        </a>
                        <div class="info">
                            <a href="http://www.luoo.net/essay/338" title="忘掉南方一条河——【电台往事】" class="title">忘掉南方一条河——【电台往事】</a>
                            <p class="description"><span>言之</span><span class="separator">・</span><a href="http://www.luoo.net/author/essays/5010">秦何人</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <a href="http://www.luoo.net/essay/339" title="慢动作的不完整性" class="cover-wrapper">
                            <img src="http://7xkszy.com2.z0.glb.qiniucdn.com//pics/essays/201407/53c23f62d652d.jpg?imageView2/1/w/350/h/250" alt="慢动作的不完整性" class="essay-cover rounded">
                        </a>
                        <div class="info">
                            <a href="http://www.luoo.net/essay/339" title="慢动作的不完整性" class="title">慢动作的不完整性</a>
                            <p class="description"><span>言之</span><span class="separator">・</span><a href="http://www.luoo.net/author/essays/160213">他类</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <a href="http://www.luoo.net/essay/340" title="愿你有不悔的一生——【电台往事】" class="cover-wrapper">
                            <img src="http://7xkszy.com2.z0.glb.qiniucdn.com//pics/essays/201407/53c4adea9be9a.jpg?imageView2/1/w/350/h/250" alt="愿你有不悔的一生——【电台往事】" class="essay-cover rounded">
                        </a>
                        <div class="info">
                            <a href="http://www.luoo.net/essay/340" title="愿你有不悔的一生——【电台往事】" class="title">愿你有不悔的一生——【电台往事】</a>
                            <p class="description"><span>言之</span><span class="separator">・</span><a href="http://www.luoo.net/author/essays/18019">动感花花</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <a href="http://www.luoo.net/essay/341" title="那秦淮岸边的回眸——【电台往事】" class="cover-wrapper">
                            <img src="http://7xkszy.com2.z0.glb.qiniucdn.com//pics/essays/201407/53c7a13f62db7.jpg?imageView2/1/w/350/h/250" alt="那秦淮岸边的回眸——【电台往事】" class="essay-cover rounded">
                        </a>
                        <div class="info">
                            <a href="http://www.luoo.net/essay/341" title="那秦淮岸边的回眸——【电台往事】" class="title">那秦淮岸边的回眸——【电台往事】</a>
                            <p class="description"><span>言之</span><span class="separator">・</span><a href="http://www.luoo.net/author/essays/184874">七杀是条狗</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-ct">
                    <a href="http://www.luoo.net/essay/submit" class="ln-widget-block rounded">
                        投稿推荐
                    </a>
                </div>
            </div>
        </div>
        <!--/// aside end-->
    </div>

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