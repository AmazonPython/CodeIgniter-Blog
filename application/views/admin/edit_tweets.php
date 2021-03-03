<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更新说说</title>
    <link rel="stylesheet" href="<?php echo base_url();?>static/admin/css/login.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>static/admin/css/article.css">
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body>
<div class="wrap">
    <div class="container">
        <h1 style="margin: 0; text-align: center;"><font>Hi, Nova 👋</font></h1>
        <form action="<?php echo base_url('admin/admin/update_tweets/' . $tweets->id);?>" method="post">

            <textarea id="image-tools" class="add" type="text" name="content" placeholder="content"><?php echo $tweets->content?></textarea>

            <label><input type="text" name="date" placeholder="date" value="<?php echo date('Y-m-d H:i:s');?>"/></label>

            <input type="submit" placeholder="修改说说" />

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
<!--footer-->
<?php $this->load->view('admin/footer');?>
</body>
</html>
