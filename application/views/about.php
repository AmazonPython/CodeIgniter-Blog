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
            <big>
                我的名字叫<a href="" title="Nova">Nova</a>，今年<a href="" title="其实只有二十四岁(*/ω＼*)"><del>33岁</del></a>。
                住在<a href="" title="广州市白云机场一带">广州市白云机场</a>一带 ，未婚，是一名普通上班族。
                每天都要加班到晚上8点才能回家。我不抽烟，酒仅止于浅尝。晚上11点睡，每天要睡足8个小时。
                睡前，我一定喝一杯温牛奶，然后做20分钟的柔软操。上了床，马上熟睡，一觉到天亮，决不把疲劳和压力留到第二天。
                医生都说我很正常。
            </big>
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
