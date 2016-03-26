$('.grid').isotope({
  // options
  itemSelector: '.grid-item',
  layoutMode: 'masonry'
});

$(document).ready(function(){
  $('.bxslider').bxSlider({
	captions: true,
	minSlides: 2,
	maxSlides: 4,
	slideWidth: 170,
	slideMargin: 10
  });
});