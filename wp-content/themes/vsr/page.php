<?php
/**
 * The main template file
 */

get_header(); ?>


<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, "full");
$thumb_url = $thumb_url_array[0];

if ($thumb_url) {
?>  
<div class="main_jumbo ipad" style="background-image:url(<?php echo $thumb_url; ?>);"></div>

<div class="main_jumbo_welcome"><?php the_title(); ?></div>
<?php } ?>



<div class="main_topwrap">
	<div class="main_topwrap_container">
	<?php
	if ( have_posts() ) {
	  /* Start the Loop */
	  while ( have_posts() ) : the_post();
	    the_content();
	  endwhile;
	}
	?>
	</div>
</div>


<?php get_footer();