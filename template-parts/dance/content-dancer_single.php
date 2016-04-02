<?php 
	$facebook_url   = get_post_meta( get_the_ID(), '_dance_dancer_social_facebook', true );
	$twitter_url   = get_post_meta( get_the_ID(), '_dance_dancer_social_twitter', true );
	$color   = get_post_meta( get_the_ID(), '_dance_dancer_social_dancer_color', true );
	$galery = get_post_meta(get_the_ID(), '_dance_dancer_options_galery', true );
?>

<?php the_title( "<h1 class='text-center'>", "</h1>" ); ?>

<div class="thumbnail dancer">
	<?php if(has_post_thumbnail($post->ID)) : ?>
		<?php echo get_the_post_thumbnail( $post->ID, 'normal' ); ?>
	<?php else:?>
		<?php echo '<img src="' . get_template_directory_uri (). '/images/photo_no_available_dance.jpg" />'; ?>
	<?php endif;?>
	<div class="caption">
		<a style="color:<?php echo $color; ?>" href="<?php echo esc_url($facebook_url); ?>"><i class="fa fa-facebook-official fa-3x"></i></a>
		<a style="color:<?php echo $color; ?>" href="<?php echo esc_url($twitter_url); ?>"><i class="fa fa-twitter fa-3x"></i></a>
	</div>
</div>
<div class="dancer-content">
    <?php the_title( "<h3 class=''>", "</h3>" ); ?>
	<?php the_taxonomies();?>
  <hr>
    <?php the_content( ); ?>
</div>
<?php cmb2_output_file_list( 'wiki_test_file_list', 'medium' ); ?>