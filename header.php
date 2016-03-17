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
	</head>
	<body <?php body_class(); ?>>
		<div class="<?php echo $layout; ?>">
			<header id="header" class="row">	
				<div id="logo" class="col-md-12"></div>			
				<?php get_template_part('template-parts/menu'); ?>
			</header>