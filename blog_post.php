<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<?php
    $page = Page::getCurrentPage();
    $title = $page->getCollectionName();
    $datePublic = $page->getCollectionDatePublicObject()->format('j F, Y');
        if($image = $page->getAttribute('main_photo')):
            $image = $page->getAttribute('main_photo');
            $image_src = $image->getRelativePath();
       ?>

       <?php endif; ?>
           

<div class="internal blog-post">
<div class="content-wrapper">
  <div class="container">
  <article class="content">
      <img src="<?php echo $image_src ?>" class="blog-header" />
      <h1><?php echo $title ?></h1>
      <span class="date"><?php echo $datePublic ?></span>
      <p>
      	<?php
	        $a = new Area('Blog Content');
	        $a->display($c);
	   ?>
      </p>
  </article>
  </div>
</div>

</div>


<?php $this->inc('elements/footer.php'); ?>