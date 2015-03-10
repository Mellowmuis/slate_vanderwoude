<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
					<h3 class="center">CONTACT</h3>
					<div class="content-line"></div>
					<div class="Content-entry">
						
						<div class="Content-text">

							<div class="u-gridRow">	
								<div class="adress-map u-gridCol12">
									<div id="map_canvas"></div>
								</div>				

							</div> <!-- /gridRow -->

							
							<div class="u-gridRow">
								<div class="adress u-gridCol4">
									<div class="adress-info">
										<h4>Contactgegevens</h4>
										<p>Van der Woude</p>
										<p>Zuideinde 19</p>
										<p>1521DA Wormerveer</p>
										<p>Email: info@vanderwoude.nl</p>
										<p>Tel: 075-6212580</p>
									</div>
			
								</div>		
								<div class="u-gridCol8">		
									<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
									<?php the_content(); ?>
								
									<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
								</div>	
							</div>

						</div> <!-- content-text -->
					</div>
				</article>
			<?php endwhile; endif; ?>

	</div>
<?php get_footer(); ?>

