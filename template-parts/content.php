<div class="panel panel-default">
	<div class="panel-heading">
		<?php if ( has_post_thumbnail($post->ID) ) : ?>
			<?php the_post_thumbnail('cover'); ?>
		<?php else : ?>
			<img src="https://unsplash.it/200/?random" />
		<?php endif; ?>
		<?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?>
	</div>
	<div class="panel-body">
		<?php the_author(); ?> has blogged <?php the_author_posts(); ?> posts
		<p>Other posts by <?php the_author_posts_link(); ?></p> 
    	<?php the_content( ); ?>
  </div>
</div>