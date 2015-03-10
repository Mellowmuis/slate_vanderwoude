<?php
/*
Template Name: Product
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer">
		<div class="u-gridContainer products">
			<h3 class="center">PRODUCTEN</h3>
			<div class="content-line"></div>
			<div class="u-gridCol3 center">
				<div class="content-line"></div>
				<div class="item"><a href="/hanglampen"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hang.png"></a></div>
				<a href="/hanglampen"><h5>HANGLAMPEN</h5></a>
			 </div>
			<div class="u-gridCol3 center">
				<div class="content-line"></div>
				<div class="item"><a href="/wandlampen"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/wand.png"></a></div>
				<a href="/wandlampen"><h5>WANDLAMPEN</h5></a>
			 </div>
			 <div class="u-gridCol3 center">
				<div class="content-line"></div>
				<div class="item"><a href="/staande-lampen"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sta.png"></a></div>
				<a href="/staande-lampen"><h5>STAANDE LAMPEN</h5></a>
			 </div>
			 <div class="u-gridCol3 center">
				<div class="content-line"></div>
				<div class="item"><a href="/plafonnieres"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/plafond.png"></a></div>
				<a href="/plafonnieres"><h5>PLAFONNIÈRES</h5></a>
			 </div>
		</div>
		<div class="u-gridContainer"><div class="menu-line"></div></div>
	</div>


<?php get_footer(); ?>