<?php get_header(); ?>

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
		
		<?php get_template_part('blog_post'); ?>

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
	
<?php get_footer(); ?>