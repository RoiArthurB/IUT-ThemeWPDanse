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

		<div class="col-sm-12 col-md-9">
			<div class="text-center" style="text-transform: uppercase;"><?php the_category(', ');?></div>
			<h3 class="text-center" style="text-transform: uppercase;"><?php the_title(); ?></h3>
			<div class="text-center">

			<?php if ( get_the_author() && get_the_date() ) : ?>
				<p>written by <?php the_author(); ?> | <?php echo get_the_date() ?></p>
			<?php elseif ( get_the_author() ) : ?>
				<p>written by <?php the_author(); ?></p>
			<?php elseif ( get_the_date() ) : ?>
				<p>written the <?php echo get_the_date(); ?></p>
			<?php endif; ?>

			</div>
			<?php if(has_post_thumbnail($post->ID)) : ?>
			<div class="text-center" style="padding: 10px">
				<?php echo get_the_post_thumbnail( $post->ID, 'normal' ); ?>
			</div>
			<?php endif;?>
			<div class="panel-body">
				<?php the_content() ?>
			</div>
		</div>

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