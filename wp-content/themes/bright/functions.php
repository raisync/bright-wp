<?php
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div> <!-- end .widget -->',
			'before_title' => '<h3 class="title">',
			'after_title' => '</h3>',
			));
		}

	function theme_enqueue_styles() {
	    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/icons/icomoon/styles.css' );
	}