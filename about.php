<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="case-study about">
   <section class="hero-video">
        <div class="textbox">
               <?php
                     $a = new Area('Header Text');
                     $a->display($c);
               ?>
        </div>
        <div class="video-container">
            <video muted autoplay>
                <source src="<?php echo $this->getThemePath(); ?>/video/Vibrant_About.mp4" type="video/mp4"> Your browser does not support the video tag.
            </video>
        </div>
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