<?php

global $wp_registered_sidebars;

$sidebar_options = array();
foreach ($GLOBALS['wp_registered_sidebars'] as $sidebar){
    $sidebar_options[$sidebar['id']] = $sidebar['name'];
}

// TODO: Get sidebars
add_ux_builder_shortcode( 'ux_sidebar', array(
    'name' => __( 'Widget Area' , 'flatsome-admin'),
    'category' => __( 'Layout', 'flatsome-admin' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'sidebar' ),
    'options' => array(
        'id' => array(
            'type' => 'select',
            'heading' => '选择',
            'default' => 'sidebar-main',
            'options' => $sidebar_options,
            'description' => '您可在外观-小工具里编辑'
        ),
        'style' => array(
            'type' => 'select',
            'heading' => __( 'Widgets style', 'flatsome-admin' ),
            'default' => '',
            'options' => array(
                '' => '默认',
                'framed' => '框架',
                'boxed' => '盒子'
            )
        ),
    ),
) );