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
<!--nav-->
<?php $this->load->view('admin/nav');?>
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
                        <a><?php echo anchor('admin/admin/delete_guestbook/' . $row['id'],'删除留言')?></a>
                        <a style="padding-left: 5%;">
                            <?php echo anchor('admin/admin/reply/' . $row['id'], 'Reply');?>
                        </a><br /><br />
                    </font>
                </h3>
            <?php endforeach;}?><br />&nbsp&nbsp
            <font color="blue" size="4"><?php echo $this->pagination->create_links();?></font>
        </div>
    </div>
    <!--end left -->
    <!--right-->
    <!--include bio-->
    <?php $this->load->view('bio');?>
</div>
<!--content end-->
<!--footer-->
<?php $this->load->view('footer');?></body>
</html>
