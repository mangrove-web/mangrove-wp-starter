<?php get_header(); ?>

	<div id="content" class="animateIn">

		<div id="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

					<section class="">

							<div class="flexslider loading">
							  <ul class="slides">
							    <li>
							      <img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=2196f3&txtclr=000000&txt=1400%C3%97600&w=1400&h=600" />
							    </li>
							    <li>
							      <img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=e91e63&txtclr=000000&txt=1400%C3%97600&w=1400&h=600" />
							    </li>
							    <li>
							      <img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=009688&txtclr=000000&txt=1400%C3%97600&w=1400&h=600" />
							    </li>
							  </ul>
							</div>

							<?php the_content() ?>

					</section>

				</article> <!-- end article -->


			<?php endwhile; endif; ?>

		</div> <!-- end #main -->

		<?php //get_sidebar(); // sidebar 1 ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>
