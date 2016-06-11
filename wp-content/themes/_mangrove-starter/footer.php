<?php namespace Mangrove; ?>
			<footer>
				<div class="inner-footer contain">
					<div class="col attribution"><p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p></div>

					<div class="col social">
						<ul class="nostyle social inline">
							<li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://yelp.com"><i class="fa fa-yelp"></i></a></li>
							<li><a href="http://instagram.com"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>

				</div>
			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<?php
		wp_footer();
		the_mobile_nav();
		?>

	</body>

</html><?php

// Functions

function the_mobile_nav(){ ?>
	<nav class="mobile"><?php
		wp_nav_menu(
			array(
				'theme_location' => 'main_nav', /* where in the theme it's assigned */
				'container' => false,
			)
		); ?>
	</nav><?php
}
