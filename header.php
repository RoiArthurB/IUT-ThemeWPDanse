<?php
/**
 * The template for displaying the header
 */
global $redux_starter;
$layout = $redux_starter["opt-layout"];

$lRegular = $redux_starter['opt-link-color']['regular'];
$lHover   = $redux_starter['opt-link-color']['hover'];
$lActive  = $redux_starter['opt-link-color']['active'];
$lVisited = $redux_starter['opt-link-color']['visited'];

//$bgColor = $redux_starter['opt-bg-color'];

// Background color
$bgColor = $redux_starter['opt-background']['background-color'];
 
// Background image.
$bgImage = $redux_starter['opt-background']['background-image'];
 
// Background image options
$bgRepeat = $redux_starter['opt-background']['background-repeat'];
$bgPosition = $redux_starter['opt-background']['background-position'];
$bgSize = $redux_starter['opt-background']['background-size'];
$bgAttachment = $redux_starter['opt-background']['background-attachment'];
 
// Media values
$imgHeight = $redux_starter['opt-background']['media']['height'];
$imgWidth = $redux_starter['opt-background']['media']['width'];
$imgThumbnail = $redux_starter['opt-background']['media']['thumbnail'];
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>

		<style>
			a{ color: <?php echo $lRegular ?>;}
			a:hover{ color: <?php echo $lHover ?>;}
			a:active{ color: <?php echo $lActive ?>;}
			a:visited{ color: <?php echo $lVisited ?>;}

			body{ background-color: <?php echo $bgColor ?>;}
			body{ background-position: : <?php echo $bgPosition ?>;}
			body{ background-size: <?php echo $bgSize ?>;}
			body{ background-attachment: <?php echo $bgAttachment ?>;}
			body{ background-image: <?php echo $imgThumbnail ?>;}
		</style>

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