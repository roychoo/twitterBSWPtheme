<?php get_header(); ?>

	<div class="row">
		<div class="span9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div <?php post_class('post-unit') ?> id="post-<?php the_ID(); ?>">
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content(); ?>
				</div>

				<div class="postmetadata">
					<?php the_tags('Tags: ', ', ', '<br />'); ?>
					Posted in <?php the_category(', ') ?> | 
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</div>

			</div>
		</div>
		
		<?php get_sidebar(); ?>
		
	</div>
	<?php endwhile; ?>

	<!--<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>-->

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>



<?php get_footer(); ?>
