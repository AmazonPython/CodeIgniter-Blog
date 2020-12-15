<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's Blog - 搜索结果</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, Articles Search"/>
    <meta name="description" content="看看在普通上班族的博客里搜出了什么好东西？o(^・x・^)o"/>
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
    <div class="left" id="learn"><?php foreach($rows as $row){ ?>
        <div class="content_text">
            <div class="article-title">
                <h1><?php echo $row->title;?></h1>
            </div>
            <a class="article-time">时间：<?php echo $row->date;?></a>
            <a class="article-type">分类：<?php echo $row->type;?></a>
            <div class="article-content">
                <p><?php echo $row->content;?></p>
            </div>
        </div><?php } ?>
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
