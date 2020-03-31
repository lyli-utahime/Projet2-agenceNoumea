<?php get_header(); ?>

<div class="container">
	<div class="row">
		<section class="has-padding">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', get_post_format() );
				}
			}
			?>
			</div>

			<nav class="pixova-custom-pagination col-lg-12">
				<?php the_posts_pagination(); ?>
			</nav><!--/.pixova-custom-pagination-->
		</section><!--/section-->
	</div><!--/.row-->
</div><!--/.container-->

<?php get_footer(); ?>
