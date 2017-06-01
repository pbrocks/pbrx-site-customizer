jQuery( document ).ready( function( $ ){
	// $('#carousel-slider').slick({
		$('.slider').slick({
		dots: true,
		autoplay: true,
		infinite: true,
		autoplaySpeed:2500,
		speed: 1500,
		slide: 'div',
		cssEase: 'linear',
		arrows: true
	});
	$('.slideree').slick({
		dots: true,
		autoplay: true,
		infinite: true,
		autoplaySpeed:2500,
		speed: 1500,
		slide: 'div',
		cssEase: 'linear',
		arrows: true
	});
	$('.single-item').slick({
		arrows: true,
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed:2500,
		speed: 1500,
		variableWidth: true,
		// onAfterChange: function(){ 
		// 	var cat = ($('#carousel').slickCurrentSlide()) + 1;
		// 	$('.client-text > li').hide();
		// 	$('.client-text > li:nth-child('+ cat +')').show();
	 //    }
	});
});

