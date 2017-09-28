<div class="container justify-content-around">
	<h1>
		Welcome! This is <span class="red">Bright</span>, a very clean Wordpress psd file theme<br>
		That makes it easy to showcase your work
	</h1>

	<div class="sorter">
		<a href="#" class="active-sort">All</a> /
		<?php wp_list_categories( array(
			'title_li' => '',
			'separator' => ' / ',
			'style'     => '',
			'orderby' => 'name'
			) ); ?> 
		</div>
		<div id="images row" style="padding-bottom: 30px; padding-top: 30px;">

			<?php query_posts('post_type=post&post_status=publish&posts_per_page=8&paged='. get_query_var('paged')); ?>

			<?php if( have_posts() ): ?>

				<?php while( have_posts() ): the_post(); ?>

					<div class="col-sm-3">
						<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?> style="padding-bottom: 30px;">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>

							<a href="<?php the_permalink(); ?>"><strong><?php the_title();?></strong>
							</a><br>

							<small>
								<?php the_tags(''); ?>
								</small>
								<div class="box">
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


	<div class="space"></div>
			<div class="row justify-content-around" style="margin-bottom: 5%;">
				<div class="col-sm-4">
					<p class="feat">Find Something</p>
					<p>Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpata, convallis ac, laoreer enim.</p>
					<input type="text" name="search" placeholder="Looking for something?" style="color: red; background-color: #d3d3d3">
					<button class="btn btn-default btn-xs btngo">Go</button>
				</div>
				<div class="col-sm-4">
					<p class="feat">Information</p>
					<p> Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim.</p> 

					<p>Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum.</p>
				</div>
				<div class="col-sm-4">
					<p class="feat">Search by</p>
					<div class="wrap dotline">
						<div class="left_col">
							<p><u>Maecenas (2)</u></p>
							<p><u>Curabitur et ligula (12)</u></p>
							<p><u>Ut molestie (3)</u></p>
							<p><u>Pellentesque facilisis (1)</u></p>
							<p><u>Integer aliquam (0)</u></p>
							<p><u>Lorem ipsum (1)</u></p>
							<p><u>Etiam ullamcorper (3)</u></p>
							<p><u>Vestibulum commodo (9)</u></p>
							<p><u>Quisque lorem (1)</u></p>
							<p><u>Vestibulum (23)</u></p>
						</div>
						<div class="right_col">
							<p><u>Maecenas (2)</u></p>
							<p><u>Curabitur et ligula (12)</u></p>
							<p><u>Ut molestie (3)</u></p>
							<p><u>Pellentesque facilisis (1)</u></p>
							<p><u>Integer aliquam (0)</u></p>
							<p><u>orem ipsum (1)</u></p>
							<p><u>Etiam ullamcorper (3)</u></p>
						</div>
					</div>
				</div>
			</div>

		</div>
