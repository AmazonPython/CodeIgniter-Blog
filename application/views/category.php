<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 文章分类</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, LunaNova, Learning journey"/>
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
            <div class="wz_text">
                当前位置：首页><font color="red">文章分类</font>
            </div>
        </div>
        <div class="content_text">
            <!--wz--><?php if (isset($rows)) { foreach ($rows as $row):?>
            <div class="wz">
                <h3>
                    <span class="left fl">&nbsp&nbsp类别：<?php echo $row->type;?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                    <span class="left yd">
                        <?php echo anchor('home/category_details/' . $row->type,'点击阅读','class="ReadMore"')?>
                    </span>
                </h3>
                <br />
            </div>
            <!--wz end--><?php endforeach;}?>
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
