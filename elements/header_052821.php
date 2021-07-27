<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"/>
    <link href="https://fonts.googleapis.com/css?family=Exo+2:ital,wght@0,800;1,800+Sans|Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/lity.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/lax.js" ></script>

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
  	<div class="logo-container">
      <a href='/'>
  		  <div class="logo">
          <div>
            <img src="<?php echo $this->getThemePath(); ?>/images/vibrant-logo.png" alt="Vibrant Logo">
          </div>
    		</div>
        <div class="top-date date">SINCE 2002</div>
      </a>
    </div>
    <div class="navigation">
            <?php   
              $bt = BlockType::getByHandle('autonav');
              $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
              //$bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
              $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
              $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
              $bt->controller->displaySubPageLevels = 'custom'; // 'enough', 'enough_plus1', 'all', 'custom'
              $bt->controller->displaySubPageLevelsNum = '1'; // if displaySubPages is set 'custom'
              $bt->render('templates/main_nav'); // for template 'templates/template_name';
              ?>
        </div>
    <div class="border"></div>
  </header>