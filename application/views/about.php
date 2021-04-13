<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>About Nova - 关于我</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, LunaNova, Information, 某普通上班族的的个人简介"/>
    <meta name="description" content="About Nova, Ordinary office worker, 某普通上班族的的个人简介( =ノωヽ=)"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="about">
<!--nav-->
<?php $this->load->view('nav');?>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="about_me">
        <div class="weizi">
            <div class="wz_text">
                当前位置：首页><font color="red">关于我</font>
            </div>
        </div>
        <div class="about_content">
            博主是一个草根站长，喜欢研究web技术，也喜欢和每个友好的人做朋友。有点害羞，不常说话。(*/ω＼*)
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
