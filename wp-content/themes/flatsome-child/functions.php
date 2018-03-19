<?php
function annointed_admin_bar_remove() {
    global $wp_admin_bar;
    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

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

    function cptui_register_my_cpts_teacher() {

        /**
         * Post Type: Teachers.
         */
    
        $labels = array(
            "name" => __( "Teachers", "" ),
            "singular_name" => __( "Teacher", "" ),
            "menu_name" => __( "Teacher", "" ),
            "all_items" => __( "All Teachers", "" ),
            "add_new" => __( "Add New", "" ),
            "add_new_item" => __( "Add New Teacher", "" ),
            "edit_item" => __( "Edit Teacher", "" ),
            "new_item" => __( "New Teacher", "" ),
            "view_item" => __( "View Teacher", "" ),
            "view_items" => __( "View Teachers", "" ),
            "search_items" => __( "Search Teacher", "" ),
            "not_found" => __( "No Teachers found", "" ),
        );
    
        $args = array(
            "label" => __( "Teachers", "" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => false,
            "rest_base" => "",
            "has_archive" => false,
            "show_in_menu" => true,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "rewrite" => array( "slug" => "teacher", "with_front" => true ),
            "query_var" => true,
            "supports" => array( "title", "editor", "thumbnail" ),
        );
    
        register_post_type( "teacher", $args );
    }
    
    add_action( 'init', 'cptui_register_my_cpts_teacher' );
    add_action( 'init', function () {
        add_ux_builder_post_type( 'teacher' );
    } );
?>