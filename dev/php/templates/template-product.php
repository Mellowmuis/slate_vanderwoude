<?php
/*
Template Name: Product
*/
?>

<?php get_header(); ?>
	
	<?php 

		$taxonomies = array( 
			'lamptypes'
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
			<h3 class="center">PRODUCTEN</h3>
			<div class="content-line"></div>
			<?php foreach($terms as $term){
			?>
				<div class="u-gridCol3 center">
					<div class="item">
						<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>"><img class="inner-line" src="<?php echo get_stylesheet_directory_uri().$imgMap[$term->slug]; ?>" /></a>
					</div>
					<a href="/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>">
						<h5><?php echo strtoupper($term->name); ?></h5>
					</a>
				</div>
			<?php
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


<?php get_footer(); ?>