<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="contact">
   <?php
        $a = new Area('Contact Content');
        $a->display($c);
    ?>  
        
</div>

<?php $this->inc('elements/footer.php'); ?>