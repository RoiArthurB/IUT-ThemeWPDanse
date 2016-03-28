<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
<div class="row">
		<div class="col-sm-12 col-md-9">	
			<?php if ( have_posts() ) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part ( 'template-parts/dance/content', 'spectacle_single' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>		
		</div>
		<div id="sidebar" class="col-md-3 hidden-xs hidden-sm">
			<?php get_sidebar();?>
		</div>
	</div>
</div>
<?php get_footer();?>