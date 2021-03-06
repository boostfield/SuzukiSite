<?php if ( have_posts() ) : ?>

<?php
	// Create IDS
	$ids = array();
	while ( have_posts() ) : the_post();
		array_push($ids, get_the_ID());
	endwhile; // end of the loop.
	$ids = implode(',', $ids);
?>

<?php echo do_shortcode('[blog_posts type="row" show_date="text" excerpt="false" image_height="0%" depth="'.flatsome_option('blog_posts_depth').'" depth_hover="'.flatsome_option('blog_posts_depth_hover').'" class="common-list" text_padding="0px 0px 0px 0px" text_align="left" style="normal" columns="1" ids="'.$ids.'"]'); ?>

<?php flatsome_posts_pagination(); ?>

<?php else : ?>

	<?php get_template_part( 'template-parts/posts/content','none'); ?>

<?php endif; ?>