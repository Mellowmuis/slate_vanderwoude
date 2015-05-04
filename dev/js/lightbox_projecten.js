jQuery(document).ready(function($){
	var title = $('.post h2').first().html();
	$('.ngg-galleryoverview img')
			.parent('a')
			.attr('data-lightbox','lamp-image')
			.attr('data-title', title);
});
