<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="specialty-wrapper">

<div class="internal-hero-image">
    <?php
         $a = new Area('Hero Image');
         $a->display($c);
   ?>
</div>
<div class="container">
     <?php
         $a = new Area('Header');
         $a->display($c);
   ?>
</div>

<!-- first section --> 

   <section class="services">
    <div class="container">
        <div><?php
            $a = new Area('Branding Left');
            $a->display($c);
        ?></div>
        <div class="reverse-stripe"><?php
            $a = new Area('Branding Right');
            $a->display($c);
        ?></div>
        </div>
        <div class="container photo">
            <?php
                $a = new Area('Link and Image 1');
                $a->display($c);
            ?>
        </div>
   </section>
   
    <!-- second section --> 

   <section class="services">
    <div class="container">
        <div><?php
            $a = new Area('Website Left');
            $a->display($c);
        ?></div>
        <div class="reverse-stripe"><?php
            $a = new Area('Website Right');
            $a->display($c);
        ?></div>
    </div>
    <div class="container photo">
        <?php
            $a = new Area('Link and Image 2');
            $a->display($c);
        ?>
    </div>
   </section>

   <!-- third section --> 

   <section class="services">
    <div class="container">
        <div><?php
            $a = new Area('Digital Left');
            $a->display($c);
        ?></div>
        <div><?php
            $a = new Area('Digital Right');
            $a->display($c);
        ?></div>
    </div>
    <div class="container photo">
        <?php
            $a = new Area('Link and Image 3');
            $a->display($c);
        ?>
    </div>
   </section>

    <!-- fourth section --> 

   <section class="services">
    <div class="container">
        <div><?php
            $a = new Area('Video Left');
            $a->display($c);
        ?></div>
        <div class="reverse-stripe"><?php
            $a = new Area('Video Right');
            $a->display($c);
        ?></div>
    </div>
    <div class="container photo">
        <?php
            $a = new Area('Link and Image 4');
            $a->display($c);
        ?>
    </div>  
   </section>

   <!-- fifth section --> 

   <section class="services">
    <div class="container">
        <div><?php
            $a = new Area('Content Writing Left');
            $a->display($c);
        ?></div>
        <div class="reverse-stripe"><?php
            $a = new Area('Content Writing Right');
            $a->display($c);
        ?></div>
    </div>
    <div class="container photo">
        <?php
            $a = new Area('Link and Image 5');
            $a->display($c);
        ?>
    </div>
   </section>

     <!-- sixth section --> 

   <section class="specialties">
    <div class="container photo">
        <?php
            $a = new Area('Services Section');
            $a->display($c);
        ?>
    </div>
    
   </section>
       
   </div>
</div>

</div>

<?php $this->inc('elements/footer.php'); ?>

