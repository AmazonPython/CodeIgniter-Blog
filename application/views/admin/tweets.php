<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Nova's blog - 碎言碎语</title>
    <meta name="msvalidate.01" content="" />
    <meta name="baidu-site-verification" content="" />
    <meta name="author" content="LunaNova">
    <meta name="keywords" content="Luna, Nova, Tweets"/>
    <meta name="description" content="普通上班族发的牢骚(つ´ω`)つ"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/index.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/css/background.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body id="tweets">
<!--nav-->
<?php $this->load->view('admin/nav');?>
<!--nav end-->
<!--content start-->
<div id="say">
    <div class="weizi">
        <div class="wz_text">当前位置：首页><h1>碎言碎语</h1></div>
    </div>
    <?php if (isset($rows)) { foreach ($rows as $row): ?>
        <ul class="say_box">
            <div class="sy">
                <p><?php echo $row['content']?></p>
                <a><?php echo anchor('admin/admin/edit_tweets/' . $row['id'],'更新说说')?></a>
                <a><?php echo anchor('admin/admin/delete_tweets/' . $row['id'],'删除说说')?></a>
            </div>
            <span class="dateview"><?php echo $row['date']?></span>
        </ul>
    <?php endforeach;}?><br />&nbsp&nbsp
    <font color="blue" size="5"><?php echo $this->pagination->create_links();?></font>
</div>
<!--content end-->
<!--footer-->
<?php $this->load->view('footer');?>
</body>
</html>
