<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/
*/

// Get Bones Core Up & Running!
require_once('library/bones.php');						// core functions (don't remove)

// Shortcodes
require_once('library/shortcodes.php');

// adding it to the admin area
add_filter('admin_footer_text', 'wp_bootstrap_custom_admin_footer');

// Set content width
if ( ! isset( $content_width ) ) $content_width = 580;

/************* COMMENT LAYOUT *********************/

// Comment Layout
function wp_bootstrap_comments($comment, $args, $depth) {
	 $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<div class="comment-author vcard clearfix">
				<div class="avatar col-sm-3">
					<?php echo get_avatar( $comment, $size='75' ); ?>
				</div>
				<div class="col-sm-9 comment-text">
					<?php printf('<h4>%s</h4>', get_comment_author_link()) ?>
					<?php edit_comment_link(__('Edit','wpbootstrap'),'<span class="edit-comment btn btn-sm btn-info"><i class="glyphicon-white glyphicon-pencil"></i>','</span>') ?>

										<?php if ($comment->comment_approved == '0') : ?>
								<div class="alert-message success">
									<p><?php _e('Your comment is awaiting moderation.','wpbootstrap') ?></p>
									</div>
					<?php endif; ?>

										<?php comment_text() ?>

										<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('F jS, Y'); ?> </a></time>

					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
								</div>
			</div>
		</article>
		<!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!

// Display trackbacks/pings callback function
function list_pings($comment, $args, $depth) {
			 $GLOBALS['comment'] = $comment;
?>
				<li id="comment-<?php comment_ID(); ?>"><i class="icon icon-share-alt"></i>&nbsp;<?php comment_author_link(); ?>
<?php

}

/************* SEARCH FORM LAYOUT *****************/

/****************** password protected post form *****/

add_filter( 'the_password_form', 'custom_password_form' );

function custom_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '<div class="clearfix"><form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">
	' . '<p>' . __( "This post is password protected. To view it please enter your password below:" ,'wpbootstrap') . '</p>' . '
	<label for="' . $label . '">' . __( "Password:" ,'wpbootstrap') . ' </label><div class="input-append"><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" class="btn btn-primary" value="' . esc_attr__( "Submit",'wpbootstrap' ) . '" /></div>
	</form></div>
	';
	return $o;
}

/*********** update standard wp tag cloud widget so it looks better ************/

add_filter( 'widget_tag_cloud_args', 'my_widget_tag_cloud_args' );

function my_widget_tag_cloud_args( $args ) {
	$args['number'] = 20; // show less tags
	$args['largest'] = 9.75; // make largest and smallest the same - i don't like the varying font-size look
	$args['smallest'] = 9.75;
	$args['unit'] = 'px';
	return $args;
}

// filter tag clould output so that it can be styled by CSS
function add_tag_class( $taglinks ) {
		$tags = explode('</a>', $taglinks);
		$regex = "#(.*tag-link[-])(.*)(' title.*)#e";

		foreach( $tags as $tag ) {
			$tagn[] = preg_replace($regex, "('$1$2 label tag-'.get_tag($2)->slug.'$3')", $tag );
		}

		$taglinks = implode('</a>', $tagn);

		return $taglinks;
}

add_action( 'wp_tag_cloud', 'add_tag_class' );

add_filter( 'wp_tag_cloud','wp_tag_cloud_filter', 10, 2) ;

function wp_tag_cloud_filter( $return, $args )
{
	return '<div id="tag-cloud">' . $return . '</div>';
}

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

// Add the Meta Box to the homepage template
function add_homepage_meta_box() {
	global $post;

	// Only add homepage meta box if template being used is the homepage template
	// $post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : "");
	$post_id = $post->ID;
	$template_file = get_post_meta($post_id,'_wp_page_template',TRUE);

	if ( $template_file == 'page-homepage.php' ){
			add_meta_box(
					'homepage_meta_box', // $id
					'Optional Homepage Tagline', // $title
					'show_homepage_meta_box', // $callback
					'page', // $page
					'normal', // $context
					'high'); // $priority
		}
}

add_action( 'add_meta_boxes', 'add_homepage_meta_box' );

// Field Array
$prefix = 'custom_';
$custom_meta_fields = array(
		array(
				'label'=> 'Homepage tagline area',
				'desc'	=> 'Displayed underneath page title. Only used on homepage template. HTML can be used.',
				'id'		=> $prefix.'tagline',
				'type'	=> 'textarea'
		)
);

// The Homepage Meta Box Callback
function show_homepage_meta_box() {
	global $custom_meta_fields, $post;

	// Use nonce for verification
	wp_nonce_field( basename( __FILE__ ), 'wpbs_nonce' );

	// Begin the field table and loop
	echo '<table class="form-table">';

	foreach ( $custom_meta_fields as $field ) {
			// get value of this field if it exists for this post
			$meta = get_post_meta($post->ID, $field['id'], true);
			// begin a table row with
			echo '<tr>
							<th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
							<td>';
							switch($field['type']) {
									// text
									case 'text':
											echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />
													<br /><span class="description">'.$field['desc'].'</span>';
									break;

									// textarea
									case 'textarea':
											echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="80" rows="4">'.$meta.'</textarea>
													<br /><span class="description">'.$field['desc'].'</span>';
									break;
							} //end switch
			echo '</td></tr>';
	} // end foreach
	echo '</table>'; // end table
}

// Save the Data
function save_homepage_meta( $post_id ) {

		global $custom_meta_fields;

		// verify nonce
		if ( !isset( $_POST['wpbs_nonce'] ) || !wp_verify_nonce($_POST['wpbs_nonce'], basename(__FILE__)) )
				return $post_id;

		// check autosave
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
				return $post_id;

		// check permissions
		if ( 'page' == $_POST['post_type'] ) {
				if ( !current_user_can( 'edit_page', $post_id ) )
						return $post_id;
				} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
						return $post_id;
		}

		// loop through fields and save the data
		foreach ( $custom_meta_fields as $field ) {
				$old = get_post_meta( $post_id, $field['id'], true );
				$new = $_POST[$field['id']];

				if ($new && $new != $old) {
						update_post_meta( $post_id, $field['id'], $new );
				} elseif ( '' == $new && $old ) {
						delete_post_meta( $post_id, $field['id'], $old );
				}
		} // end foreach
}
add_action( 'save_post', 'save_homepage_meta' );

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

add_filter('show_admin_bar', '__return_false');

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}


function mangrove_excerpt_length( $length ) {
		return 200;
}
add_filter('excerpt_length', 'mangrove_excerpt_length');

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

///////////
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
