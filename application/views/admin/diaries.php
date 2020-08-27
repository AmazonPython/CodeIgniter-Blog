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
<!--header start-->
<div id="header">
    <h1><font style="vertical-align: inherit;">Hi, Nova 👋</font></h1>
    <p>就做一阵风吧，有温柔也有英勇。</p>
</div>
<!--header end-->
<!--nav-->
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
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="riji">
        <div class="weizi">
            <div class="wz_text">当前位置：首页><h1>个人日记</h1></div>
        </div>
        <div class="rj_content">
            <!--时光--><?php if (isset($rows)) { foreach ($rows as $row):?>
            <div class="shiguang animated bounceIn">
                <div class="left sg_ico">
                    <img src="<?php echo base_url(); ?>static/images/my_1.jpg" width="120" height="120" alt="日记图标"/>
                </div>
                <div class="right sg_text">
                    <?php echo $row['content']?>
                </div>
                    <a style="padding-left: 3%"><?php echo $row['date']?></a>
                    <a style="padding-left: 45%;"><?php echo anchor('admin/admin/edit_diaries/'.$row['id'],'更新日记')?></a>
                    <a style="padding-left: 5%;"><?php echo anchor('admin/admin/delete_diaries/'.$row['id'],'删除日记')?></a>
                <div class="clear"></div>
            </div>
            <!--时光 end--><?php endforeach;}?>&nbsp&nbsp
            <font color="blue" size="5"><?echo $this->pagination->create_links();?></font>
        </div>
    </div>
    <!--end left -->
    <!--right-->
    <div class="right" id="c_right">
        <div class="s_about">
            <h2>关于博主</h2>
            <img src="<?php echo base_url();?>static/images/kfc.jpg" width="230" height="230" alt="博主"/>
            <p>博主：Nova</p>
            <p>职业：PHP开发工程师</p>
            <p>简介：响珰珰一粒铜豌豆</p>
            <p><br /><div class="clear"></div></p>
        </div>
        <!--栏目分类-->
        <div class="lanmubox">
            <div class="hd">
                <ul><li>友情链接</li><li>友情链接</li><li class="hd_3">友情链接</li></ul>
            </div>
            <div class="bd">
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                    <li><a href="#" title="">虚位以待</a></li>
                </ul>
            </div>
        </div>
        <!--end-->
    </div>
    <!--end  right-->
    <div class="clear"></div>
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
