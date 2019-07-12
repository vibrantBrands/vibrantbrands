<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php Loader::element('header_required'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vibrant Brands</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/style.css">
</head>

<body class="vibrant">
  <div class="<?php echo $c->getPageWrapperClass()?>">

  <header>
  	<nav>
  		<div class="logo">
        <div>
          <span class="vibrant">VIBRANT</span>
        </div>
        <div>
          <img src="<?php echo $this->getThemePath(); ?>/images/vibrant-logo.png" alt="Vibrant Logo">
        </div>
		    <div>
          <span class="brands">BRANDS</span>  
        </div>
  		</div>
    </nav>
    <div class="border"></div>
  </header>