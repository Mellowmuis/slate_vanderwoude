<?php get_header();  ?>
		<div class="u-gridContainer products-overview">
				<?php 

				
				$orderedPosts = array();
				if (have_posts()) { 
					while (have_posts()) { 
						the_post(); 
					

					//get orientation of image

					$orderedPosts[] =  $post;
					}
				}


				function compareImage($a, $b){
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $a->ID ), 'medium' );
					$image2 = wp_get_attachment_image_src( get_post_thumbnail_id( $b->ID ), 'medium' );
					$aHorizontal = $image[1] > $image[2];
					$bHorizontal = $image2[1] > $image2[2];

					if($aHorizontal && $bHorizontal){
						return 0;
					} elseif($aHorizontal && !$bHorizontal) {
						return 1;
					} elseif($bHorizontal && !$aHorizontal){
						return -1;
					} else { 
						return 0;
					}
				}
				usort($orderedPosts, "compareImage");

				$counter= 1;
				foreach($orderedPosts as $p){ 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'medium' );
					$perm = get_permalink($p->ID);

				?>
				<?php if($counter % 4 == 1) { ?>
				<div class="u-gridRow row-<?php echo $counter; ?>">
				<?php } ?> 
					<div class="u-gridCol3 center">
						<div class="item">
							<a href="<?php echo $perm; ?>">
								<img class="inner-line" src="<?php echo $image[0]; ?>" />
							</a>
						</div>
						<div class="category tags">
							<?php the_terms($p->ID, 'lamptypes', 'Categorie: ', ', ', ''); ?>
						</div>
						<div class="series tags">
							<?php the_terms($p->ID, 'series', 'Serie: ', ', ', ''); ?>
						</div>

					</div>
				<?php if($counter % 4 == 0) { ?>
				</div><!-- end row -->
				<?php } 
					$counter++; 
				} 
		?>


		</div>
<?php get_footer(); ?>
