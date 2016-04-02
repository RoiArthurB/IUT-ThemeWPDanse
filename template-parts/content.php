<div class="panel panel-default">
	<a href="<?php echo get_permalink(); ?>" style="text-decoration: none;">
		<div class="text-center" style="overflow: hidden; height: 40vh;">
				<?php if ( has_post_thumbnail($post->ID) ) : ?>
					<?php the_post_thumbnail('style="display: block; width: 100%; height: 100%;"'); ?>
				<?php else : ?>
					<!-- <img src="https://unsplash.it/200/?random" />-->
					<img src="<?php echo get_template_directory_uri(); ?>/images/no_photo_post.jpg" style="display: block; width: 430px; height: 430px;"/>
				<?php endif; ?>
		</div>
		<div class="text-center" style="vertical-align: middle;">
			<h3 class='panel-title vcenter'><?php the_title();?></h3>
		</div>
	</a>
	<hr>
	<div class="panel-body">
		<?php the_excerpt(); ?>
		<a href="<?php echo get_permalink(); ?>"> Lire la suite...</a>
	</div>
</div>