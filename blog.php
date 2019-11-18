<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal">
<div class="content-wrapper">
  <div class="container">
	<div class="blog-list">
      <?php  
	  $pl = new PageList();
	  $pl->filterByCollectionTypeHandle('blog_post');
	  $pl->sortByDisplayOrder('alpha_asc'); // Sort alphebetically
	 
	  $pages = $pl->get(); 

	  // Display Page Name and Description
	  foreach ($pages as $page){  ?>
		<div class="blog-entry">
			<?php echo $page->getAttribute('thumbnail') ?>

			<h1>
				<?php  	
				    echo $page->getCollectionName();
				?>
			</h1>
			<span class="date">
				<?php 
				$datePublic = $page->getCollectionDatePublicObject()->format('j F, Y');
				echo $datePublic ?>
			</span>
			<p>
				<?php  	
				    echo $page->getCollectionDescription();
				?>
			</p>
		</div>

		<?php } ?>
	</div>
  </div>
</div>

</div>


<?php $this->inc('elements/footer.php'); ?>