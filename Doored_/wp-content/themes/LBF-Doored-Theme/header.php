<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Kite+One|Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/filtrify.css">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/images/doored-favicon.png"> 

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="top">
  <div class="container">
    <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
    </h1>

      <!-- THE LINK FOR LIVE STREAM -->
      <div class="header--livestream">
        <a href="http://livestream.com/doubledoubleland" target="_blank">
          Watch Now
        </a>
      </div><!--end .header--livestream-->

    <div class="menu">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?> 
    </div><!--end .menu-->
  </div> <!-- /.container -->
</header><!--/.header-->


