<?php get_header();  ?>
		<div class="u-gridContainer products-overview">
				<?php 

				
				$orderedPosts = array();
				if (have_posts()) { 
					while (have_posts()) { 
						the_post(); 
						$orderedPosts[] =  $post;
					}
				}

				function compareImage($a, $b){
					//Make regex on diameter voor beide

					//doe dan de sort
					$re = '/Diameter[\s]*([0-9]+)/';

					 
					$strA = $a->post_title;
					$strB = $b->post_title;
					$matchesA = array();
					$matchesB = array();
					preg_match($re, $strA, $matchesA);
					preg_match($re, $strB, $matchesB);

					if(count($matchesA) < 2){
						//echo 'no match A ['.$strA.'](B was: '.$strB.')<br/>';
						//print_r($matchesA);
						return -1;
					}
					if(count($matchesB) < 2){
						//echo 'no match B '.$strB.'(A was: '.$strA.')<br/>';
						//print_r($matchesB);
						
						return 1;
					}
					$score =  $matchesA[1] > $matchesB[1] ? 1 : -1;
					//echo $score . ' = ' . $matchesA[1].' | '. $matchesB[1].'<br/>';
					return $score;
				}

				//echo '<pre>';
				//print phpversion();
				
				$b = usort($orderedPosts, "compareImage");
				//print_r($orderedPosts);
				$counter= 1;
				foreach($orderedPosts as $p){ 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'medium' );
					$imageLarge = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'large' );
					$perm = get_permalink($p->ID);

				?>
				<?php if($counter % 4 == 1) { ?>
				<div class="u-gridRow row-<?php echo $counter; ?>">
				<?php } ?> 
					<div class="u-gridCol3 center ">
						<div class="item">
							<?php //echo $p->post_title; ?>
							<a href="<?php echo $imageLarge[0]; ?>" class="lamp"> 
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
