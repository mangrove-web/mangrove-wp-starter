<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header>

							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>


							<?php if (get_field('sustenance')) { ?>
				<h4 class="sustenance">Sustenance: </h4><ul><?php the_field ('sustenance'); ?></ul>
			<?php } ?>

			<h4>Launched <?php the_time('F, Y');?></h4>
			<h4 class="siteurl"><a target="_blank" href="<?php the_field('siteurl');?>">view site</a></h4>

			<h4>roots: </h4>
			<ul class="categories">

				<?php the_category(', '); ?>
				</ul>
					<?php if (get_field('testimonial')) { ?>
				<article class="testimonial"><h4>Kind Words:</h4><p><?php the_field ('testimonial'); ?></p></article>
			<?php } ?>

						</header> <!-- end article header -->

						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>

									<?php $images = get_field('project_images');

									if( $images ): ?>
									    <div id="proj" class="">
									        <ul class="images">
									            <?php foreach( $images as $image ): ?>
									                <li>
									                    <img src="<?php echo $image['sizes']['mangrove-xlarge']; ?>" alt="<?php echo $image['alt']; ?>" />
									                    <p><span><?php echo $image['caption']; ?></span>

									                </li>
									            <?php endforeach; ?>
									        </ul>
									    </div>

									<?php endif; ?>





						</section> <!-- end article section -->


					</article> <!-- end article -->

					<?php comments_template('',true); ?>

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