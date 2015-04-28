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
					$re = "/Diameter([0-9]+)/ius";

					$strA = str_replace(':','', str_replace('\r','', str_replace(' ', '', substr($a->post_title, 0, 400))));
					$strB = str_replace(':','', str_replace('\r','', str_replace(' ', '', substr($b->post_title, 0, 400))));

					$matchesA = array();
					$matchesB = array();
					if(preg_match($re, $strA, $matchesA) === 0){
						$matchesA = array();

						//match on length now
						$re2 = "/Lengte([0-9]+)/ius";
						if(preg_match($re2, $strA, $matchesA) === 0) {
							$re3 = "/Breedte([0-9]+)/ius";
							$matchesA = array();
							if(preg_match($re3, $strA, $matchesA) === 0) {
							
								$re4 = "/Hoogte([0-9]+)/ius";
								$matchesA = array();
								if(preg_match($re4, $strA, $matchesA) === 0) {
									echo 'none match a'.$strA;
									return -1;
								}
	
							}
						}
					}
					if(preg_match($re, $strB, $matchesB) === 0){
						$matchesB = array();

						$re2 = "/Lengte([0-9]+)/ius";
						if(preg_match($re2, $strB, $matchesB) === 0) {
							$re3 = "/Breedte([0-9]+)/ius";
							$matchesB = array();
							if(preg_match($re3, $strB, $matchesB) === 0) {
								$re4 = "/Hoogte([0-9]+)/ius";
								$matchesB = array();
								if(preg_match($re4, $strB, $matchesB) === 0) {
									echo 'none match b'.$strB;
									return -1;
								}
							}
						}
					}
					$score =  intval($matchesA[1]) >= intval($matchesB[1]);

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
							<?php // echo $p->post_title; ?>
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
