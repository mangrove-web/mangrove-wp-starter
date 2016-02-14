<? /*
Template Name: Blog
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix">

				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header>

							<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>

						</header> <!-- end article header -->

						<section class="post_content clearfix" itemprop="articleBody">
							<article class="contain">
							<?php the_content(); ?>

							<div class="row grid-blog">
							<ul class="nostyle">
								<?php
		              $temp = $wp_query;
		              $wp_query = null;
		              $wp_query = new WP_Query('post_type=post&order=DESC&orderby=date&posts_per_page=6&&post_status=publish&paged=' . $paged);
		                    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

									<li class="grid col-sm-3">
										<a href="<?php the_permalink() ?>">
										<figure>
											<?php
													$attachment_id = get_field('thumbnail_abstract');
													$size = "mangrove-thumb-sq"; // (thumbnail, medium, large, full or custom size) ;
													$image = wp_get_attachment_image_src( $attachment_id, $size );
													?>
											 <?php if ( $image ) { ?>
													<img src="<?php echo $image[0]; ?>" />
											<?php }
											else {
												the_post_thumbnail('mangrove-thumb');
											} ?>
											<figcaption>
												<h3><?php the_title() ?></h3><br />
												<article><p><?php the_field('subtitle');?></p>
												</article>
											</figcaption>
										</figure>
										</a>
									</li>

					        <?php endwhile;
					        $wp_query = null; $wp_query = $temp; ?>

					        <?php endif; ?>
					        <?php wp_reset_query();?>
				     	</ul>
			     	</div>
			     	</article>

						</section> <!-- end article section -->


					</article> <!-- end article -->


					<?php endwhile; ?>

					<?php else : ?>



					<?php endif; ?>

				</div> <!-- end #main -->


			</div> <!-- end #content -->

<?php get_footer(); ?>