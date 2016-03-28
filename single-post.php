<?php get_header(); ?>
	<div class="thumbnail dancer">
		<?php if(has_post_thumbnail($post->ID)) : ?>
			<?php echo get_the_post_thumbnail( $post->ID, 'normal' ); ?>
		<?php else:?>

			<?php echo '<img src="' . get_template_directory_uri (). '/images/photo_no_available_dance.jpg" />'; ?>
		<?php endif;?>
	</div>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title"><?php the_title( "<h3 class=''>", "</h3>" ); ?></h3>
	  </div>
	  <div class="panel-body">
		<?php the_taxonomies();?>
	    <?php the_content( ); ?>
	  </div>
	</div>
</div>
<?php get_footer(); ?>