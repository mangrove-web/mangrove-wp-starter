<?php
namespace Mangrove;

/* Actions */
add_action( 'wp_enqueue_scripts', 'Mangrove\register_styles'  );
add_action( 'wp_enqueue_scripts', 'Mangrove\register_scripts' );
add_action( 'wp_enqueue_scripts', 'Mangrove\enqueue_scripts'  );
add_action( 'wp_enqueue_scripts', 'Mangrove\enqueue_styles'   );

/* Functions */
function enqueue_scripts(){
	/* Note: Add dependencies to the dependency array instead of enqueueing separately */
	// wp_enqueue_script('bootstrap'); // uncomment this if bootstrap.js is needed directly by markup
	// wp_enqueue_script('mangrove-custom');
}
function enqueue_styles(){
	wp_enqueue_style( 'font-awesome' );
	wp_enqueue_style( 'mg_custom' );
}
function register_scripts(){
	/* Note: Add dependencies to the dependency array instead of enqueueing separately */
	wp_register_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' );
	wp_register_script( 'flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/jquery.flexslider.min.js' );

	$js_dir = get_template_directory_uri() . '/library/js/min';
	wp_register_script(
		$handle       = 'mangrove-custom',
		$source       = $js_dir . '/mangrove-custom.js',
		$dependencies = array( 'jquery' ),
		$version      = 1,
		$in_footer    = true
	);
}
function register_styles(){
	wp_register_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css' );
	wp_register_style( 'mg_custom', get_template_directory_uri() . '/library/styles/css/mg_custom.css', array(), '1.0', 'all' );
}

include 'functions-bones.php';
