<?php
/**
 * The template for displaying the header
 */
global $redux_starter;
$layout = $redux_starter["opt-layout"];
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<!-- BxSlider -->
		<!-- <link href="<?php echo get_template_directory(); ?>/lib/jquery.bxslider.css" rel="stylesheet" /> -->
		<!-- BxSlider -->
		<link href="http://localhost/wordpressthemeoce/wp-content/themes/dance/lib/jquery.bxslider.css" rel="stylesheet" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body <?php body_class(); ?>>
		<div class="<?php echo $layout; ?>">
			<header id="header" class="row">	
				<div id="logo" class="col-md-12"></div>			
				<?php get_template_part('template-parts/menu'); ?>

				<!-- Title -->
				<div class="col-md-12" style="text-align: center;">
				<!-- Title -->
					<h1 class="blog-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo( get_bloginfo( 'title' ) ); ?></a>
					</h1>
				<!-- Slogan -->
					<div class="header-slogan">
						<h2 class="header-slogan-text">
							<?php bloginfo('description'); ?>
						</h2>
					</div>
					<div class="header-social">
						<div class="inner-header-social">
							<a href="<?php echo get_option('facebook_link') ;?>" target="_blank"><i class="fa fa-facebook"></i></a>

							<a href="<?php echo get_option('twitter_link') ;?>" target="_blank"><i class="fa fa-twitter"></i></a> 

							<a href="<?php echo get_option('google_link') ;?>" target="_blank"><i class="fa fa-google-plus"></i></a>

							<a href="<?php echo get_option('instagram_link') ;?>" target="_blank"><i class="fa fa-instagram"></i></a>

							<a href="<?php echo get_option('pinterest_link') ;?>" target="_blank"><i class="fa fa-pinterest"></i></a>

							<a href="<?php echo get_option('tumblr_link') ;?>" target="_blank"><i class="fa fa-tumblr"></i></a>
						</div>
					</div>
				</div>
			</header>