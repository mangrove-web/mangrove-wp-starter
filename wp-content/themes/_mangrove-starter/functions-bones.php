<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/
*/

// Get Bones Core Up & Running!
require_once('library/bones.php'); // core functions (don't remove)

// Shortcodes
require_once('library/shortcodes.php');

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
