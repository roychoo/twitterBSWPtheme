<?php get_header(); ?>
	<div class="row-fluid">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class='span12'>
			<div <?php post_class('hero-unit') ?> id="post-<?php the_ID(); ?>">
				
				<h2><?php the_title(); ?></h2>
				
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
				
				<?php edit_post_link('Edit this entry','','.'); ?>
				
			</div>
		</div>
	</div>
	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	
<!--<?php get_sidebar(); ?>-->

<?php get_footer(); ?>