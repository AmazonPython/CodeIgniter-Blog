<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 个人日记</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, LunaNova, Diaries, 普通上班族的的个人日记"/>
    <meta name="description" content="普通上班族的的个人日记__〆(￣ー￣ )"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/animate.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
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
            <div class="article-title"></div>
                <a class="article-time">时间：<?php echo $rows['date'];?></a>
                <a class="article-type">分类：<?php echo $rows['type'];?></a>
                <strong>服务器君耗时 {elapsed_time} 秒，内存消耗 {memory_usage}</strong>
            <div class="article-content">
                <p><?php echo $rows['content'];?></p>
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
