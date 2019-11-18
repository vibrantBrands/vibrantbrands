<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal">
<div class="content-wrapper">
  <div class="container">
  <article class="content">
      <?php
          $a = new Area('Internal Content');
          $a->display($c);
      ?>
  </article>
  </div>
</div>

</div>


<?php $this->inc('elements/footer.php'); ?>