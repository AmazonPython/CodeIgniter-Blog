<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>回复留言</title>
    <link rel="stylesheet" href="<?php echo base_url();?>static/admin/css/article.css">
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body>
<div class="wrap">
    <div class="container">
        <h1 style="margin: 0; text-align: center;"><font>你好，旅行者。 👋</font></h1>

        <form action="<?php echo base_url('admin/admin/reply_store');?>" method="post">
            <label><input type="text" name="name" value="Nova &nbsp&nbsp&nbsp@<?php echo $rows->name;?>" maxlength="15" placeholder="评论者" required/></label>

            <textarea class="add" type="text" name="content" maxlength="255" placeholder="想想看说什么好呢？" required></textarea>

            <label><input type="text" name="date" readonly="readonly" value="<?php echo date('Y-m-d H:i:s');?>"/></label>

            <input type="submit" name="submit" value="ヽ( =ノωヽ=)ﾉstart"/>

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