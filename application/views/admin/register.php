<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎来到Nova的博客！</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/admin/css/login.css"/>
    <link rel="icon" href="<?php echo base_url();?>static/images/favicon/favicon.ico">
</head>

<body>
<div class="wrap">
    <div class="container">
        <h1 style="color: white; margin: 0; text-align: center">Sign up</h1>
        <form action="<?php echo base_url('admin/admin/register');?>" method="post">
            <label><input type="text" name="username" placeholder="Your username"/></label>

            <label><input type="password" name="password" placeholder="password" /></label>

            <input type="submit" name="submit" value="Sign up"/>

            <label class="redirect">
                <a href="<?php echo base_url('admin/admin/login');?>">Already have an account? Click to log in!</a>
            </label>

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