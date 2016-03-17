<?php 
	require_once locate_template ( '/lib/vendors/wp_bootstrap_navwalker.php' );
?>
<div class="col-md-12">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo( get_bloginfo( 'title' ) ); ?></a>
			</div>			
							<?php
							wp_nav_menu ( array (
									'menu' => 'primary_navigation',
									'theme_location' => 'primary_navigation',
									'depth' => 2,
									'container' => 'div',
									'container_class' => 'collapse navbar-collapse',
									'container_id' => 'navbar-menu',
									'menu_class' => 'nav navbar-nav',
									'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
									'walker' => new wp_bootstrap_navwalker () 
							) );
							?>
						</div>
	</nav>
</div>
