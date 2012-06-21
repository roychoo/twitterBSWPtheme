<?php get_header(); ?>
	<div class="row">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class='span12'>
			<div <?php post_class('post-unit') ?> id="post-<?php the_ID(); ?>">
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				<h2><?php the_title(); ?></h2>
				
				<div class="entry">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
				
				<?php edit_post_link('Edit this entry','','.'); ?>
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
					<a class="addthis_counter addthis_pill_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f6fc0b66d59de88"></script>
				<!-- AddThis Button END -->
			</div>
		</div>
	</div>
	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	
<!--<?php get_sidebar(); ?>-->

<?php get_footer(); ?>