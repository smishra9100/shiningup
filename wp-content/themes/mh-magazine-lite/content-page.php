<?php /* Default template for displaying page content */ ?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(!is_home()):?>
            <header class="entry-header">
		<h1 class="entry-title page-title">
			<?php the_title(); ?>
		</h1>
	   </header>
         <?php endif;?> 
	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div>
</article>