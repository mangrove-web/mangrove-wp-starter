<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/
*/

// Get Bones Core Up & Running!
require_once('library/bones.php');						// core functions (don't remove)

// Shortcodes
require_once('library/shortcodes.php');


// Enable shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );

// Disable jump in 'read more' link
function remove_more_jump_link( $link ) {
	$offset = strpos($link, '#more-');
	if ( $offset ) {
		$end = strpos( $link, '"',$offset );
	}
	if ( $end ) {
		$link = substr_replace( $link, '', $offset, $end-$offset );
	}
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_jump_link' );

// Remove height/width attributes on images so they can be responsive
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
		return $html;
}

// Add thumbnail class to thumbnail links
function add_class_attachment_link( $html ) {
		$postid = get_the_ID();
		$html = str_replace( '<a','<a class="thumbnail"',$html );
		return $html;
}
add_filter( 'wp_get_attachment_link', 'add_class_attachment_link', 10, 1 );

// Add lead class to first paragraph
function first_paragraph( $content ){
		global $post;

		// if we're on the homepage, don't add the lead class to the first paragraph of text
		if( is_page_template( 'page-homepage.php' ) )
				return $content;
		else
				return preg_replace('/<p([^>]+)?>/', '<p$1 class="lead">', $content, 1);
}
add_filter( 'the_content', 'first_paragraph' );


// set featured image from ACF field, ie gallery
add_action( 'save_post', 'set_featured_image_from_gallery' );
function set_featured_image_from_gallery() {
	$has_thumbnail = get_the_post_thumbnail($post->ID);

	if ( !$has_thumbnail ) {

		$images = get_field('gallery', false, false);
		$image_id = $images[0];

		if ( $image_id ) {
			set_post_thumbnail( $post->ID, $image_id );
		}
	}
}

// make gforms notification appear without scrolling to top of page
add_filter("gform_confirmation_anchor", create_function("","return true;"));
