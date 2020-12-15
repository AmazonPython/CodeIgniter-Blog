<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>Login success!</h1>
            </div>
            <p>You are now logged in.</p>
            <?php if (isset($rows)) { foreach ($rows as $row):?>
            <p><?php echo $row->$id;?></p>
            <?php endforeach;}?>
        </div>
    </div><!-- .row -->
</div><!-- .container -->
