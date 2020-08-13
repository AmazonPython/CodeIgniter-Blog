<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加说说</title>
    <link rel="stylesheet" href="<?php echo base_url();?>static/admin/css/article.css">
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body>
<div class="wrap">
    <div class="container">

        <h1 style="margin: 0; text-align: center;"><font>Hi, Nova 👋</font></h1>
        <a href="<?= base_url('admin/admin/add_diaries')?>">写日记</a>
        <a href="<?= base_url('admin/admin/add_article')?>">写文章</a>
        <a href="<?= base_url('admin/admin/article')?>">后台首页</a>
        <a href="<?= base_url('admin/admin/logout')?>">登出</a>

        <form action="<?php echo base_url('admin/admin/add_tweets');?>" method="post">
            <textarea class="add" type="text" name="content" placeholder="碎言碎语"></textarea>

            <label><input type="text" name="date" placeholder="date" value="<?php echo date('Y-m-d H:i:s');?>"/></label>

            <input type="submit" name="submit" value="添加说说"/>

            <p class="change_link" style="text-align: center"></p>
        </form>

    </div>
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
</body>
</html>