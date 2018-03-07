<?php

add_ux_builder_shortcode( 'ux_bestseller_products', array(
    'name' => __( 'Bestseller products' , 'flatsome-admin'),
    'image' => '',
    'category' => __( 'Shop' , 'flatsome-admin'),

    'presets' => array(
        array(
            'name' => __( 'Normal' , 'flatsome-admin'),
            'content' => '[ux_bestseller_products products="8" columns="4" title="Check our bestsellers!"]'
        ),
    ),

    'options' => array(
        array(
            'type' => 'textfield',
            'class' => '',
            'full_width' => true,
            'heading' => '标题',
            'param_name' => 'title',
            'default' => '',
            'value' => ''
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => '栏数',
            'param_name' => 'columns',
            'default' => '',
            'value' => ''
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => '文章',
            'param_name' => 'products',
            'default' => '',
            'value' => ''
        ),
    ),
) );


add_ux_builder_shortcode( 'ux_featured_products', array(
    'name' => __( 'Featured Products' , 'flatsome-admin'),
    'image' => '',
    'category' => __( 'Shop' , 'flatsome-admin'),
    'ajax' => true,

    'presets' => array(
        array(
            'name' => __( 'Normal', 'flatsome-admin' ),
            'content' => '[ux_featured_products products="8" columns="4"]'
        ),
        array(
            'name' => __( '3 col', 'flatsome-admin' ),
            'content' => '[ux_featured_products products="8" columns="3"]'
        ),
    ),

    'options' => array(
        array(
            'type' => 'textfield',
            'class' => '',
            'full_width' => true,
            'heading' => '标题',
            'param_name' => 'title',
            'default' => '',
            'value' => ''
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => '栏数',
            'param_name' => 'columns',
            'default' => '',
            'value' => ''
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => '文章',
            'param_name' => 'products',
            'default' => '',
            'value' => ''
        ),
    ),
) );
