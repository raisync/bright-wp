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
	<div class="navbar" style="">
		<div class="nav-fluid">

			<a href="<?php echo get_home_url(); ?>"><img src="<?php echo ot_get_option( 'logo' ); ?>" id="logo" style=""></a>

			<div class="nav-main" style="margin-right: 10%">
				<?php wp_nav_menu( array(
					'menu'           => 'navmenu',
					'theme_location' => '__no_such_location'
					) );
				?>
			</div>

			<div class="right_col social" style="margin-top: -70px; float: right;">
				<a href="https://www.facebook.com/" target="_blank"><img src="<?php echo ot_get_option( 'fb' ); ?>"></a>
				<a href="https://twitter.com/" target="_blank"><img src="<?php echo ot_get_option( 'tw' ); ?>"></a>
				<a href="https://dribbble.com/" target="_blank"><img src="<?php echo ot_get_option( 'dr' ); ?>"></a>
				<a href="https://www.behance.net/" target="_blank"><img src="<?php echo ot_get_option( 'be' ); ?>"></a>
				<a href="https://plus.google.com/" target="_blank"><img src="<?php echo ot_get_option( 'gp' ); ?>"></a>
				<a href="https://www.rss.com/" target="_blank"><img src="<?php echo ot_get_option( 'rs' ); ?>"></a>
			</div>
		</div>
	</div>