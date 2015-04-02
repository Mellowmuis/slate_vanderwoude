<?php get_header();  ?>
		<div class="u-gridContainer products-overview">
				<?php $counter= 1;
				if (have_posts()) : while (have_posts()) : the_post(); 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
					 ?>
				<?php if($counter % 4 == 1) { ?>
				<div class="u-gridRow row-<?php echo $counter; ?>">
				<?php } ?> 
					<div class="u-gridCol3 center">
						<div class="item">
							<a target="_blank" href="<?php the_permalink(); ?>">
								<img class="inner-line" src="<?php echo $image[0]; ?>" />
							</a>
						</div>
						<!-- 
						<a href="<?php the_permalink(); ?>">
							<div class="product-desc"><?php the_content(); ?></div>
						</a>
						-->

						<div class="category tags">
							<?php the_terms(get_the_ID(), 'lamptypes', 'Categorie: ', ', ', ''); ?>
						</div>
						<div class="series tags">
							<?php the_terms(get_the_ID(), 'series', 'Serie: ', ', ', ''); ?>
						</div>

					</div>
				<?php if($counter % 4 == 0) { ?>
				</div><!-- end row -->
				<?php } ?>
		<?php $counter++; endwhile; else: ?>
			Er zijn geen lampen gevonden in deze categorie.
		<?php endif;?>
		</div>
<?php get_footer(); ?>
