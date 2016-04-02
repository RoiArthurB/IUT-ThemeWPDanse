<div class="panel panel-default">
	<a href="<?php echo get_permalink(); ?>" style="text-decoration: none;">
		<div class="media">
			<div class="media-left">
				<?php if ( has_post_thumbnail($post->ID) ) : ?>
					<?php the_post_thumbnail('cover'); ?>
				<?php else : ?>
					<!-- <img src="https://unsplash.it/200/?random" />-->
					<img src="<?php echo get_template_directory_uri(); ?>/images/no_photo_post.jpg" />
				<?php endif; ?>
			</div>
			<div class="text-center media-body" style="vertical-align: middle;">
				<h3 class='panel-title vcenter'><?php the_title();?></h3>
			</div>
		</div>
	</a>
	<hr>
	<div class="panel-body">
		<?php the_excerpt(); ?>
		<a href="<?php echo get_permalink(); ?>"> Lire la suite...</a>
	</div>
</div>