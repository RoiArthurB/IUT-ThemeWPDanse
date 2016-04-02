<?php

/**
 * For full documentation, please visit: http://docs.reduxframework.com/
 * For a more extensive sample-config file, you may look at:
 * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */
if (! class_exists ( 'Redux' )) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "redux_starter";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

$theme = wp_get_theme (); // For use with some settings. Not necessary.

$args = array (
		'opt_name' => $opt_name,
		'use_cdn' => TRUE,
		'page_slug' => '_options',
		'page_title' => 'Dance Theme Options',
		'update_notice' => TRUE,
		'intro_text' => '<p>Introduction Text</p>',
		'footer_text' => '<p>Footer Text</p>',
		'admin_bar' => TRUE,
		'menu_type' => 'menu',
		'menu_title' => 'Theme Options',
		'allow_sub_menu' => TRUE,
		'page_parent_post_type' => 'your_post_type',
		'customizer' => TRUE,
		'default_mark' => '*',
		'hints' => array (
				'icon_position' => 'right',
				'icon_size' => 'normal',
				'tip_style' => array (
						'color' => 'light' 
				),
				'tip_position' => array (
						'my' => 'top left',
						'at' => 'bottom right' 
				),
				'tip_effect' => array (
						'show' => array (
								'duration' => '500',
								'event' => 'mouseover' 
						),
						'hide' => array (
								'duration' => '500',
								'event' => 'mouseleave unfocus' 
						) 
				) 
		),
		'output' => TRUE,
		'output_tag' => TRUE,
		'settings_api' => TRUE,
		'cdn_check_time' => '1440',
		'compiler' => TRUE,
		'page_permissions' => 'manage_options',
		'save_defaults' => TRUE,
		'show_import_export' => TRUE,
		'transient_time' => '3600',
		'network_sites' => TRUE,
		'display_version' => '1.0',
		'display_name' => 'Dance Theme Options' ,
		'dev_mode' => false
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args ['share_icons'] [] = array (
		'url' => 'https://github.com/RoiArthurB/ThemeWPDanse',
		'title' => 'Visit me on GitHub',
		'icon' => 'el el-github' 
);
// 'img' => '', // You can use icon OR img. IMG needs to be a full URL.


$args ['share_icons'] [] = array (
		'url' => 'http://twitter.com/RoiArthurB',
		'title' => 'Follow me on Twitter',
		'icon' => 'el el-twitter' 
);
$args ['share_icons'] [] = array (
		'url' => 'https://fr.linkedin.com/in/arthurbrugiere',
		'title' => 'Find me on LinkedIn',
		'icon' => 'el el-linkedin' 
);

Redux::setArgs ( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = array (
	array (
		'id' => 'redux-help-tab-1',
		'title' => __ ( 'Theme Information 1', 'admin_folder' ),
		'content' => __ ( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' ) 
	),
	array (
		'id' => 'redux-help-tab-2',
		'title' => __ ( 'Theme Information 2', 'admin_folder' ),
		'content' => __ ( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' ) 
	) 
);
Redux::setHelpTab ( $opt_name, $tabs );

// Set the help sidebar
$content = __ ( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
Redux::setHelpSidebar ( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> START SECTIONS
 *
 */

/*===================================================================
 x                                                                  x
 x                     	General Slider			                    x
 x                                                                  x
===================================================================*/

Redux::setSection ( $opt_name, array (
	'title' => __ ( 'General', 'starter' ),
	'id' => 'general',
	'icon' => 'el el-adjust-alt',
	'fields' => array (
		array (
			'id' => 'opt-layout',
			'type' => 'image_select',
			'title' => __ ( 'Site Layout', 'starter' ),
			'options'  => array(
			        'container-fluid'      => array(
			            'alt'   => 'full-width', 
			            'img'   => ReduxFramework::$_url.'assets/img/1col.png'
			        ),
			        'container'      => array(
			            'alt'   => 'fixed-width', 
			            'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
			        )
			    ),
			'default' => 'container'
		),
		array(
		    'id'       => 'opt-link-color',
		    'type'     => 'link_color',
		    'title'    => __('Color Links', 'starter'),
		    'subtitle' => __('Only color validation can be done on this field type', 'starter'),
		    'desc'     => __('Choose the different color for the different state of your links.', 'starter'),
		    'default'  => array(
		        'regular'  => '#1e73be', // blue
		        'hover'    => '#dd3333', // red
		        'active'   => '#8224e3',  // purple
		        'visited'  => '#8224e3',  // purple
		    )
		),
		array(         
		    'id'       => 'opt-background',
		    'type'     => 'background',
		    'title'    => __('Body Background', 'starter'),
		    'subtitle' => __('Body background with image, color, etc.', 'starter'),
		//    'desc'     => __('This is the description field, again good for additional info.', 'starter'),
		    'default'  => array(
		        'background-color' => '#fff',
		    ),
		),
        array(
            'id'       => 'post-select-layout',
            'type'     => 'select',
            'title'    => __( 'Layout for post', 'starter' ),
            'subtitle' => __( 'Go here for preview : <a href="http://isotope.metafizzy.co/layout-modes.html" target="_blank">http://isotope.metafizzy.co/layout-modes.html</a>', 'starter' ),
            'options'  => array(
            	'masonry' => 'masonry',
            	'fitRows' => 'fitRows',
            	'cellsByRow' => 'cellsByRow',
            	'vertical' => 'vertical',
            ),
            'default' => 'fitRows',
        ),
	)
) );

/*===================================================================
 x                                                                  x
 x                     		Home Slider			                    x
 x                                                                  x
===================================================================*/

Redux::setSection ( $opt_name, array (
	'title' => __ ( 'Home slider', 'starter' ),
	'id' => 'homePage',
	'icon' => 'el el-home',
	'fields' => array (
		array (
            'id'       => 'switch-slider-home-page',
            'type'     => 'switch',
            'title'    => __( 'Slider Home Page', 'redux-framework-demo' ),
            'subtitle' => __( 'To display or not the slider on the home page', 'redux-framework-demo' ),
            'default'  => true
    	),
    	array(
            'id'            => 'home-slide-size',
            'type'          => 'slider',
            'title'         => __( 'Slide Width Size', 'redux-framework-demo' ),
            'subtitle'      => __( 'Set the width size of the slide (in px)', 'redux-framework-demo' ),
            'desc'          => __( 'Slider description. Min: 1, max: 1000', 'redux-framework-demo' ),
            'default'       => '500',
            'min'           => 1,
            'step'          => 1,
            'max'           => 1000,
            'display_value' => 'label'
        ),
/*	    array(
            'id'            => 'home-slider-select',
            'type'          => 'slider',
            'title'         => __( 'Slider Home Page', 'redux-framework-demo' ),
            'subtitle'      => __( 'To display or not the slider on the home page', 'redux-framework-demo' ),
            'desc'          => __( 'Slider description. Min: 1, max: 10', 'redux-framework-demo' ),
            'default'       => array(
                1 => 2,
                2 => 10,
            ),
            'min'           => '1',
            'step'          => 1,
            'max'           => '10',
            'display_value' => 'select',
            'handles'       => 2,
        ),*/
		array (
            'id'       => 'switch-pager-home-page',
            'type'     => 'switch',
            'title'    => __( 'Pager Slider', 'redux-framework-demo' ),
            'subtitle' => __( 'To display or not the pager under the slider on the home page', 'redux-framework-demo' ),
            'default'  => false
    	),
		array (
            'id'       => 'switch-caption-home-page',
            'type'     => 'switch',
            'title'    => __( 'Caption Slider', 'redux-framework-demo' ),
            'subtitle' => __( 'To display or not slide\' caption on the home page', 'redux-framework-demo' ),
            'default'  => true
    	),
	)
) );

/*===================================================================
 x                                                                  x
 x                 		Dancer Settings			                    x
 x                                                                  x
===================================================================*/

Redux::setSection( $opt_name, array(
    'title'            => __( 'Dancer Settings', 'dance' ),
    'id'               => 'dancer',
    'customizer_width' => '400px',
    'icon'             => 'el el-person',
    'fields'           => array(
        array(
            'id'       => 'dancer-switch-slider',
            'type'     => 'switch',
            'title'    => __( 'Slider Dancer Page', 'redux-framework-demo' ),
            'subtitle' => __( 'To display or not the slider on the dancer page', 'redux-framework-demo' ),
            'default'  => true,
        ),
    	array(
            'id'            => 'dancer-slide-size',
            'type'          => 'slider',
            'title'         => __( 'Slide Width Size', 'redux-framework-demo' ),
            'subtitle'      => __( 'Set the width size of the slide (in px)', 'redux-framework-demo' ),
            'desc'          => __( 'Slider description. Min: 1, max: 1000', 'redux-framework-demo' ),
            'default'       => 300,
            'min'           => 1,
            'step'          => 1,
            'max'           => 1000,
            'display_value' => 'label'
        ),
/*            array(
            'id'            => 'dancer-slider-select',
            'type'          => 'slider',
            'title'         => __( 'Max Slide', 'redux-framework-demo' ),
            'subtitle'      => __( 'Set min and max slide to display side by side', 'redux-framework-demo' ),
            'desc'          => __( 'Slider description. Min: 1, max: 10', 'redux-framework-demo' ),
            'default'       => array(
                1 => 1,
                2 => 5,
            ),
            'min'           => 1,
            'step'          => 1,
            'max'           => 10,
            'display_value' => 'select',
            'handles'       => 2,
        ),*/
        array(
            'id'       => 'dancer-switch-pager',
            'type'     => 'switch',
            'title'    => __( 'Pager Slider', 'redux-framework-demo' ),
            'subtitle' => __( 'To display or not the pager under the slider on the dancer page', 'redux-framework-demo' ),
            'default'  => true,
        ),
    )
) );

/*
 * <--- END SECTIONS
 */

add_filter ( 'redux/options/' . $opt_name . '/compiler', 'musique_compiler_action', 10, 3 );
if (! function_exists ( 'musique_compiler_action' )) {
	function musique_compiler_action($options, $css, $changed_values) {
		global $wp_filesystem;
		
		$filename = get_template_directory () . '/css/redux_starter.css';
		// echo $filename;
		if (empty ( $wp_filesystem )) {
			require_once (ABSPATH . '/wp-admin/includes/file.php');
			WP_Filesystem ();
		}
		
		if ($wp_filesystem) {
			$wp_filesystem->put_contents ( $filename, $css, FS_CHMOD_FILE );
		}
	}
}

    