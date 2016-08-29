<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700" rel="stylesheet">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
  
</head>


<body <?php body_class(); ?>>

<header>

  <div class="container">
  <div class="fuckyou" id="">
       <div class="fa fa-bars " title="menu">
        <div id="nav-icon4">
         <span></span>
         <span></span>
         <span></span>
       </div>
       </div>

       
     </div>

   <div class="headerMenu headerHeaderMenu" id="dropdownn"> 

    <?php wp_nav_menu( array(
       'container' => false,
       'theme_location' => 'primary'
     )); ?>
      <div class="search">
       <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
         
       </div>
    </div>

  </div> <!-- /.container -->
</header><!--/.header-->

