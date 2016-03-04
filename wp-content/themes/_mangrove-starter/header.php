<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

</head>

<body <?php body_class(); ?>>
	<?php
		$post_thumbnail_id = get_post_thumbnail_id();
		$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'banner-lg' );?>


	<header class="main" role="banner"
		<?php if (!is_front_page()) { ?>style="background-image: url('<?php
			if ($featured_src) {
				echo $featured_src[0];
			}
			else {
				echo bloginfo('template_directory').'/images/bg-header.jpg';
				} ?>');" <?php } ?>>




	<div class="navbar navbar-default navbar-fixed-top">
			<div class="header-container container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a
						class="navbar-brand <?php if (is_front_page()) {?>animated wow fadeIn<?php } ?>"
						title="<?php echo get_bloginfo('description'); ?>"
						href="<?php echo home_url(); ?>"
						>
						<h1><?php bloginfo('name');?></h1>
					</a>
				</div>

	<?php
	if ( is_front_page() ) { ?>
		<div class="banner">
			<div class="page-header animated wow fadeInUp" data-wow-duration="1s" data-wow-delay="0">
				<h2><?php bloginfo('description');?></h2>
			</div><?php
	} ?>
			<div><?php
				wp_nav_menu(
					array(
						'menu' => 'main_nav', /* menu name */
						'menu_class' => 'nav navbar-nav',
						'theme_location' => 'main_nav', /* where in the theme it's assigned */
						'container' => 'false', /* container class */
					)
				); ?>
			</div><?php
	if (is_front_page()) { ?>
		</div><?php
	} ?>

			</div> <!-- end .container -->
		</div> <!-- end .navbar -->

<div class="overlay <?php if (is_front_page()) { echo 'animated wow fadeIn" data-wow-duration="2s" data-wow-delay="1s-'; } ?>" style="background-color: <?php the_field('banner_highlight_rgba');?>"></div>





	</header> <!-- end header -->

	<div class="container">
