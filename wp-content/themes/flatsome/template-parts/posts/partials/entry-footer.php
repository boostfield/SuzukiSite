<footer class="entry-meta clearfix">
	<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'flatsome-admin' ) );
		?>
		<span class="cat-links pull-left">
			<?php printf( __( 'Posted in %1$s', 'flatsome-admin' ), $categories_list ); ?>
		</span>

		<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'flatsome-admin' ) );
			if ( $tags_list ) :
		?>
		<span class="sep">&nbsp;|&nbsp;</span>
		<span class="tags-links">
			<?php printf( __( 'Tagged %1$s', 'flatsome-admin' ), $tags_list ); ?>
		</span>
		<?php endif; // End if $tags_list ?>
	<?php endif; // End if 'post' == get_post_type() ?>

	<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
	<span class="comments-link pull-right"><?php comments_popup_link( __( 'Leave a comment', 'flatsome-admin' ), __( '<strong>1</strong> Comment', 'flatsome-admin' ), __( '<strong>%</strong> Comments', 'flatsome-admin' ) ); ?></span>
	<?php endif; ?>
</footer><!-- .entry-meta -->
