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

   <section class="results">

      <div class="container" data-aos="fade-up">
               <h2>The Results</h2>
               <?php
                  $a = new Area('Results Overview');
                  $a->display($c);
            ?>
               
               <div class="stats">
                  <div>
                     <?php
                           $a = new Area('First Result');
                           $a->display($c);
                     ?>
                  </div>
                  <div>
                      <?php
                           $a = new Area('Second Result');
                           $a->display($c);
                     ?>
                  </div>
                  <div>
                      <?php
                           $a = new Area('Thi Result');
                           $a->display($c);
                     ?>
                  </div>
               </div> 

               <div class="cta-box" data-aos="fade-up">
                  <?php
                           $a = new Area('Question Text');
                           $a->display($c);
                     ?>
                  <p>
                     <span><a href="/contact">Vibrant can make it happen! <i class="fas fa-arrow-right"></i></a></span>
                  </p>
               </div>
      </div>



   </section>
        
</div>

<?php $this->inc('elements/footer.php'); ?>