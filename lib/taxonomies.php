<?php
// Register Custom Taxonomy
function dance_style_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Dance Styles', 'Taxonomy General Name', 'dance' ),
		'singular_name'              => _x( 'Dance Style', 'Taxonomy Singular Name', 'dance' ),
		'menu_name'                  => __( 'Dance Style', 'dance' ),
		'all_items'                  => __( 'All Dance Styles', 'dance' ),
		'parent_item'                => __( 'Parent Dance Style', 'dance' ),
		'parent_item_colon'          => __( 'Parent Dance Style:', 'dance' ),
		'new_item_name'              => __( 'New Dance Style Name', 'dance' ),
		'add_new_item'               => __( 'Add New Dance Style', 'dance' ),
		'edit_item'                  => __( 'Edit Dance Style', 'dance' ),
		'update_item'                => __( 'Update Dance Style', 'dance' ),
		'view_item'                  => __( 'View Dance Style', 'dance' ),
		'separate_items_with_commas' => __( 'Separate Dance Styles with commas', 'dance' ),
		'add_or_remove_items'        => __( 'Add or remove Dance Styles', 'dance' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'dance' ),
		'popular_items'              => __( 'Popular Dance Styles', 'dance' ),
		'search_items'               => __( 'Search Dance Styles', 'dance' ),
		'not_found'                  => __( 'Not Found', 'dance' ),
		'no_terms'                   => __( 'No Dance Styles', 'dance' ),
		'items_list'                 => __( 'Dance Styles list', 'dance' ),
		'items_list_navigation'      => __( 'Dance Styles list navigation', 'dance' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'dance_style', array( 'dancer', 'spectacle' ), $args );

}
add_action( 'init', 'dance_style_taxonomy', 0 );