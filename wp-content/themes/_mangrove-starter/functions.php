<?php
namespace Mangrove;

/* Actions */
add_action( 'wp_enqueue_scripts', 'Mangrove\register_styles' );
add_action( 'wp_enqueue_scripts', 'Mangrove\enqueue_styles'  );

/* Functions */
function enqueue_styles(){
	wp_enqueue_style( 'font-awesome' );
	wp_enqueue_style( 'wp' );
}
function register_styles(){
	wp_register_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css' );
	wp_register_style( 'wp', get_template_directory_uri() . '/library/styles/css/mg_custom.css', array(), '1.0', 'all' );
}

include 'functions-bones.php';
