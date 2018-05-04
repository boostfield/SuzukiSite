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
            "menu_name" => __( "教师数据", "" ),
            "all_items" => __( "所有教师数据", "" ),
            "add_new" => __( "新建教师数据", "" ),
            "add_new_item" => __( "Add New Teacher", "" ),
            "edit_item" => __( "编辑教师数据", "" ),
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
    /* function to add pagination */
function ds_numeric_posts_nav() {
 
    global $posts;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
 $max   = intval( $posts->max_num_pages );
/** Add current page to the array */
    if ( $paged >= 1 )
    $links[] = $paged;
/** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
    $links[] = $paged - 1;
        $links[] = $paged - 2;
 
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo ' <div class="pagination"><ul class="tags page-numbers nav-pagination links text-center">' . "\n";
 
    /** Previous Post Link */
 
    /** if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link('<i class="fa fa-chevron-left" aria-hidden="true"></i>') );
     */
    
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
 
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
 
 
 
    sort( $links );
 
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
    echo '<li><span id="pag_num_ami">…</span></li>' . "\n";
$class = $paged == $max ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
 
    }
/** Next Post Link */
if ( get_next_posts_link() )
printf( '<li>%s</li>' . "\n", get_next_posts_link('<i class="fa fa-chevron-right" aria-hidden="true"></i>') );
echo '</ul></div>' . "\n";
 
}
function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'teacher' )   
  {
    return locate_template('archive-teacher-search.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser'); 

add_action( 'pre_get_posts', 'teacher_extended_search' );
function teacher_extended_search( $query )
{
    // Make sure we got a search query
    // and we're only modifying the main query.
    if (
        ! $query->is_main_query()
        OR 'teacher' !== $query->get( 'post_type' )
    ) return $query;

    // Alter whatever you need: Make, Model, etc.
    $query->set( 'meta_query', array(
        'relation' => 'AND',
        array(
            'key'     => 'district',
            'value'   => $_GET[ 'district' ],
            'compare' => 'LIKE'
        ),
        array(
            'key'     => 'instrument',
            'value'   => $_GET[ 'instrument' ],
            'compare' => 'LIKE'
        )
    ) );
    return $query;
}
?>