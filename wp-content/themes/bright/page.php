<?php get_header(); ?>

<div class="space"></div>

<h1><?php the_title(); ?></h1>

<div style="margin-left: 100px; margin-right: 100px;">
	<?php
					// Start the Loop.
	while ( have_posts() ) : the_post();
						// Include the page content template.
		get_template_part( 'content', 'page' );

		$content = get_the_content();
		print $content;
							// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;

	?>
</div>

<div class="space"></div>

<?php get_footer(); ?>