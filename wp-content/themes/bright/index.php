<?php get_header(); ?>

	<div class="space"></div>

		<?php if( is_front_page() && is_home() ) { ?>

		    <?php get_template_part('blog_post'); ?>

		<?php } else { ?>

		    <?php get_template_part('page'); ?>

		<?php } ?>
	
	<div class="space"></div>

<?php get_footer(); ?>