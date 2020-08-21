<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>About Nova - 关于我</title>
    <meta name="msvalidate.01" content="3ED833EEEC8B466015F352CA0CEC159F" />
    <meta name="baidu-site-verification" content="Een7k8JYLQ" />
    <meta name="keywords" content="Luna, Nova, Information, 某普通上班族的的个人简介"/>
    <meta name="description" content="About Nova, Ordinary office worker, 某普通上班族的的个人简介( =ノωヽ=)"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="about">
<!--header start-->
<div id="header">
    <h1>某普通上班族的个人博客</h1>
    <p>就做一阵风吧，有温柔也有英勇。</p>
</div>
<!--header end-->
<!--nav-->
<div id="nav">
    <ul>
        <li><a href="<?php echo base_url('home/index');?>">首页</a></li>
        <li><a href="<?php echo base_url('home/about');?>">关于我</a></li>
        <li><a href="<?php echo base_url('home/tweets');?>">碎言碎语</a></li>
        <li><a href="<?php echo base_url('home/diaries');?>">个人日记</a></li>
        <li><a href="<?php echo base_url('home/photos');?>">相册展示</a></li>
        <li><a href="<?php echo base_url('home/learn');?>">学无止境</a></li>
        <li><a href="<?php echo base_url('home/guestbook');?>">留言板</a></li>
        <div class="clear"></div>
    </ul>
</div>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="about_me">
        <div class="weizi">
            <div class="wz_text">当前位置：首页><h1>关于我</h1></div>
        </div>
        <div class="about_content">
            博主是一个草根站长，喜欢研究web技术。
        </div>
    </div>
    <!--end left -->
    <!--right-->
    <div class="right" id="c_right">
        <div class="s_about">
            <h2>关于博主</h2>
            <img src="<?php echo base_url();?>static/images/kfc.jpg" width="230" height="230" alt="博主"/>
            <p>博主：Nova</p>
            <p>职业：PHP开发工程师</p>
            <p>简介：响珰珰一粒铜豌豆</p>
            <p><br /><div class="clear"></div></p>
        </div>
        <!--栏目分类-->
        <div class="lanmubox">
            <div class="hd">
                <ul><li>友情链接</li><li>友情链接</li><li class="hd_3">友情链接</li></ul>
            </div>
            <div class="bd">
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
            </div>
        </div>
        <!--end-->
    </div>
    <!--end  right-->
    <div class="clear"></div>
</div>
<!--content end-->
<!--footer-->
<div id="footer">
    <p>Design by：Nova <?php echo date('Y-m-d');?></p>
</div>
<script type="text/javascript" src="<?php echo base_url();?>static/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>static/js/html5.js"></script>
<![endif]-->

<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/nav.js"></script>
</body>
</html>