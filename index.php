<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-md-9 grid">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-md-6 grid-item">
					<?php 
						get_template_part( 'template-parts/content', get_post_format() );
					?>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php 
				get_template_part( 'template-parts/content', 'none' );
			?>
		<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>