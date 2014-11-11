<?php

	if(!defined('MR_THEME_DIR')) {
		define('MR_THEME_DIR', get_theme_root().'/'.get_template().'/');
	}	

	if(!defined('MR_THEME_URL')) {
		define('MR_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
	}

	// MENU

	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'header-menu' => __('Główne menu'),
	      'footer-menu' => __('Menu w stopce')
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );

	// SIDEABR 

	if ( function_exists('register_sidebar') )
    if ( function_exists('register_sidebar') )
      register_sidebar(array('name'=>'Sidebar',
      'description' => 'Sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div></div>',
      'before_title' => '<h4>',
      'after_title' => '</h4><div class="content">'
	));


  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support('post-thumbnails', array('post'));
    set_post_thumbnail_size( 205, 210);

    add_image_size( 'post-thumb', 700, 230, array( 'left', 'top' ) );
  }


?>