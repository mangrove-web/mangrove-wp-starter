<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

					<section class="space subhead">
						<div class="animated wow fadeIn" data-wow-duration="1s">
							<h2></h2>
						</div>
					</section>












					</article> <!-- end article -->

					<?php
						// No comments on homepage
						//comments_template();
					?>

					<?php endwhile; ?>

					<?php else : ?>



					<?php endif; ?>

				</div> <!-- end #main -->

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>