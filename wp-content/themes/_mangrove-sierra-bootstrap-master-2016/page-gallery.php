<?php
/* Template Name: Gallery */
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

									<?php $images = get_field('gallery');

									if( $images ): ?>
									    <div id="slider" class="flexslider">
									        <ul class="slides">
									            <?php foreach( $images as $image ): ?>
									                <li>
									                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
									                    <p><?php echo $image['caption']; ?></p>
									                </li>
									            <?php endforeach; ?>
									        </ul>
									    </div>
									    <?php

									    /* thumbnail navigation */

									    ?>
									    <div id="carousel" class="flexslider">
									        <ul class="slides">
									            <?php foreach( $images as $image ): ?>
									                <li>
									                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
									                </li>
									            <?php endforeach; ?>
									        </ul>
									    </div>
									<?php endif; ?>



						</section> <!-- end article section -->

						<footer>

							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>

						</footer> <!-- end article footer -->

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

				<?php get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>