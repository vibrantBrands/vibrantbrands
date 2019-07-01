<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php Loader::element('header_required'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vibrant Brands</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/style.css">
</head>

<body class="vibrant">
  <div class="<?php echo $c->getPageWrapperClass()?>"></div>

  <header>
  	<nav>
  		<div class="logo">
        <div>
          <span class="vibrant">VIBRANT</span>
        </div>
		    	<img src="<?php echo $this->getThemePath(); ?>/images/mark-full-color.svg" alt="Vibrant Logo" class="logo">
		    <div>
          <span class="brands">BRANDS</span>  
        </div>
  		</div>
    </nav>
    <div class="border"></div>
  </header>