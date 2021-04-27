<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="case-study">
   <section class="hero">
      <?php
         $a = new Area('Hero Image');
         $a->display($c);
   ?>
   </section>
   <?php
         $a = new Area('First Section');
         $a->display($c);
   ?>
   <?php
         $a = new Area('Second Section');
         $a->display($c);
   ?>

   <?php
         $a = new Area('Third Section');
         $a->display($c);
   ?>

   <?php
         $a = new Area('Fourth Section');
         $a->display($c);
   ?>
   <?php
         $a = new Area('Fifth Section');
         $a->display($c);
   ?>
   <?php
         $a = new Area('Sixth Section');
         $a->display($c);
   ?>
   <?php
         $a = new Area('Seventh Section');
         $a->display($c);
   ?>
   <?php
         $a = new Area('Eighth Section');
         $a->display($c);
   ?>
    <?php
         $a = new Area('Ninth Section');
         $a->display($c);
   ?>
   <?php
         $a = new Area('Tenth Section');
         $a->display($c);
   ?>      
</div>

<?php $this->inc('elements/footer.php'); ?>