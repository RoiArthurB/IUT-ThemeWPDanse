			<footer id="footer" class="row">
				<div class="col-md-12" style="text-align: center;">
				<?php if ( is_active_sidebar( 'secondary_navigation' ) ) : ?>
					<?php
						wp_nav_menu ( array (
								'menu' => 'secondary_navigation',
								'container' => 'div',
								'container_class' => 'text-right',
								'menu_class' => 'list-inline',
								
						) );
					?>
				<?php else : ?>
			<!-- Title -->
				<h1 class="blog-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo( get_bloginfo( 'title' ) ); ?></a>
				</h1>
				<div class="header-social">
					<div class="inner-header-social">
						<a href="<?php echo get_option('facebook_link') ;?>" target="_blank"><i class="fa fa-facebook"></i></a>

						<a href="<?php echo get_option('twitter_link') ;?>" target="_blank"><i class="fa fa-twitter"></i></a> 

						<a href="<?php echo get_option('google_link') ;?>" target="_blank"><i class="fa fa-google-plus"></i></a>

						<a href="<?php echo get_option('instagram_link') ;?>" target="_blank"><i class="fa fa-instagram"></i></a>

						<a href="<?php echo get_option('pinterest_link') ;?>" target="_blank"><i class="fa fa-pinterest"></i></a>

						<a href="<?php echo get_option('tumblr_link') ;?>" target="_blank"><i class="fa fa-tumblr"></i></a>
					</div>
				</div>
				<?php endif; ?>
				</div>
			</footer>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
			<?php wp_footer(); ?>
			<!-- Isotope -->
			<script type ="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
			<!-- bxslider -->
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script> 
		</div>
		<!-- Fin .container -->
	</body>
</html>
