<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
<div class="row">
<?php if ( have_posts() ) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-md-12">	
			<?php get_template_part ( 'template-parts/dance/content', 'spectacle_single' ); ?>
		</div>
	<?php endwhile; ?>
<?php else : ?>
	<div class="col-md-12">
	<?php 
		get_template_part( 'template-parts/content', 'none' );
	?>
	</div>
<?php endif; ?>
</div>
<?php get_footer();?>