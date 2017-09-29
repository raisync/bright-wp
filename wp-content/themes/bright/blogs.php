<div class="row blogs">
	<div>
		<?php query_posts('post_type=post&post_status=publish&posts_per_page=8&paged='. get_query_var('paged')); ?>

		<?php if( have_posts() ): ?>

				<?php while( have_posts() ): the_post(); ?>

						<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?> style="padding-bottom: 30px;">


							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a><br><br>
							<a href="<?php the_permalink(); ?>"><strong><?php the_title();?></strong>
							</a><br><br>

							<?php the_excerpt(__('Continue reading »','example')); ?>
							
							<small>
								<?php echo get_the_date( get_option('date_format') ); ?><br>
								<?php the_time( 'H:i' ); ?>
							</small>

							</div><?php get_the_ID(); ?>
							<hr>
					<?php endwhile; ?>


					<div class="navigation" style="text-align: center;">
						<?php wp_pagenavi(); ?>
					</div>

				<?php else: ?>

					<div id="post-404" class="noposts">

						<p><?php _e('None found.','example'); ?></p>

					</div><!-- /#post-404 -->

				<?php endif; wp_reset_query(); ?>
	</div>
</div>