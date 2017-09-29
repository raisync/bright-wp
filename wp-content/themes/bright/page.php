<?php get_header(); ?>

<div class="space"></div>

<h1><?php the_title(); ?></h1>

<div class="row">
<div class="col-sm-3"></div>

<div class="col-sm-6">
	<?php
	
	// Start the Loop.
	while ( have_posts() ) : the_post();
	
	// Include the page content template.
	if ( is_page('blog') ) {
  		get_template_part('blogs');
	} else {
		// $cat=get_cat_ID($post->post_title); 
		// $posts = get_posts ("category_name=service&posts_per_page=2");

		// if ($posts) {
		// 	foreach ($posts as $post) {
		// 		setup_postdata($post);
		// 	}
		// }

		get_template_part( 'content', 'page' );

		the_content();
		
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
	endwhile;

	?>
</div>
<div class="col-sm-3"></div>
</div>

<div class="space"></div>

<?php get_footer(); ?>