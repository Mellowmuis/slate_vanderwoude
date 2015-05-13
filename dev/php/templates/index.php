<?php get_header(); ?>
	<div class="u-gridContainer index-wraper">
					<h3 class="center"> PROJECTEN </h3>
			<div class="header-line"></div>
	<?php if (have_posts()) : ?>

		<?php 
				$counter = 0;

				while (have_posts()) : the_post(); ?>
				<?php  
					$image1 = get_field('image1');
					$counter++;
				?>
				<?php if($counter%2 == 1){ ?><div class="u-gridRow"><?php } ?>
				<article class="u-gridCol6 blogpost" <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<div class="menu-line"></div>
					<div>
						<?php if(!empty($image1)): ?>
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
						<?php endif; ?>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					
					</div>
				</article>
				<?php if($counter%2 == 0){ ?></div><!-- end row --><?php } ?>
			
		<?php endwhile; ?>

		<nav>
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</nav>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>
<?php get_footer(); ?>
