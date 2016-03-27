<?php
if (! function_exists ( 'dance_setup' )) :
function dance_setup() {
	load_theme_textdomain( 'dance', get_template_directory() . '/languages' );
	register_nav_menus ( array (
			'primary_navigation' => __( 'Primary Navigation', 'dance' ),
			'footer_navigation' => __( 'Footer Navigation', 'dance' )
	) );

	add_theme_support ( 'custom-header' );
	add_theme_support ( 'post-thumbnails' );

	add_image_size ( 'cover', 200, 200, true );
}
endif;
add_action ( 'after_setup_theme', 'dance_setup' );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
if (! function_exists ( 'dance_widgets_init' )) :
function dance_widgets_init() {
	register_sidebar ( array (
			'name' => __ ( 'Primary Sidebar', 'dance' ),
			'id' => 'sidebar-1',
			'description' => __ ( 'Main sidebar that appears on the right.', 'dance' ),
			'before_widget' => '<div id="%1$s" class="">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title penci-border-arrow"><span class="inner-arrow">',
			'after_title' => '</span></h4></div><div class="widget-body">'
	) );
}
endif;
add_action ( 'widgets_init', 'dance_widgets_init' );