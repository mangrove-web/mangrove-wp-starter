<?php namespace Mangrove; ?>
<!doctype html><?php
the_html_element( $classes = 'no-js' ); ?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header class="navbar headroom"><!-- add/remove .headroom for auto hiding nav -->
			<div class="header-container container">

				<div class="navbar-header">
					<a
						class="navbar-brand <?php if (is_front_page()) {?>animated fadeIn<?php } ?>"
						title="<?php echo get_bloginfo('description'); ?>"
						href="<?php echo home_url(); ?>"
						>
						<h1><?php bloginfo('name');?></h1>
					</a>
				</div>

				<?php wp_nav_menu(
					array(
						'menu' => 'main_nav', /* menu name */
						'menu_class' => 'navbar-nav',
						'theme_location' => 'main_nav', /* where in the theme it's assigned */
						'container' => false, /* container class */
					)
				); ?>

				<label class="mobile-nav-toggle fa fa-2x" for="mobile-nav-toggle"></label>

			</div> <!-- end .container -->
	</header> <!-- end header -->

	<div class="container">


<?php

// Functions
function the_html_element( $classes ){ ?>
	<!--[if IEMobile 7 ]><html <?php language_attributes(); ?> class="<?php echo $classes ?> iem7"> <![endif]-->
	<!--[if lt IE 7 ]>   <html <?php language_attributes(); ?> class="<?php echo $classes ?> ie6"> <![endif]-->
	<!--[if IE 7 ]>      <html <?php language_attributes(); ?> class="<?php echo $classes ?> ie7"> <![endif]-->
	<!--[if IE 8 ]>      <html <?php language_attributes(); ?> class="<?php echo $classes ?> ie8"> <![endif]-->
	<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php echo $classes ?>"><!--<![endif]-->
	<?php
}
