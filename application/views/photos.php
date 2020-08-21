<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 相册展示</title>
    <meta name="msvalidate.01" content="3ED833EEEC8B466015F352CA0CEC159F" />
    <meta name="baidu-site-verification" content="Een7k8JYLQ" />
    <meta name="keywords" content="Luna, Nova, Photos, What's past is prologue, 凡是过往，皆为序章"/>
    <meta name="description" content="普通上班族的图片，凡是过往，皆为序章。(★≧▽^))★☆"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/photo.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body>
<!--header start-->
<div id="header">
    <h1>某普通上班族的个人博客</h1>
    <p>就做一阵风吧，有温柔也有英勇。</p>
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
</div>
<!--header end-->
<!--content start-->
<div id="content_xc">
    <div class="weizi">
        <div class="wz_text">当前位置：首页><h1>相册展示</h1></div>
    </div>
    <div class="xc_content">
        <div class="con-bg">
            <div class="w960 mt_10">
                <div class="w650">
                    <ul class="tips" id="wf-main" style="display:none" >
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/6.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/1.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/2.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/3.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/4.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/5.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/6.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/5.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/4.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/3.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/2.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/1.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/2.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/3.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/4.jpg" width="197" height="273" alt="照片墙" /></li>
                        <li class="wf-cld"><img rel="lazy" lazy_src="<?php echo base_url(); ?>static/images/photo/5.jpg" width="197" height="273" alt="照片墙" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--content end-->
<!--footer-->
<div id="footer">
    <p>Design by：Nova <?php echo date('Y-m-d');?></p>
</div>
<script type="text/javascript" src="<?php echo base_url();?>static/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/common.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/waterfall.js" ></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>static/js/html5.js"></script>
<![endif]-->

<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/nav.js"></script>
<script>

    var timer, m = 0, m1 = $("img[rel='lazy']").length;

    function fade() {

        $("img[rel='lazy']").each(function () {

            var $scroTop = $(this).offset();

            if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {

                $(this).hide();

                $(this).attr("src", $(this).attr("lazy_src"));

                $(this).attr("top", $scroTop.top);

                $(this).removeAttr("rel");

                $(this).removeAttr("lazy_src");

                $(this).fadeIn(600);

                var _left = $(this).parent().parent().attr("_left");

                if (_left != undefined)

                    $(this).parent().parent().animate({ left: _left }, 400);

                m++;

            }

        });

        if (m < m1) { timer = window.setTimeout(fade, 300); }

        else { window.clearTimeout(timer); }

    }

    $(function () {

        $("#wf-main img[rel='lazy']").each(function (i) {

            var _left = $(this).parent().parent().css("left").replace("px", "");

            $(this).parent().parent().attr("_left", _left);

            $(this).parent().parent().css("left", 0);

        });

        fade();

    });

    $(".loading").hide();

    $("#wf-main").show();

</script>
</body>
</html>