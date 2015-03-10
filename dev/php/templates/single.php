<?php get_header(); ?>
	<div class="u-gridContainer singlepost-wraper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div class="menu-line"></div>
			<div>
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			</div>
		</article>
		




	<?php endwhile; else: ?>

		<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>
	</div>
<?php get_footer(); ?>
