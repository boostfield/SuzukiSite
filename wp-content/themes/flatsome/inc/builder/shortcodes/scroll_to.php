<?php

// Shortcode to display a single product
add_ux_builder_shortcode( 'scroll_to', array(
    'name' => '滚动至',
    'category' => __( 'Content'  ,  'flatsome-admin'),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'scroll_to' ),
    'info' => '{{ title }}',
    'wrap' => false,

    'presets' => array(
        array(
            'name' => __( 'Default' ,  'flatsome-admin'),
            'content' => '[scroll_to title="" link="" bullet="true"]'
        ),
    ),

    'options' => array(
        'title' => array(
            'type' => 'textfield',
            'heading' => '标题',
            'default' => '修改此',
        ),
        'link' => array(
            'type' => 'textfield',
            'heading' => '链接',
            'default' => '',
            'placeholder' => 'Leave empty to auto create',
            'description' => '您可以通过使用 #value 作为链接滚动这个'
        ),
        'bullet' => array(
            'type' => 'radio-buttons',
            'heading' => __('Bullet',  'flatsome-admin'),
            'default' => 'true',
            'options' => array(
                'false'  => array( 'title' => '关闭'),
                'true'  => array( 'title' => '启用'),
            ),
        ),
    ),
) );
