<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header_coworking.php'); ?>

<div class="project-description">
    <section class="hero">
        <?php
          $a = new Area('Header Image');
          $a->display($c);
        ?>
  </section>

  <section class="content">
      <div class="container">
          <?php
          $a = new Area('Project Desription');
          $a->display($c);
        ?>
      </div>
      <div class="clients">
        <div>
          <?php
              $a = new Area('Image 1');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Image 2');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Image 3');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Image 4');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Image 5');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Image 6');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Image 7');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Image 8');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Image 9');
              $a->display($c);
            ?>
        </div>
      </div>
      <div class="container vid-row">
        <div>
          <?php
              $a = new Area('Video 1');
              $a->display($c);
            ?>
        </div>
        <div>
          <?php
              $a = new Area('Video 2');
              $a->display($c);
            ?>
        </div>
      </div>
  </section>
    

<!-- endin of coworking area -->
</div>

<?php $this->inc('elements/footer.php'); ?>

