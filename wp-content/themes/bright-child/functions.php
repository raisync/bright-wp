<?php 
	add_action('wp_enqueque_scripts', 'wp_enqueque_child_parent_styles', 10, 1);
	function wp_enqueque_child_parent_styles() {
		wp_enqueque_style( 'parent_style_sheet', get_template_directory_uri()."/style.css" );
		wp_enqueque_style( 'child_style_sheet', get_stylesheet_directory_uri()."/style.css", array( 'parent_style_sheet' ) );
	}
 ?>