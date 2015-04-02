<?php
/*
Template Name: Post Producten
*/
?>

<?php get_header(); ?>
<div class="u-gridContainer">
	<?php while (have_posts()) : the_post(); ?>
		
			<div class="product-thumb u-gridCol2">
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
				<!--<div class="thumb-text">
					<a id="post-<?php the_ID(); ?>">
						<a href="javascript:;" 
						   rel="bookmark"
						   class="thumb-title" 
						   title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					</a>
				</div>-->
			</div>
		
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>
