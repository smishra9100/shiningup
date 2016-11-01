<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div id="main-content" class="mh-content"><?php
		if (have_posts()) :
			while (have_posts()) : the_post();
				mh_before_post_content();
				if (is_attachment()) {
					get_template_part('content', 'attachment');
				} else {
					get_template_part('content', 'single');
				}
				mh_after_post_content();
				comments_template();
			endwhile;
		endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>