<?php
/**
* The main template file
*/
?>
<?php get_header(); ?>
<div class="row" style="padding-bottom: 40px;">
	<?php	// Caroussel des prochains spectacles	
	$args = array('post_type' => 'spectacle');
	
	$loop = new WP_Query( $args ); //Define the loop based on arguments
	?>

	<ul class="bxslider">

	<?php //Display the contents
	while ( $loop->have_posts() ) : $loop->the_post();

		if ( has_post_thumbnail( $post->ID) ) : //Test pour voir s'il y a une img de base
	?>
	<?php // Si oui ?>
		<li><img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), true, '' ); echo $src[0];?>" title="<?php the_title(); ?>"/></li>

	<?php else : //Si non?>
		<li><img src="http://localhost/wordpressthemeoce/wp-content/themes/dance/images/photo_no_available_spectacle500x500.jpg" title="<?php the_title(); ?>"/></li>

	<?php endif; ?>
	<?php endwhile;?>

	</ul>
</div>
<div class="row">
	<div class="col-md-9 ">
		<div class="grid">
			<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="grid-item">
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
	</div>

	<div id="sidebar" class="col-md-3 hidden-xs hidden-sm">
		<?php get_sidebar();?>
	</div>
</div>
</div>
<?php get_footer();?>