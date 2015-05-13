jQuery(document).ready(function($){
	var title = $('.post h2').first().html();
	$('.ngg-galleryoverview img')
			.parent('a')
			.attr('rel','lightbox-lampen')
			.attr('title', title);


	$('.post .ngg-galleryoverview img').attr('height', '');
});

