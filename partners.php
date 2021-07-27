<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<div class="specialty-wrapper membership">

	<div class="internal-hero-image">
	    <?php
	         $a = new Area('Hero Image');
	         $a->display($c);
	   ?>
	</div>

	<div class="container">
     <?php
         $a = new Area('Descriptive Text');
         $a->display($c);
   	?>
	</div>

	<div class="container">
		<h2>Online Partners</h2>
	</div>
  
	  <div class="container partner-logos">
		    <?php
			  $fs = FileSet::getByName('Online Partners');
			  $fl = new FileList();
			  $fl->filterBySet($fs);
			  $fl->sortBy('fsDisplayOrder', 'asc');
			  $files = $fl->get();
			 
			  foreach($files as $f) {
			    $downloadpath = $f->getDownloadURL();
			    $imagepath = $f->getRelativePath();
			    $description = $f->getDescription();

			    if($description == ''): ?>
						<img src='<?php echo $imagepath; ?>' />
			    <?php else: ?>
	
			    <a href='<?php echo $description; ?>' target='_blank'>
			        <img src='<?php echo $imagepath; ?>' />
			    </a>
			    <?php endif; ?>
	  <?php }
	?>
	  </div>

  <div class="border"></div>

  <div class="gray-bg">
  	<div class="container">
  		<h2>Content Management System Partners</h2>
  	</div>
  	<div class="container partner-logos">
	      <?php
			  $fs = FileSet::getByName('Content Management');
			  $fl = new FileList();
			  $fl->filterBySet($fs);
			  $fl->sortBy('fsDisplayOrder', 'asc');
			  $files = $fl->get();
			 
			  foreach($files as $f) {
			    $downloadpath = $f->getDownloadURL();
			    $imagepath = $f->getRelativePath();
			    $description = $f->getDescription();

			    if($description == ''): ?>
						<img src='<?php echo $imagepath; ?>' />
			    <?php else: ?>
	
			    <a href='<?php echo $description; ?>' target='_blank'>
			        <img src='<?php echo $imagepath; ?>' />
			    </a>
			    <?php endif; ?>
	  	<?php }
		?>
  	</div>
  </div>

	<div class="border"></div>

	<div class="container">
		<h2>Project Management</h2>
	</div>

  <div class="container partner-logos">
  	
  	<?php
			  $fs = FileSet::getByName('Project Management');
			  $fl = new FileList();
			  $fl->filterBySet($fs);
			  $fl->sortBy('fsDisplayOrder', 'asc');
			  $files = $fl->get();
			 
			  foreach($files as $f) {
			    $downloadpath = $f->getDownloadURL();
			    $imagepath = $f->getRelativePath();
			    $description = $f->getDescription();

			    if($description == ''): ?>
						<img src='<?php echo $imagepath; ?>' />
			    <?php else: ?>
	
			    <a href='<?php echo $description; ?>' target='_blank'>
			        <img src='<?php echo $imagepath; ?>' />
			    </a>
			    <?php endif; ?>
	  <?php }
	?>
	      
  </div>

  <div class="border"></div>

  <div class="gray-bg">

  <div class="container">
  	<h2>Memberships & Associations</h2>
  </div>
  	<div class="container partner-logos">
  		
	      <?php
			  $fs = FileSet::getByName('Membership Associations');
			  $fl = new FileList();
			  $fl->filterBySet($fs);
			  $fl->sortBy('fsDisplayOrder', 'asc');
			  $files = $fl->get();
			 
			  foreach($files as $f) {
			    $downloadpath = $f->getDownloadURL();
			    $imagepath = $f->getRelativePath();
			    $description = $f->getDescription();

			    if($description == ''): ?>
						<img src='<?php echo $imagepath; ?>' />
			    <?php else: ?>
	
			    <a href='<?php echo $description; ?>' target='_blank'>
			        <img src='<?php echo $imagepath; ?>' />
			    </a>
			    <?php endif; ?>
	  <?php }
	?>
  	</div>
  </div>

  <div class="border"></div>

  <div class="container">
  	<h2>Hosting Partners</h2>
  </div>

  <div class="container partner-logos">
	      <?php
			  $fs = FileSet::getByName('Hosting Partners');
			  $fl = new FileList();
			  $fl->filterBySet($fs);
			  $fl->sortBy('fsDisplayOrder', 'asc');
			  $files = $fl->get();
			 
			  foreach($files as $f) {
			    $downloadpath = $f->getDownloadURL();
			    $imagepath = $f->getRelativePath();
			    $description = $f->getDescription();

			    if($description == ''): ?>
						<img src='<?php echo $imagepath; ?>' />
			    <?php else: ?>
	
			    <a href='<?php echo $description; ?>' target='_blank'>
			        <img src='<?php echo $imagepath; ?>' />
			    </a>
			    <?php endif; ?>
	  <?php }
	?>
  </div>

  <div class="border"></div>

  <div class="gray-bg">
  	 <div class="container">
  			<h2>Technology Partners</h2>
  	</div>
  	<div class="container partner-logos">
	      <?php
			  $fs = FileSet::getByName('Technology Partners');
			  $fl = new FileList();
			  $fl->filterBySet($fs);
			  $fl->sortBy('fsDisplayOrder', 'asc');
			  $files = $fl->get();
			 
			  foreach($files as $f) {
			    $downloadpath = $f->getDownloadURL();
			    $imagepath = $f->getRelativePath();
			    $description = $f->getDescription();

			    if($description == ''): ?>
						<img src='<?php echo $imagepath; ?>' />
			    <?php else: ?>
	
			    <a href='<?php echo $description; ?>' target='_blank'>
			        <img src='<?php echo $imagepath; ?>' />
			    </a>
			    <?php endif; ?>
	  <?php }
	?>
  	</div>
  </div>
</div>


<?php $this->inc('elements/footer.php'); ?>