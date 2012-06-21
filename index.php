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
		
		<?php get_sidebar(); ?>
		
	</div>
	<?php endwhile; ?>

	<!--<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>-->

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>



<?php get_footer(); ?>
