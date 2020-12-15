<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="header">
    <h1>某普通上班族的个人博客</h1>
    <p>就做一阵风吧，有温柔也有英勇。</p>

    <form class="search" action="<?php echo base_url('home/search')?>" method=post>
        <table bgcolor="#FFFFFF">
            <tr>
                <td>
                    <input type=text name=keyword size=11 value="" placeholder="输入关键字">
                    <input type=hidden name=ie value=UTF8>
                    <input type=hidden name=oe value=UTF8>
                    <input type=hidden name=hl value=zh-CN>
                    <input type=submit name=btnG value="搜索">
                    <font size=-1>
                        <input type=hidden name=domains value="YOUR DOMAIN NAME"><br>
                    </font>
                </td>
            </tr>
        </table>
    </form>
</div>

<div id="nav">
    <ul>
        <li><a href="<?php echo base_url('admin/admin/article');?>">文章</a></li>
        <li><a href="<?php echo base_url('admin/admin/tweets');?>">碎言碎语</a></li>
        <li><a href="<?php echo base_url('admin/admin/diaries');?>">个人日记</a></li>
        <li><a href="<?php echo base_url('admin/admin/photos');?>">相册展示</a></li>
        <li><a href="<?php echo base_url('admin/admin/guestbook');?>">留言板</a></li>
        <li><a href="<?php echo base_url('admin/admin/add_article');?>">添加文章</a></li>
        <div class="clear"></div>
    </ul>
</div>
