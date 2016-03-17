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

add_action( 'cmb2_admin_init', 'dance_register_dancer_social_metabox' );
function dance_register_dancer_social_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_dance_dancer_social_';

	$cmb_dance_dancer_social = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'dancer Social Informations', 'dance' ),
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
}
add_action( 'cmb2_admin_init', 'dance_register_dancer_options_metabox' );
function dance_register_dancer_options_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_dance_dancer_options_';

	$cmb_dance_dancer_options = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'dancer Options', 'dance' ),
			'object_types'  => array( 'dancer', 'spectacle')
	) );

	$cmb_dance_dancer_options->add_field( array(
			'name'    => __( 'dancer Color', 'dance' ),
			'desc'    => __( 'Select dancer color', 'dance' ),
			'id'      => $prefix . 'dancer_color',
			'type'    => 'colorpicker',
			'default' => '#FFAB00',
	) );
}

add_action( 'cmb2_admin_init', 'dance_register_spectacle_date_picker_metabox' );
function dance_register_spectacle_date_picker_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_dance_spectacle_';

	$cmb_dance_spectacle_date_picker = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'date Picker', 'dance' ),
			'object_types'  => array( 'spectacle' )
	) );

	$cmb_dance_spectacle_date_picker->add_field( array(
    'name' => __('date Picker','dance'),
    'id' => $prefix . 'date_picker',
    'type' => 'text_date_timestamp',
	) );
}