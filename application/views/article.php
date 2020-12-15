<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - <?php echo $rows->title;?></title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, Articles, 某普通上班族的博客, 编程, 软件开发, 程序员, 教程, Computer, PHP, Python, Learn to program"/>
    <meta name="description" content="普通上班族写的的文章，内容涵盖互联网、计算机原理、编程教程与文艺文章，偶尔发发牢骚，卖卖萌o(^・x・^)o"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body>
<!--nav-->
<?php $this->load->view('nav');?>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="learn">
        <div class="content_text">
            <div class="article-title">
                <h1><?php echo $rows->title;?></h1>
            </div>
                <a class="article-time">时间：<?php echo $rows->date;?></a>
                <a class="article-type">分类：<?php echo $rows->type;?></a>
            <div class="article-content">
                <p><?php echo $rows->content;?></p>
            </div>
        </div>
    </div>
    <!--end left -->
    <!--right-->
    <!--include bio-->
    <?php $this->load->view('bio');?>
</div>
<!--content end-->
<!--footer-->
<?php $this->load->view('footer');?>
</body>
</html>
