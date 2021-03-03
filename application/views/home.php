<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 某普通上班族的博客</title>
    <meta name="google-site-verification" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, blog, 某普通上班族的博客, 编程, 软件开发, 程序员, 教程, Computer, PHP, Python, Learn to program"/>
    <meta name="description" content="Luna Nova - 想养一只普通猫咪的普通上班族，写写互联网技术和文艺文章，偶尔发发牢骚，卖卖萌(=ↀωↀ=)"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="home">
<!--nav-->
<?php $this->load->view('nav');?>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="c_left">
        <div class="s_tuijian">
            <h2>文章<span>推荐</span></h2>
        </div>
        <div class="content_text">
            <!--wz--><?php if (isset($rows)) { foreach ($rows as $row):?>
                <div class="wz">
                    <h3><?php echo $row->title;?></h3>
                    <dl>
                        <dt><img src="<?php echo base_url();?>static/images/s2.jpg" width="200" height="123" alt="文章图片"></dt>
                        <dd>
                            <div class="dd_text_1"><?php echo $row->content;?></div>
                            <p class="dd_text_2">
                                <span class="left author">Nova</span>
                                <span class="left sj">时间：<?php echo $row->date;?></span>
                                <span class="left fl">分类：<?php echo $row->type;?></span>
                                <span class="left yd">
                                    <?php echo anchor('home/article/' . $row->id .'-'. str_replace(' ', '-', $row->title),'阅读原文','class="ReadMore"')?>
                                </span>
                            <div class="clear"></div>
                            </p>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </div>
            <!--wz end--><?php endforeach;}?><br />&nbsp&nbsp
            <font color="blue" size="4"><?php echo $this->pagination->create_links();?></font>
        </div>
    </div>
    <!--left end-->
    <!--right-->
    <!--include bio-->
    <?php $this->load->view('bio');?>
</div>
<!--content end-->
<!--footer-->
<?php $this->load->view('footer');?>
</body>
</html>
