<?php /* Template Name: Custom Category template  */
?>


<?php get_header(); ?>

<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-content"><?php
    	$cat = get_query_var('cat');
if( get_category($cat)->category_parent ) : /* checking that category has parent category or not */

/* If category is a children category */
	$cat_name = get_category(get_query_var('cat'))->name;
	$cat = $cat_name;//'news';
	$catID = get_cat_ID($cat);
	$cat_posts = get_posts('cat=' . $catID);
?>
<div class="post_container" style="width:100%;float:left">
<h1><?php echo $cat_name?></h1>
	
	<?php
	foreach($cat_posts as $cat_post) {
	 $postID = $cat_post->ID;

	 ?>
		<div class="post_content_container" style="width:50%;float:left;">
			<div class="post" style="position: relative;">
				<a href="<?php echo $cat_post->guid ?>"><span class="post_title" style="font-size:20px; color:yellow;position:absolute; top: 60%; left: 30%;"><?php echo get_the_title($postID); ?></span>
				<?php echo $cat_post->post_content?></a>
			</div>
		</div>
	 <?php
	
}
	
?>	

</div>
<?php else :?>

<?php 
/* If category is a parent category */
$cat_name = get_category(get_query_var('cat'))->name;
?>
<h1><u><i><?php echo $cat_name?></i></u></h1>
<?php
$cat = $cat_name;//'news';
$catID = get_cat_ID($cat);
$subcats = get_categories('child_of=' . $catID);

foreach($subcats as $subcat) {

/******
** Uncomment below code for showing all categories..
*/
$args = array('category_name' => $subcat->cat_name, 'order' => 'DESC', 'posts_per_page'=>-1, 'numberposts'=>-1);
$subcat_posts = get_posts($args);


$subcat_posts = get_posts('cat=' . $subcat->cat_ID);

?>

<div class="post_container" style="width:100%;float:left">
<h1><?php echo $subcat->cat_name?></h1>
	
	<?php
	foreach($subcat_posts as $subcat_post) {
	 $postID = $subcat_post->ID;

	 ?>
		<div class="post_content_container" style="width:50%;float:left;">
			<div class="post" style="position: relative;">
				<a href="<?php echo $subcat_post->guid ?>"><span class="post_title" style="font-size:20px; color:yellow;position:absolute; top: 60%; left: 30%;"><?php echo get_the_title($postID); ?></span>
				<?php echo $subcat_post->post_content?></a>
			</div>
		</div>
	 <?php
	
}
	
?>	

</div>
<?php }
endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
