<?php
function get_dancers_array() {
	$wp_query = new WP_Query ();
	$wp_query->query ( array (
			'post_type' => 'dancer'
	) );
	$rep = array();
	$rep[0] = "none";
	if ($wp_query) {
		while ( $wp_query->have_posts () ) {
			$wp_query->the_post ();
			$rep[get_the_ID()] = get_the_title();
		}
	}
	return $rep;
}