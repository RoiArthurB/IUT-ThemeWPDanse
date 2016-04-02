<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category dance
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists(get_template_directory() . '/cmb2/init.php' ) ) {
	require_once get_template_directory() . '/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/CMB2/init.php' ) ) {
	require_once get_template_directory() . '/CMB2/init.php';
}

/*===================================================================
 x                                                                  x
 x                     			Dancer			                    x
 x                                                                  x
===================================================================*/

add_action( 'cmb2_admin_init', 'dance_register_dancer_social_metabox' );
function dance_register_dancer_social_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_dance_dancer_social_';

	$cmb_dance_dancer_social = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Dancer Social Informations', 'dance' ),
		'object_types'  => array( 'dancer', 'spectacle')
	) );
	
	$cmb_dance_dancer_social->add_field( array(
			'name' => __( 'Facebook ', 'dance' ),
			'id'   => $prefix . 'facebook',
			'type' => 'text_url'
	) );	
	
	$cmb_dance_dancer_social->add_field( array(
			'name' => __( 'Twitter ', 'dance' ),
			'id'   => $prefix . 'twitter',
			'type' => 'text_url'
	) );

	$cmb_dance_dancer_social->add_field( array(
			'name'    => __( 'Dancer Color', 'dance' ),
			'desc'    => __( 'Select dancer color', 'dance' ),
			'id'      => $prefix . 'dancer_color',
			'type'    => 'colorpicker',
			'default' => '#FFAB00',
	) );
}
add_action( 'cmb2_admin_init', 'dance_register_dancer_options_metabox' );
function dance_register_dancer_options_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_dance_dancer_options_';

	$cmb_dance_dancer_options = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Dancer Options Sup', 'dance' ),
			'object_types'  => array( 'dancer', 'spectacle')
	) );

	$cmb_dance_dancer_options->add_field( array(
    'name' => 'Dancer Galery',
    'desc' => '',
    'id'   => 'wiki_test_file_list',
    'type' => 'file_list',
    // 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
    // Optional, override default text strings
    'options' => array(
        'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
        'remove_image_text' => 'Replacement', // default: "Remove Image"
        'file_text' => 'Replacement', // default: "File:"
        'file_download_text' => 'Replacement', // default: "Download"
        'remove_text' => 'Replacement', // default: "Remove"
    	),
	) );

	$cmb_dance_dancer_options->add_field( array(
    'name'             => 'Slide Min',
    'desc'             => 'Minimum nomber of slide side by side',
    'id'               => $prefix . 'min_slide_radio',
    'type'             => 'radio_inline',
    'options'          => array(
        '1'     => __( '1', 'cmb2' ),
        '2'     => __( '2', 'cmb2' ),
        '3'     => __( '3', 'cmb2' ),
        '4'     => __( '4', 'cmb2' ),
        '5'     => __( '5', 'cmb2' ),
    	),
    ) );

	$cmb_dance_dancer_options->add_field( array(
    'name'             => 'Slide Max',
    'desc'             => 'Maximum nomber of slide side by side',
    'id'               => $prefix . 'max_slide_radio',
    'type'             => 'radio_inline',
    'options'          => array(
        '1'     => __( '1', 'cmb2' ),
        '2'     => __( '2', 'cmb2' ),
        '3'     => __( '3', 'cmb2' ),
        '4'     => __( '4', 'cmb2' ),
        '5'     => __( '5', 'cmb2' ),
    	),
    ) );

}

/*===================================================================
 x                                                                  x
 x                     		spectacles			                    x
 x                                                                  x
===================================================================*/

add_action( 'cmb2_admin_init', 'dance_register_spectacle_date_metabox' );
function dance_register_spectacle_date_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_dance_spectacle_';

	$cmb_dance_spectacle_date = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Date', 'dance' ),
			'object_types'  => array( 'spectacle' )
	) );

	$cmb_dance_spectacle_date->add_field( array(
//    'name' => __('Date','dance'),
    'desc' => 'Enter the date here (in wich format you like)',
    'id' => $prefix . 'date',
    'type' => 'text_medium'
	) );
}
add_action( 'cmb2_admin_init', 'dance_register_spectacle_dancer_star_metabox' );
function dance_register_spectacle_dancer_star_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_dancer_star_';

	$cmb_dance_spectacle_dancer_star = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Dancers', 'dance' ),
			'object_types'  => array( 'spectacle' )
	) );

	$cmb_dance_spectacle_dancer_star->add_field( array(
			'name' => 'Dancer star',
			'desc' => 'Dancer star in the spectacle',
			'id'   => $prefix . 'dancer_star',
			'type' => 'select',
			'options' => 'get_dancers_array'
	) );	
}