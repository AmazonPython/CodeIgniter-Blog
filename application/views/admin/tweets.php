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
    <h1><font style="vertical-align: inherit;">Hi, Nova 👋</font></h1>
    <p id="slogan">就做一阵风吧，有温柔也有英勇。</p>
    <div id="nav">
        <ul>
            <li><a href="<?php echo base_url('admin/admin/article');?>">文章</a></li>
            <li><a href="<?php echo base_url('admin/admin/tweets');?>">碎言碎语</a></li>
            <li><a href="<?php echo base_url('admin/admin/diaries');?>">个人日记</a></li>
            <li><a href="<?php echo base_url('admin/admin/photos');?>">相册展示</a></li>
            <li><a href="<?php echo base_url('admin/admin/guestbook');?>">留言板</a></li>
            <li><a href="<?php echo base_url('admin/admin/add_article');?>">添加文章</a></li>
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
                <a><?php echo anchor('admin/admin/edit_tweets/'.$row['id'],'更新说说')?></a>
                <a><?php echo anchor('admin/admin/delete_tweets/'.$row['id'],'删除说说')?></a>
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
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/nav.js"></script>
</body>
</html>