jQuery(function ($) {

	$(window).bind("load resize", function () {
		if ($(window).width() < 991) {
			new Mmenu("#primary-menu", {
				extensions: ["position-right"]
			}, {
				offCanvas: {
					clone: true
				}
			});
		}
	});

	$('.primary-slider-wrapper').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 3000,
	});

	$('.news-slick-slider').slick({
		dots: false,
		arrows: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.statistic-slick-slider').slick({
		dots: true,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
				}
			}
		]
	});

});
