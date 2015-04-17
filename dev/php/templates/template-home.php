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
				<a href="/projecten"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project.jpg"></a>
			 </div>
			<div class="u-gridCol4">
				<a href="/projecten"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project2.jpg"></a>
			 </div>
			 <div class="u-gridCol4">
				<a href="/projecten"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/project3.jpg"></a>
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
				Denk hierbij vooral aan het op maat maken van lampen, deurgrepen, (bier)tapzuilen, enzovoorts.
			</p>
		</div>

		<div class="u-gridCol1"><p></div>

	</div>
		<?php 

		$taxonomies = array( 
			'lamptypes'
		);

		$args = array(

			'orderby'			=> 'id',
			'order'             => 'ASC',
			'hide_empty'		=> 0,
			'exclude'           => array(), 
			'exclude_tree'      => array(), 
			'include'           => array(),
			'fields'            => 'all', 
			'slug'              => '',
			'parent'            => '',
			'hierarchical'      => true, 
			'child_of'          => 0, 
			'get'               => '', 
			'name__like'        => '',
			'description__like' => '',
			'pad_counts'        => false, 
			'offset'            => '', 
			'search'            => '', 
			'cache_domain'      => 'core'
		); 

		$terms = get_terms($taxonomies, $args);
		include_once('global.php');
		global $imgMap;
		$i = 1;
		?>

		<div class="u-gridContainer products">
			<div class="content-line"></div>
			<h3 class="center">PRODUCTEN</h3>
			<div class="content-line"></div>

			<?php foreach($terms as $term){
			?>
				<?php if($i%4==1){ echo '<div class="u-gridRow">'; } ?>
				<div class="u-gridCol3 center">
					<div class="item">
						<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri().$imgMap[$term->slug]; ?>" /></a>
					</div>
					<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>">
						<h5><?php echo strtoupper($term->name); ?></h5>
					</a>
				</div>
				<?php if($i%4==0 || $i == count($terms)){ echo '</div>'; } ?>
			<?php $i++;
			}
			?>
		</div>

	<?php 

		$taxonomies = array( 
			'series'
		);

		$args = array(
			'orderby'           => 'name', 
			'order'             => 'ASC',
			'hide_empty'		=> 0,
			'exclude'           => array(), 
			'exclude_tree'      => array(), 
			'include'           => array(),
			'fields'            => 'all', 
			'slug'              => '',
			'parent'            => '',
			'hierarchical'      => true, 
			'child_of'          => 0, 
			'get'               => '', 
			'name__like'        => '',
			'description__like' => '',
			'pad_counts'        => false, 
			'offset'            => '', 
			'search'            => '', 
			'cache_domain'      => 'core'
		); 

		$terms = get_terms($taxonomies, $args);
		include_once('global.php');
		global $imgMap;
		?>

		<div class="u-gridContainer products">
			<div class="content-line"></div>
			<h3 class="center">SERIES</h3>
			<div class="content-line"></div>
			<div class="u-gridRow" style="text-align: center">
			<?php foreach($terms as $term){
			?>
				<div class="u-gridCol20percent center">
					<div class="item">
						<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri().$imgMap[$term->slug]; ?>" /></a>
					</div>
					<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>">
						<h5><?php echo $term->name; ?></h5>
					</a>
				</div>
			<?php
			}
			?>
			</div>
		</div>




		<div class="u-gridContainer"><div class="menu-line"></div></div>
	<div class="u-gridContainer"></div>
</div>
<?php get_footer(); ?>
