<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-12 col-md-9">
			<div class="text-center" style="text-transform: uppercase;"><?php the_category(', ');?></div>
			<h3 class="text-center" style="text-transform: uppercase;"><?php the_title(); ?></h3>
			<div class="text-center">
				<span>written by <?php the_author(); //TODO Pk ça marche pas? :( ) ?></span>
				<span>|</span>
				<span><?php echo get_the_date(); ?></span>
			</div>
			<?php if(has_post_thumbnail($post->ID)) : ?>
			<div class="text-center" style="padding: 10px">
				<?php echo get_the_post_thumbnail( $post->ID, 'normal' ); ?>
			</div>
			<?php endif;?>
			<div class="panel-body">
				<?php the_content() ?>
			</div>
		</div>
		<div id="sidebar" class="col-md-3 hidden-xs hidden-sm">
			<?php get_sidebar();?>
		</div>
	</div>
</div>
<?php get_footer(); ?>