<?php
/*
Plugin Name: Mangrove Custom Features
Description: Post Types and Taxonomies for Mangrove Web
Author:			Mangrove Web
Author URI:	http://mangrove-web.com
*/

// Actions

add_action( 'init', function(){
	register_cpts();
	//register_taxonomies();
} );


function register_cpts(){
	register_post_type(
		'work',
		array(
			'public' => true,
			'has_archive' => false, // may want to set to true for an index of issues
			'labels' => array(
				'name' => 'Work',
				'singular_name' => 'Work',
				'add_item' => 'Add Work Item',
				'edit_item' => 'Edit Work Item'
			),
			'public' => true,
			'exclude_from_search ' => false,
			'hierarchical' => false,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
			'taxonomies' => array('category')
		)
	);
	register_post_type(
		'team',
		array(
			'public' => true,
			'has_archive' => false, // may want to set to true for an index of issues
			'labels' => array(
				'name' => 'Team',
				'singular_name' => 'Team',
				'add_item' => 'Add Team Member',
				'edit_item' => 'Edit Team Member'
			),
			'public' => true,
			'exclude_from_search ' => false,
			'hierarchical' => false,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
			'taxonomies' => array('category')
		)
	);
	register_post_type(
		'testimonial',
		array(
			'public' => true,
			'has_archive' => false, // may want to set to true for an index of issues
			'labels' => array(
				'name' => 'Testimonials',
				'singular_name' => 'Testimonial',
				'add_item' => 'Add Testimonial',
				'edit_item' => 'Edit Testimonial'
			),
			'public' => true,
			'exclude_from_search ' => false,
			'hierarchical' => false,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
			'taxonomies' => array('category')
		)
	);
}
