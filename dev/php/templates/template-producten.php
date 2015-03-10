<?php
/*
Template Name: Producten
*/
?>

<?php get_header(); ?>
	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridContainer singlepost-wraper">
			<article class="Content" id="post-<?php the_ID(); ?>">
				<h3 class="center"><?php the_title(); ?></h3>
				<div class="content-line"></div>
				<div class="u-gridCol12">
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		</div>
	</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
