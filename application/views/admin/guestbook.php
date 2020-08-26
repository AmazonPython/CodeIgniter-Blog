<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 留言板</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, Guestbook, Friends"/>
    <meta name="description" content="普通上班族的留言板，是什么Friends来我这里留言了呢ฅ( ̳• ◡ • ̳)ฅ"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="guestbook-color">
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
    <div class="left" id="c_left">
        <div class="weizi">
            <div class="wz_text">当前位置：首页><h1>留言板</h1></div>
        </div>
        <div class="g_content">
            有什么想对我说的嘛？
            <?php if (isset($rows)) { foreach ($rows as $row):?>
                <h3>
                    <font color="#ff69b4">
                        <br />&nbsp&nbsp<?php echo $row['name']?>
                        &nbsp&nbsp&nbsp&nbsp<?php echo $row['date']?><br />
                        &nbsp&nbsp<?php echo $row['content']?><br /><br />
                        <a><?php echo anchor('admin/admin/delete_guestbook/'.$row['id'],'删除留言')?></a>
                        <a style="padding-left: 5%;">
                            <?php echo anchor('admin/admin/reply/'.$row['id'], 'Reply');?>
                        </a><br /><br />
                    </font>
                </h3>
            <?php endforeach;}?><br />&nbsp&nbsp
            <font color="blue" size="4"><?php echo $this->pagination->create_links();?></font>
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
