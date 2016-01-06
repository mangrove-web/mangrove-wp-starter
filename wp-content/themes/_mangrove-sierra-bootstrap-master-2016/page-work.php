<? /*
Template Name: Work
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header>

							<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>

						</header> <!-- end article header -->

						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>

							<section class="featured-work row">
						<ul class="nostyle">
						<?php
			              $temp = $wp_query;
			              $wp_query = null;
			              $wp_query = new WP_Query('post_type=work&order=DESC&orderby=date&category_name=featured&posts_per_page=12&&post_status=publish&paged=' . $paged);
			                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<li class="grid">
							<a href="<?php the_permalink() ?>">
							<figure class="effect-bubba">
								 <?php if ( has_post_thumbnail() ) {
								  the_post_thumbnail('mangrove-thumb');
								} ?>
								<figcaption>
									<h3><?php the_title() ?></h3>
									<article><p><?php the_field('short_desc');?></p>
									<h4>WordPress</h4></article>
								</figcaption>
							</figure>
							</a>
						</li>

			        <?php endwhile;
			        $wp_query = null; $wp_query = $temp; ?>

			        <?php endif; ?>
			        <?php wp_reset_query();?>
			     </ul>

			     </section>

						</section> <!-- end article section -->


					</article> <!-- end article -->

					<?php //comments_template('',true); ?>

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


			</div> <!-- end #content -->

<?php get_footer(); ?>