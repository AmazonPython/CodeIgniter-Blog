<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 学无止境</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, Learning journey"/>
    <meta name="description" content="普通上班族的学习之旅，学习各种好玩有趣的东西ฅ( ＞ω＜)ฅ"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="learnjourney">
<!--nav-->
<?php $this->load->view('nav');?>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="learn">
        <div class="weizi">
            <div class="wz_text">当前位置：首页><h1>学无止境</h1></div>
        </div>
        <div class="content_text">
            <!--wz--><?php if (isset($rows)) { foreach ($rows as $row):?>
            <div class="wz">
                <h3><?php echo $row['title'];?></h3>
                <dl>
                    <dt><img src="<?php echo base_url();?>static/images/s2.jpg" width="200" height="123" alt="文章图片"></dt>
                    <dd>
                        <p class="dd_text_1"><?php echo $row['content'];?></p>
                        <p class="dd_text_2">
                            <span class="left author">Nova</span>
                            <span class="left sj">时间：<?php echo $row['date'];?></span>
                            <span class="left fl">分类：<?php echo $row['type'];?></span>
                            <span class="left yd">
                                <?php echo anchor('home/article/' . $row['id'] .'-'. str_replace(' ', '-', $row['title']),'阅读全文','class="ReadMore"')?>
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
