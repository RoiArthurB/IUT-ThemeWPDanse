$('.grid').isotope({
  // options
  itemSelector: '.grid-item',
  layoutMode: 'masonry'
});

$(document).ready(function(){
  $('.bxslider').bxSlider({
	captions: true,
	pager: false,
	minSlides: 2,
	maxSlides: 4,
	slideWidth: 170,
//	slideHeight: 170,
	slideMargin: 10
  });
});