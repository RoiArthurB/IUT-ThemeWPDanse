<div class="panel panel-default">
	<div class="panel-heading">
		<?php the_title( "<h3 class='panel-title'>", "</h3>" ); ?>
	</div>
	<div class="panel-body">
	<?php if (has_post_thumbnail ( $post->ID )) : ?>
		<div class="pull-left">
		<?php the_post_thumbnail('thumbnail', array( 'class' => 'img-circle' ) ); ?>
		</div>
	<?php endif; ?>
    <?php the_content( ); ?>
  </div>
</div>

