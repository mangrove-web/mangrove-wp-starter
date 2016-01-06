<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<section class="row subhead">
							<div class="col-xs-12">
								<h2>We strive to understand <strong>why</strong> you do what you do and help you do it <strong>better</strong></h2>

								<p style="text-align: center;"><a href="http://tympanus.net/Development/HoverEffectIdeas/index.html">See more hover effects here</a></p>
							</div>
						</section>



						<section class="featured-work row">
						<ul class="nostyle">
						<?php
			              $temp = $wp_query;
			              $wp_query = null;
			              $wp_query = new WP_Query('post_type=work&order=DESC&orderby=date&category_name=featured&posts_per_page=6&&post_status=publish&paged=' . $paged);
			                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<li class="grid col-sm-4">
							<a href="<?php the_permalink() ?>">
							<figure class="effect-bubba">
								 <?php if ( has_post_thumbnail() ) {
								  the_post_thumbnail('mangrove-thumb-sq');
								} ?>
								<figcaption>
									<h3><?php the_title() ?></h3>
									<article><p><?php the_field('short_desc');?></p>
									<h4>WordPress</h4></article>
								</figcaption>
							</figure>
							</a>
						</li>


						<?php /* <li id="post-<?php the_ID() ?>" <?php post_class('portfolio col-xs-12 col-sm-6'); ?>>
							<a href="<?php the_permalink() ?>">
								<section class="inner-content">

								  <?php if ( has_post_thumbnail() ) {
								  the_post_thumbnail('mangrove-thumb');
								} ?>
						   		<article>
						   			<h3 class="entry-title"><?php the_title() ?></h3>
						   			<p>Blurb about this project </p>
						   			<hr />
						   			<h4>Wordpress Etc</h4>
						   		</article>

								</section>
							</a>

						</li><!-- .post --> */?>

			        <?php endwhile;
			        $wp_query = null; $wp_query = $temp; ?>

			        <?php endif; ?>
			        <?php wp_reset_query();?>
			     </ul>

			     </section>
			     <div class="row" style="text-align: center;">
			     	<a class="button button-default" href="<?php bloginfo('home');?>/selected-work">View all Work</a>
			     </div>

			     <section class="row post_content">
			     <div class="col-xs-12">
				     <h3>Our Systems/Services</h3>

				     <p>Our goal is to build something valuable for the client and the user.  We design and develop using various Content Management Systems for the web (these are our focus areas).  Something about choosing the right tool, building for functionality / ease of use for client</p>

				     <p>Selling a product, launching a brand, providing resources for your community?  We want to help you do it effectively and flexibly.  Below are our favorite tools and areas of expertise.  We work with you to develop the right system and solution for the project.  (Also, our services include Web Strategy,Web Design, Print Design, User Experience)</p>
			     </div>

						<div class="col-xs-12" style="margin: 40px 0;">
							<ul class="systems nostyle">
								<li class="col-sm-4">WordPress</li>
								<li class="col-sm-4">Squarespace</li>
								<li class="col-sm-4">Shopify</li>
							</ul>
						</div>
							<div class="col-xs-12" style="text-align: center;">
								 	<small>Why do we use these tools and what's a CMS?? (link to blog post)</small>
								 	<p>we’re always seeking out new technologies, [we are adaptive + evolving]</p>
							</div>

						</section> <!-- end article header -->


						 <div class="row" style="text-align: center;">

							<div class="col-xs-12">

								<h3>Have a project you'd like to work on?</h3>
								<a href="<?php bloginfo('home');?>/contact" class="button button-default">Let's work together</a>

							</div>


						</section> <!-- end article header -->

					</article> <!-- end article -->

					<?php
						// No comments on homepage
						//comments_template();
					?>

					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>