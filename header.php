<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="<?php echo MR_THEME_URL ?>css/reset.css">
    <link rel="stylesheet" href="<?php echo MR_THEME_URL ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo MR_THEME_URL ?>css/screen.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  </head>
  <body>
  
    <nav>
      <div class="container">
        <a href="<?php echo home_url(); ?>" class="logo">LOGO</a>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>
    </nav>