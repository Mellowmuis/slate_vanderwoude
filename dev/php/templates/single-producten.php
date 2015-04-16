<?php get_header(); ?>
	<div class="u-gridContainer singlepost-wraper products-single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 <?php	$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="menu-line"></div>
			<div class="u-gridRow">
				<div class="u-gridCol6">
					<div class="item">
						<img style="width:100%;" src="<?php echo $image[0]; ?>" class="inner-line product-image"/>
					</div>
				</div>
				<div class="u-gridCol6">
						<?php the_content(); ?>

						<div class="category tags">
							<?php the_terms(get_the_ID(), 'lamptypes', 'Categorie: ', ', ', ''); ?>
						</div>
						<div class="series tags">
							<?php the_terms(get_the_ID(), 'series', 'Serie: ', ', ', ''); ?>
						</div>
						<div class="edit-me tags">
							<?php edit_post_link('Edit', '', ' | '); ?>
						</div>
				</div>
			</div>
		</article>
	<?php endwhile; else: ?>

		<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>
	</div>
<?php get_footer(); ?>

