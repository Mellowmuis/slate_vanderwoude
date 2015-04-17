<?php
/*
Template Name: Fabriek
*/
?>

<?php get_header(); ?>
	<div>
		<div class="u-gridContainer">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h3 class="center"><?php the_title(); ?></h3>
			<div class="content-line"></div>
			<div class="u-gridCol4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fabriek.jpg">
			 </div>
			<div class="u-gridCol8">
					<article class="Content Content--twosidebar" id="post-<?php the_ID(); ?>">
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
			 </div>
		</div>
		<div class="u-gridContainer"><div class="menu-line"></div></div>
	</div>
	

	<div class="u-gridContainer"></div>
<?php get_footer(); ?>
