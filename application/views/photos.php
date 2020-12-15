<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 相册展示</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="keywords" content="Luna, Nova, Photos, What's past is prologue, 凡是过往，皆为序章"/>
    <meta name="description" content="普通上班族的图片，凡是过往，皆为序章。(★≧▽^))★☆"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/photo.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body>
<!--nav-->
<?php $this->load->view('nav');?>
<!--nav end-->
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
<?php $this->load->view('footer');?>
<script type="text/javascript" src="<?php echo base_url();?>static/js/common.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>static/js/waterfall.js" ></script>
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
