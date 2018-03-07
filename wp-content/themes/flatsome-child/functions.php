<?php
function annointed_admin_bar_remove() {
    global $wp_admin_bar;
    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

// function excerpt_read_more_link($output) {
//     global $post;
//     $output = mb_substr($output,0, 200);
//     return $output . '<span><a href="'. get_permalink($post->ID).'">阅读全文...</a></span>';
//     }
//    add_filter('the_excerpt', 'excerpt_read_more_link');
function dez_filter_chinese_excerpt( $output ) {
    global $post;
    //check if its chinese character input
    $chinese_output = preg_match_all("/\p{Han}+/u", $post->post_content, $matches);
    if($chinese_output) {
    $output = mb_substr( $output, 0, 55 ) . '';
    }
    return $output;
    }
    add_filter( 'get_the_excerpt', 'dez_filter_chinese_excerpt' );
?>