<div class="panel panel-default">
	<div class="panel-heading">
		<a href="<?php echo get_permalink(); ?>" style="text-decoration: none;">
			<?php if ( has_post_thumbnail($post->ID) ) : ?>
				<?php the_post_thumbnail('cover'); ?>
			<?php else : ?>
				<img src="https://unsplash.it/200/?random" />
			<?php endif; ?>
			<?php the_title( "<h3 class='panel-title text-center'>", "</h3>" ); ?>
		</a>
	</div>
	<div class="panel-body">
		<?php the_author(); ?> has blogged <?php the_author_posts(); ?> posts
		<p>Other posts by <?php the_author_posts_link(); ?></p> 
    	<?php the_excerpt( ); ?>
    	<a href="<?php echo get_permalink(); ?>"> Lire la suite...</a>
  </div>
</div>