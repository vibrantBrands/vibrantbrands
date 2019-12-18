<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="internal">
<div class="content-wrapper">
  <div class="container">
	<div class="blog-list">
		<h1>Blog</h1>
      <?php  
	  $pl = new PageList();
	  $pl->filterByCollectionTypeHandle('blog_post');
	  $pl->sortByDisplayOrder('alpha_asc'); // Sort alphebetically
	 
	  $pages = $pl->get(); 
	  

	  // Display Page Name and Description
	  foreach ($pages as $page){  ?>

	  	<?php
	  		$thumbnail = $page->getAttribute('thumbnail');
	  		$url = $page->getCollectionLink();
	  	?>


		<div class="blog-entry">
			<?php if (is_object($thumbnail)) {
                        ?>
                            <?php
                            $img = Core::make('html/image', array($thumbnail));
                            $tag = $img->getTag();
                            echo $tag; ?>
                        <?php
                    } ?>
			<h2>
				<?php  	
				    echo $page->getCollectionName();
				?> 
			</h2>
			<div class="date">
				<?php 
				$datePublic = $page->getCollectionDatePublicObject()->format('j F, Y');
				echo $datePublic ?>
			</div>
	
				<?php  	
				    echo $page->getCollectionDescription();
				?>

				<p><a href='<?php echo h($url) ?>'>Read more</a> ></p>
			</p>
		</div>

		<?php } ?>
	</div>
  </div>
</div>

</div>


<?php $this->inc('elements/footer.php'); ?>