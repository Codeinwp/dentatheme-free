/**
 *	Limit Menu
 */
var full_width = 0;

jQuery(".navigation ul:first > li").each(function( index ) {
	if((jQuery(this).width() + full_width) > 550) {
		jQuery(this).remove();
	}
	full_width = full_width + jQuery(this).width();
});

/**
 *	jQuery
 */
jQuery(document).ready(function($) {

	/* Testimonials Slides */
	$('#testimonials-slides').carouFredSel({
		width: 1018,
		auto: false,
		prev: '#testimonials-slide-prev',
		next: '#testimonials-slide-next',
		items: 1,
		responsive: true
	});

	/* Similar Article Carousel */
	$('#similar-article-carousel').carouFredSel({
		width: 1018,
		auto: false,
		prev: '#similar-article-prev',
		next: '#similar-article-next',
		items: 4,
		responsive: true
	});

	/* Fancybox */
	$(".fancybox").fancybox();

	/* Masonry */
	var $container = $('.gallery');

	$container.imagesLoaded( function(){
		$container.masonry({
			itemSelector : 'dl.gallery-item'
		});
	});

	/* Responsive Menu */
	$('.openresponsivemenu').click(function() {
		$('.navigation').toggleClass("responsivemenu cf");
	});

});