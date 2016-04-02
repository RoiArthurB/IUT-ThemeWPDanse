<div class="thumbnail">
	<?php if(has_post_thumbnail($post->ID)) : ?>
		<?php the_post_thumbnail('cover'); ?>
	<?php else:?>
		<?php echo '<img src="' . get_template_directory_uri (). '/images/photo_no_available_spectacle.jpg" />'; ?>
	<?php endif;?>
	
	<div class="caption">
	<a class="text-center" href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
	</div>
</div>
