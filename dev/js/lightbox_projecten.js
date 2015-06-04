jQuery(document).ready(function($){
	var title = $('.post h2').first().html();
	var url = $('.ngg-galleryoverview img').parent('a').attr('href');
	$('.ngg-galleryoverview img')
		.parent('a')
		.attr('rel','lightbox-lampen')
		.attr('title', title+ ". <a href='"+url+"' target='_blank' >Volledige afbeelding</a>'");

	$('.post .ngg-galleryoverview img').attr('height', '');

	if(window.innerWidth <= 400) {
//		$('.ngg-galleryoverview img').parent('a').append("<p class='show-on-mobile'>"+title+"</p>");
		jQuery('a[rel^="lightbox"] img').unwrap()

	}
});

