jQuery(document).ready(function($){
	$().ready(function (e) {
		$('.slickslide').slick({
			dots: true,
			infinite: true,
			speed: 500,
			fade: false,
			slide: 'li',
			cssEase: 'linear',
			arrows: true,
			centerMode: true,
			slidesToShow: 1,
			variableWidth: true,
			autoplay: true,
			autoplaySpeed: 4000,
			responsive: [{
				breakpoint: 800,
				settings: {
					arrows: false,
					centerMode: false,
					centerPadding: '2rem',
					variableWidth: false,
					slidesToShow: 1,
					dots: true
				},
				breakpoint: 1200,
				settings: {
					arrows: false,
					centerMode: false,
					centerPadding: '2rem',
					variableWidth: false,
					slidesToShow: 1,
					dots: true

				}
			}]
	    });
	});
});
