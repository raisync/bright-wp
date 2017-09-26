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
	<div class="navbar">
		<div class="nav-fluid">
			<ul>
				<li>
					<a class="logo" href="#">
						<img src="<?php echo get_stylesheet_directory_uri(). '/src/logo.png' ?>" alt="Logo" class="d-inline-block align-top">
					</a>
				</li>
				<li class="active-page"><a href="#">Home</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<div class="right_col social">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/src/facebook.png">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/src/twitter.png">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/src/dribbble.png">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/src/behance.png">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/src/google plus.png">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/src/rss.png">
			</div>
		</div>
	</div>