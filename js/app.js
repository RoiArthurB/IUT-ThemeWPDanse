$('.grid').isotope({
    // options
    itemSelector: '.grid-item',
    layoutMode: 'masonry'
});

jQuery(document).ready(function($) {

    $('.bxslider').each(function() {
        var bx_slidewidth = $(this).data('bx-size');
        //TODO corriger les propriétés
        // var bx_slideNbrMin = $(this).data('bx-slide-nbr');
        var bx_pager = ($(this).data('bx-pager') == 1);
        var bx_caption = ($(this).data('bx-caption') == 0);

        $(this).bxSlider({
            captions: bx_caption,
            pager: bx_pager,
            minSlides: 2, //bx_slideNbrMin,
            maxSlides: 5, //bx_slideNbrMin,
            slideWidth: bx_slidewidth,
            //	slideHeight: 170,
            slideMargin: 10
        });
    });

    $('.bxsliderDancer').each(function() {
        var bx_slidewidth = $(this).data('bx-size');
        //TODO corriger les propriétés
        // var bx_slideNbrMin = $(this).data('bx-slide-nbr');
        var bx_pager = ($(this).data('bx-pager') == 1);

        console.log(bx_slidewidth);
        console.log(bx_pager);

        $(this).bxSlider({
            minSlides: 2, //bx_slideNbrMin,
            maxSlides: 10, //bx_slideNbrMin,
            slideMargin: 10,
            slideWidth: bx_slidewidth,
            pager: bx_pager
        });
    });

});