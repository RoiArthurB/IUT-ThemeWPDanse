<?php
/**
* The main template file
*/ 
global $redux_starter;
$slider = $redux_starter['switch-slider-home-page'];
$slideSize = $redux_starter['home-slide-size'];
// $slideSelectMin = $redux_starter['home-slide-select'];
$slidepager = $redux_starter['switch-pager-home-page'];
$slideCaption = $redux_starter['switch-caption-home-page'];

$isotopeLayout = $redux_starter['post-select-layout'];

?>
<?php get_header(); ?>
	<div class="row" style="padding-bottom: 40px;">
		<?php	// Caroussel des prochains spectacles	
		$args = array('post_type' => 'spectacle');
		
		$loop = new WP_Query( $args ); //Define the loop based on arguments
		?>
		<?php if ($slider == true && is_front_page()) : ?> 
			<ul class="bxslider" data-bx-size="<?php echo $slideSize ?>" data-bx-slide-nbr="<?php // echo $slideSelect ?>" data-bx-pager="<?php echo $slidepager ?>" data-bx-caption="<?php $slideCaption ?>">

			<?php //Display the contents
			while ( $loop->have_posts() ) : $loop->the_post();

				if ( has_post_thumbnail( $post->ID) ) : //Test pour voir s'il y a une img de base
			?>
			<?php // Si oui ?>
				<li><img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), true, '' ); echo $src[0];?>" title="<?php the_title(); ?>"/></li>

			<?php else : //Si non?>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/photo_no_available_spectacle500x500.jpg" title="<?php the_title(); ?>"/></li>

			<?php endif; ?>
			<?php endwhile;?>

			</ul>
		<?php endif; ?>
	</div>
	<div class="row">
		<div class="col-md-9 ">
			<div class="grid" data-layout="<?php echo $isotopeLayout ?>">
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
<?php get_footer();?>