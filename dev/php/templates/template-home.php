<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="u-gridContainer">
		<div class="u-gridContainer">
			<h3 class="center">HOME</h3>
			<div class="content-line"></div>
		</div>
		<div class="u-gridContainer">
			<div class="u-gridCol4">
				<a href="/projecten"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project.png"></a>
			 </div>
			<div class="u-gridCol4">
				<a href="/projecten"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.png"></a>
			 </div>
			 <div class="u-gridCol4">
				<a href="/projecten"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project3.png"></a>
			 </div>
		</div>
		<div class="u-gridContainer"><div class="menu-line"></div></div>

	<div class="u-gridContainer">
		<div class="u-gridCol1">
			<p>
		</div>
		<div class="u-gridCol10 text-home">
			<h1 align="center">SINDS 1962</h1>
			<p>Meer dan 50 jaar gespecialiseerd in zowel verlichting als metaalwaren in de ruimste zin.
				De producten uit eigen fabriek vinden aftrek in binnen- en buitenland.
				Naast het bestaande assortiment wordt er veel maatwerk geleverd.
				Denk hierbij vooral aan het op maat maken van lampen, deurgrepen, (bier)tapzuilen, 
			</p>
		</div>

		<div class="u-gridCol1"><p></div>

	</div>


		<div class="u-gridContainer products">
			<div class="content-line"></div>
			<h3 class="center">PRODUCTEN</h3>
			<div class="content-line"></div>
			<div class="u-gridCol3 center">
				
				<div class="item"><a href="/hanglampen"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hang.png"></a></div>
				<a href="/hanglampen"><h5>HANGLAMPEN</h5></a>
			 </div>
			<div class="u-gridCol3 center">
				
				<div class="item"><a href="/wandlampen"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/wand.png"></a></div>
				<a href="/wandlampen"><h5>WANDLAMPEN</h5></a>
			 </div>
			 <div class="u-gridCol3 center">
				
				<div class="item"><a href="/staande-lampen"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sta.png"></a></div>
				<a href="/staande-lampen"><h5>STAANDE LAMPEN</h5></a>
			 </div>
			 <div class="u-gridCol3 center">
				
				<div class="item"><a href="/plafonnieres"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri(); ?>/img/plafond.png"></a></div>
				<a href="/plafonnieres"><h5>PLAFONNIÈRES</h5></a>
			 </div>
		</div>
		<div class="u-gridContainer"><div class="menu-line"></div></div>
	<div class="u-gridContainer"></div>
</div>
<?php get_footer(); ?>
