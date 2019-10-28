<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vibrant Brands</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/lity.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

    <?php Loader::element('header_required'); ?>
</head>

<body class="vibrant">
  <div class="<?php echo $c->getPageWrapperClass()?>">

  <header>
      <div class="toggle-wrapper">
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
        <p>MENU</p>
     </div>
      <nav class="nav inactive">
        <ul>
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/services">Services</a>
          </li>
          <li>
            <a href="/case-studies">Case Studies</a>
          </li>
          <li>
              <a href="/about">About</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </nav>
  	<div class="logo-container">
      <a href='/'>
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
        <div class="date">SINCE 2002</div>
      </a>
    </div>
    <div class="border"></div>
  </header>