<?php
namespace Mangrove;

/* Actions */
// add_acf_options_page();
add_action( 'after_setup_theme' , 'Mangrove\theme_supports'      );
add_action( 'after_setup_theme' , 'Mangrove\register_menus'      );
add_action( 'after_setup_theme' , 'Mangrove\add_image_sizes'     );
add_action( 'wp_enqueue_scripts', 'Mangrove\register_styles'     );
add_action( 'wp_enqueue_scripts', 'Mangrove\register_scripts'    );
add_action( 'wp_enqueue_scripts', 'Mangrove\enqueue_styles'      );
add_action( 'wp_enqueue_scripts', 'Mangrove\enqueue_scripts'     );
// add_action( 'widgets_init', 'Mangrove\register_sidebars'      );

/* Filters */
add_filter('show_admin_bar', '__return_false');

/* Functions */
function add_acf_options_page(){
	if( function_exists('\acf_add_options_page') ) {
		\acf_add_options_page();
	}
}
function add_image_sizes(){
	add_image_size( 'slider-lg', 1600, 1100, true );
	add_image_size( 'banner-lg', 1400, 700, true );
	add_image_size( 'mangrove-xlarge', 1600, 9999, false);
	add_image_size( 'mangrove-thumb-sq', 350, 350, true);
	add_image_size( 'mangrove-thumb', 500, 380, true);
}
function register_sidebars(){
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => 'Main Sidebar',
		'description' => 'Used on every page BUT the homepage page template.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => 'Homepage Sidebar',
		'description' => 'Used only on the homepage page template.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
}
function enqueue_scripts(){
	/* Note: Add dependencies to the dependency array instead of enqueueing separately */
	// wp_enqueue_script('bootstrap'); // uncomment this if bootstrap.js is needed directly by markup
	wp_enqueue_script('mangrove-custom');
}
function enqueue_styles(){
	wp_enqueue_style( 'font-awesome' );
	wp_enqueue_style( 'mg_custom' );
}
function register_menus(){
	register_nav_menus(                      // wp3+ menus
		array(
			'main_nav' => 'The Main Menu',   // main nav in header
			'footer_links' => 'Footer Links' // secondary nav in footer
		)
	);
}
function register_scripts(){
	/* Note: Add dependencies to the dependency array instead of enqueueing separately */
	wp_register_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' );
	wp_register_script( 'flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/jquery.flexslider.min.js' );

	$js_dir = get_template_directory_uri() . '/library/js/min';
	wp_register_script( 'modernizr', $js_dir . '/modernizr.js', array(), 0, true );
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
function theme_supports(){
	// add_theme_support( 'custom-background' );
	// add_theme_support('automatic-feed-links'); // rss thingy
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		)
	);
}

include 'functions-bones.php';
