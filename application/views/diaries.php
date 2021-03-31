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
    <meta name="keywords" content="Luna, Nova, Diaries, 普通上班族的的个人日记"/>
    <meta name="description" content="普通上班族的的个人日记__〆(￣ー￣ )"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/animate.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="diaries">
<!--nav-->
<?php $this->load->view('nav');?>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="riji">
        <div class="weizi">
            <div class="wz_text">
                当前位置：首页><font color="red">个人日记</font>
            </div>
        </div>
        <div class="rj_content">
            <!--时光--><?php if (isset($rows)) { foreach ($rows as $row):?>
            <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                    <img src="<?php echo base_url();?>static/images/my_1.jpg" width="125" height="125" alt="日记图标"/>
                </div>
                <div class="right sg_text">
                    <?php echo $row['content'];?>
                </div>
                    <a style="padding-left: 3%;"><?php echo $row['date'];?></a>
                    <a style="padding-left: 58%;">
                        <?php echo anchor('home/diaries_details/'.$row['id'], '查看详情')?>
                    </a>
                <div class="clear"></div>
            </div>
            <!--时光 end--><?php endforeach;}?>&nbsp&nbsp
            <font color="blue" size="5"><?php echo $this->pagination->create_links();?></font>
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
