<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>碎言碎语 - Nova's Blog</title>
    <meta name="msvalidate.01" content="3ED833EEEC8B466015F352CA0CEC159F" />
    <meta name="baidu-site-verification" content="Een7k8JYLQ" />
    <meta name="keywords" content="Luna Nova's Tweets"/>
    <meta name="description" content="普通上班族发的牢骚(つ´ω`)つ"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="tweets">
<!--header start-->
<div id="header">
    <h1>个人博客</h1>
    <p id="slogan">青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>
    <div id="nav">
        <ul>
            <li><a id="block" href="<?php echo base_url('home/index');?>">首页</a></li>
            <li><a id="block" href="<?php echo base_url('home/about');?>">关于我</a></li>
            <li><a id="block" href="<?php echo base_url('home/tweets');?>">碎言碎语</a></li>
            <li><a id="block" href="<?php echo base_url('home/diaries');?>">个人日记</a></li>
            <li><a id="block" href="<?php echo base_url('home/photos');?>">相册展示</a></li>
            <li><a id="block" href="<?php echo base_url('home/learn');?>">学无止境</a></li>
            <li><a id="block" href="<?php echo base_url('home/guestbook');?>">留言板</a></li>
            <div class="clear"></div>
        </ul>
    </div>
</div>
<!--header end-->
<!--content start-->
<div id="say">
    <div class="weizi">
        <div class="wz_text">当前位置：首页><h1>碎言碎语</h1></div>
    </div>
    <?php if (isset($rows)) { foreach ($rows as $row): ?>
    <ul class="say_box">
        <div class="sy">
            <p><?php echo $row['content']?></p>
        </div>
        <span class="dateview"><?php echo $row['date']?></span>
    </ul>
    <?php endforeach;}?>
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