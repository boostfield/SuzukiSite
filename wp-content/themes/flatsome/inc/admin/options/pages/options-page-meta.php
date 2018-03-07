<?php
// PAGE META OPTIONS
include('meta/meta_box_framework.php');

function flatsome_custom_meta_boxes() {
    $meta_box = array(
        'id'         => 'flatsome_page_options2', // Meta box ID
        'title'      => 'Page Layout', // Meta box title
        'pages'      => array('page'), // Post types this meta box should be shown on
        'context'    => 'side', // Meta box context
        'priority'   => 'core', // Meta box priority
        'fields' => array(
            array(
                'id' => '_footer',
                'name' => '页面页脚',
                //'desc' => 'This is a description.',
                'type' => 'select',
                'std' => 'normal',
                'choices' => array(
                    'normal' => '普通',
                    'simple' => '简易',
                    'custom' => '自定义',
                    'transparent' => '透明',
                    'disabled' => '隐藏',
                )
            ),
        )
    );
    dev7_add_meta_box( $meta_box );
}
add_action( 'dev7_meta_boxes', 'flatsome_custom_meta_boxes' );
