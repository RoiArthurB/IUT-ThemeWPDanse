<?php
global $redux_dance;
$slides = $redux_dance ['opt-slides'];
$slidewidth = $redux_dance ['opt-slider-size-width'];
$slidemin = $redux_dance ['opt-slider-min-slides'];
$slidemax = $redux_dance ['opt-slider-max-slides'];
$slidemargin = $redux_dance ['opt-slider-margin-slides'];
$slidepager = $redux_dance ['opt-slider-pager-slides'];
$slidecaptions = $redux_dance ['opt-slider-captions-slides'];
$slidemoveslides = $redux_dance ['opt-slider-move-slides'];
?>
<ul class="bxslider" data-bx-slidewidth="<?php echo $slidewidth; ?>"
	data-bx-minslides="<?php echo $slidemin; ?>"
	data-bx-maxslides="<?php echo $slidemax; ?>"
	data-bx-slidemargin="<?php echo $slidemargin; ?>"
	data-bx-pager="<?php echo $slidepager; ?>"
	data-bx-captions="<?php echo $slidecaptions; ?>"
	data-moveslides="<?php echo $slidemoveslides; ?>">
<?php foreach ($slides as $slide) : ?>
	<li><img src="<?php echo $slide['image'];?>" alt=""
		title="<?php echo $slide['title']; ?>" /></li>
<?php endforeach;?>
</ul>