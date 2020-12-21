<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更新文章</title>
    <link rel="stylesheet" href="<?php echo base_url();?>static/admin/css/login.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/admin/css/article.css">
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body>
<div class="wrap">
    <div class="container">
        <h1 style="margin: 0; text-align: center;"><font>Hi, Nova 👋</font></h1>
        <form action="<?php echo base_url('admin/admin/update_article/' . $article->id);?>" method="post">

            <label><input type="text" name="title" placeholder="title" value="<?php echo $article->title;?>"/></label>

            <textarea class="add" type="text" name="content" placeholder="content"><?php echo $article->content?></textarea>

            <label><input type="text" name="type" placeholder="type" value="<?php echo $article->type?>"/></label>

            <label><input type="text" name="date" placeholder="date" value="<?php echo date('Y-m-d');?>"/></label>

            <input type="submit" placeholder="修改文章" />

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
