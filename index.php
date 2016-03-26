<?php
/**
* The main template file
*/
?>
<?php get_header(); ?>
<div class="row">
	<?php	// Caroussel des prochains spectacles	
	$args = array('post_type' => 'spectacle');
	
	$loop = new WP_Query( $args ); //Define the loop based on arguments
	
	//Display the contents
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	<?php endwhile;?>
</div>
<div class="row">
	<div class="col-md-9 ">
		<div class="grid">
			<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="grid-item">
				<?php
					get_template_part( 'template-parts/content', 'dancer' );
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

	<div class="col-md-3">
		<?php get_sidebar();?>
	</div>
</div>
</div>
<?php get_footer();?>