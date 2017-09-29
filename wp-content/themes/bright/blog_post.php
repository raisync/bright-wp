
<div id="images row" style="padding-bottom: 30px; padding-top: 30px;">

	<?php query_posts('post_type=post&post_status=publish&posts_per_page=8&paged='. get_query_var('paged')); ?>

	<?php if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

			<div class="col-sm-3">
				<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?> style="padding-bottom: 30px;">


					<a href="<?php the_permalink(); ?>"><strong><?php the_title();?></strong>
					</a><br>

					<small>
						<?php the_tags(''); ?>
					</small>
					<div class="box">
					<!-- <a href="<?php the_permalink(); ?>" class="featimage"><?php the_post_thumbnail( array(200,220) ); ?></a> -->
						<img src="<?php bloginfo('stylesheet_directory'); ?>/src/search.png" class="search" style="margin-top: 130px;">
					</div>

					<!-- <?php the_excerpt(__('Continue reading »','example')); ?> -->

				</div><!-- /#post-<?php get_the_ID(); ?> -->

			</div>
		<?php endwhile; ?>

		<div class="navigation" style="text-align: center;">
			<?php wp_pagenavi(); ?>
		</div><!-- /.navigation -->

	<?php else: ?>

		<div id="post-404" class="noposts">

			<p><?php _e('None found.','example'); ?></p>

		</div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>
			</div><!-- /#content -->