<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>学无止境 - Nova's Blog</title>
    <meta name="msvalidate.01" content="3ED833EEEC8B466015F352CA0CEC159F" />
    <meta name="baidu-site-verification" content="Een7k8JYLQ" />
    <meta name="keywords" content="Luna Nova's Learning journey"/>
    <meta name="description" content="普通上班族的学习之旅ฅ( ＞ω＜)ฅ"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="learnjourney">
<!--header start-->
<div id="header">
    <h1>个人博客</h1>
    <p>就做一阵风吧，有温柔也有英勇。</p>
</div>
<!--header end-->
<!--nav-->
<div id="nav">
    <ul>
        <li><a href="<?php echo base_url('home/index');?>">首页</a></li>
        <li><a href="<?php echo base_url('home/about');?>">关于我</a></li>
        <li><a href="<?php echo base_url('home/tweets');?>">碎言碎语</a></li>
        <li><a href="<?php echo base_url('home/diaries');?>">个人日记</a></li>
        <li><a href="<?php echo base_url('home/photos');?>">相册展示</a></li>
        <li><a href="<?php echo base_url('home/learn');?>">学无止境</a></li>
        <li><a href="<?php echo base_url('home/guestbook');?>">留言板</a></li>
        <div class="clear"></div>
    </ul>
</div>
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
                    <dt><img src="<?php echo base_url();?>static/images/s2.jpg" width="200" height="123" alt=""></dt>
                    <dd>
                        <p class="dd_text_1"><?php echo $row['content'];?></p>
                        <p class="dd_text_2">
                            <span class="left author">Nova</span>
                            <span class="left sj">时间：<?php echo $row['date'];?></span>
                            <span class="left fl">分类：<?php echo $row['type'];?></span>
                            <span class="left yd"><?php echo anchor('home/article/'.$row['id'],'阅读全文','class="ReadMore"')?></span>
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

<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/nav.js"></script>
</body>
</html>