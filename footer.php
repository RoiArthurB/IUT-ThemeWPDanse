			<footer id="footer" class="row">
				<div class="col-md-12">
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
					<h1 class="blog-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo( get_bloginfo( 'title' ) ); ?></a>
					</h1>
					<span> <a href="<?php echo get_option('facebook_link') ;?>" target="_blank">Facebook</a> </span>
					<span>-</span>
					<span> <a href="<?php echo get_option('twitter_link') ;?>" target="_blank">Twitter</a> </span>
					<span>-</span>
					<span> <a href="<?php echo get_option('google_link') ;?>" target="_blank">Google +</a> </span>
				<?php endif; ?>
				</div>
			</footer>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
			<?php wp_footer(); ?>
			<!-- Bon qd le site sera en ligne!
			<script type ="text/javascript" src="<?php echo get_template_directory(); ?>/js/isotope.pkgd.min.js"></script>
			<script type="text/javascript" src="<?php echo get_template_directory(); ?>/js/app.js"></script>
			<script type="text/javascript" src="<?php echo get_template_directory(); ?>/js/jquery.bxslider.min.js"></script>  -->
			<!-- Isotope -->
			<script type ="text/javascript" src="http://localhost/wordpressthemeoce/wp-content/themes/dance/js/isotope.pkgd.min.js"></script>
			<script type ="text/javascript" src="http://localhost/wordpressthemeoce/wp-content/themes/dance/js/app.js"></script> 
			<!-- bxslider -->
			<script type ="text/javascript" src="http://localhost/wordpressthemeoce/wp-content/themes/dance/js/jquery.bxslider.min.js"></script> 
		</div>
		<!-- Fin .container -->
	</body>
</html>
