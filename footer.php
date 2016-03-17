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
					<span> RESEAUX SOCIAUX </span>
				<?php endif; ?>
				</div>
			</footer>
			<?php wp_footer(); ?>
		</div>
		<!-- Fin .container -->
	</body>
</html>
