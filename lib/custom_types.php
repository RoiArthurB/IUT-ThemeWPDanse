<?php
// Register Custom Post Type
function dance_dancer_type() {

	$labels = array(
		'name'                  => _x( 'Dancers', 'Post Type General Name', 'dance' ),
		'singular_name'         => _x( 'Dancer', 'Post Type Singular Name', 'dance' ),
		'menu_name'             => __( 'Dancers', 'dance' ),
		'name_admin_bar'        => __( 'Dancer', 'dance' ),
		'archives'              => __( 'Dancer Archives', 'dance' ),
		'parent_item_colon'     => __( 'Parent Dancer:', 'dance' ),
		'all_items'             => __( 'All Dancers', 'dance' ),
		'add_new_item'          => __( 'Add New Dancer', 'dance' ),
		'add_new'               => __( 'Add New', 'dance' ),
		'new_item'              => __( 'New Dancer', 'dance' ),
		'edit_item'             => __( 'Edit Dancer', 'dance' ),
		'update_item'           => __( 'Update Dancer', 'dance' ),
		'view_item'             => __( 'View Dancer', 'dance' ),
		'search_items'          => __( 'Search Dancer', 'dance' ),
		'not_found'             => __( 'Not Dancer found', 'dance' ),
		'not_found_in_trash'    => __( 'Not Dancer found in Trash', 'dance' ),
		'featured_image'        => __( 'Featured Image', 'dance' ),
		'set_featured_image'    => __( 'Set featured image', 'dance' ),
		'remove_featured_image' => __( 'Remove featured image', 'dance' ),
		'use_featured_image'    => __( 'Use as featured image', 'dance' ),
		'insert_into_item'      => __( 'Insert into dancer', 'dance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this dancer', 'dance' ),
		'items_list'            => __( 'Dancers list', 'dance' ),
		'items_list_navigation' => __( 'Dancers list navigation', 'dance' ),
		'filter_items_list'     => __( 'Filter Dancers list', 'dance' ),
	);
	$args = array(
		'label'                 => __( 'Dancer', 'dance' ),
		'description'           => __( 'Dancer du Label', 'dance' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'Dancer', $args );

}
add_action( 'init', 'dance_dancer_type', 0 );

// Register Custom Post Type
function spectacle_type() {

	$labels = array(
		'name'                  => _x( 'Spectacles', 'Post Type General Name', 'dance' ),
		'singular_name'         => _x( 'Spectacle', 'Post Type Singular Name', 'dance' ),
		'menu_name'             => __( 'Spectacle', 'dance' ),
		'name_admin_bar'        => __( 'Spectacle', 'dance' ),
		'archives'              => __( 'All Spectacle Archives', 'dance' ),
		'parent_item_colon'     => __( 'Parent Spectacle:', 'dance' ),
		'all_items'             => __( 'All Spectacles', 'dance' ),
		'add_new_item'          => __( 'Add New Spectacle', 'dance' ),
		'add_new'               => __( 'Add New', 'dance' ),
		'new_item'              => __( 'New Spectacle', 'dance' ),
		'edit_item'             => __( 'Edit Spectacle', 'dance' ),
		'update_item'           => __( 'Update Spectacle', 'dance' ),
		'view_item'             => __( 'View Spectacle', 'dance' ),
		'search_items'          => __( 'Search Spectacle', 'dance' ),
		'not_found'             => __( 'Not Spectacle found', 'dance' ),
		'not_found_in_trash'    => __( 'Not Spectacle found in Trash', 'dance' ),
		'featured_image'        => __( 'Featured Image', 'dance' ),
		'set_featured_image'    => __( 'Set featured image', 'dance' ),
		'remove_featured_image' => __( 'Remove featured image', 'dance' ),
		'use_featured_image'    => __( 'Use as featured image', 'dance' ),
		'insert_into_item'      => __( 'Insert into Spectacle', 'dance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Spectacle', 'dance' ),
		'items_list'            => __( 'Spectacles list', 'dance' ),
		'items_list_navigation' => __( 'Spectacles list navigation', 'dance' ),
		'filter_items_list'     => __( 'Filter Spectacles list', 'dance' ),
	);
	$args = array(
		'label'                 => __( 'Spectacle', 'dance' ),
		'description'           => __( 'Spectacle', 'dance' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'spectacle', $args );

}
add_action( 'init', 'spectacle_type', 0 );