<?php get_header(); ?>

			<div id="content" class="clearfix">

				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="contain">
						<header>
							<div class="page-header"><h1 style="display: inline-block" class="single-title" itemprop="headline"><?php the_title(); ?></h1> <h3 style="display: inline-block;"><span style="margin: 0 .5em 0 1em;">//</span><?php the_field('subtitle');?></h3></div>
							<p class="meta"><time><?php the_time('F jS, Y');?></time></p>
						</header> <!-- end article header -->

					<div class="row">
						<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-8 clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<?php //the_post_thumbnail( 'wpbs-featured' ); ?>

							<section class="post_content clearfix" itemprop="articleBody">
								<?php the_content(); ?>


							</section> <!-- end article section -->



						</article> <!-- end article -->


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



					<?php get_sidebar(); // sidebar 1 ?>
					</div>
					</article>
					</div> <!-- end #main -->

			</div> <!-- end #content -->

<?php get_footer(); ?>