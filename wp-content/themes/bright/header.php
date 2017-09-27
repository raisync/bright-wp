<!DOCTYPE html>
<html>
<head>
	<title>Bright</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar" style="margin-right: -50%;">
		<div class="nav-fluid">

			<img src="<?php bloginfo('stylesheet_directory'); ?>/src/logo.png" style="margin-left: 10%; margin-right: -10%; margin-top: -20px;">

			<div style="margin-right: 10%">
				<?php wp_nav_menu( array(
					'menu'           => 'navmenu',
					'theme_location' => '__no_such_location'
					) );
				?>
			</div>

			<div class="right_col social" style="margin-top: -70px; float: right;">
				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/src/facebook.png"></a>
				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/src/twitter.png"></a>
				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/src/dribbble.png"></a>
				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/src/behance.png"></a>
				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/src/google plus.png"></a>
				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/src/rss.png"></a>
			</div>
		</div>
	</div>