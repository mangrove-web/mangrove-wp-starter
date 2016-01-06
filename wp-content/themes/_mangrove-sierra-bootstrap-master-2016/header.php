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

		<header class="main" role="banner">

		<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory');?>/images/logo-light.png" /></a>
					</div>

		<?php if (is_front_page()) {
				$post_thumbnail_id = get_post_thumbnail_id();
				$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
			?>

			<div class="banner" style="background-image: url('<?php bloginfo('template_directory');?>/images/bg-header.jpg');">
				<div class="page-header">
					<h2>
					An <a href="<?php bloginfo('home');?>/about">international creative technology</a> team passionate about building <a href="<?php bloginfo('home');?>/selected-work">sturdy, long-standing websites</a> that are cultivated to be beautiful, and developed to be <a href="<?php bloginfo('home');?>/services">self-maintained</a></h2>
				</div>
		<?php } ?>



					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</div>

		<?php if (is_front_page()) { ?>
			</div>
		<?php } ?>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->







		</header> <!-- end header -->

		<div class="container">
