<?php

add_ux_builder_shortcode( 'share', array(
    'name' => __( 'Share Icons' , 'flatsome-admin'),
    'category' => __( 'Content' , 'flatsome-admin'),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'share' ),
    'options' => array(
        'title' => array(
            'type' => 'textfield',
            'heading' => '标题',
            'default' => '',
        ),
        'style' => array(
            'type' => 'radio-buttons',
            'heading' => __( 'Style' , 'flatsome-admin'),
            'default' => '',
            'options' => array(
                'outline' => array( 'title' => '轮廓' ),
                'fill' => array( 'title' => '填充' ),
                'small' => array( 'title' => '小' ),
            ),
        ),
        'align' => array(
            'type' => 'radio-buttons',
            'heading' => __( 'Align' , 'flatsome-admin'),
            'default' => '',
            'options' => array(
                '' => array( 'title' => '内联' ),
                'left'   => array( 'title' => '左',   'icon' => 'dashicons-editor-alignleft'),
                'center' => array( 'title' => '中', 'icon' => 'dashicons-editor-aligncenter'),
                'right'  => array( 'title' => '右',  'icon' => 'dashicons-editor-alignright'),
            ),
        ),
        'scale' => array(
            'type' => 'slider',
            'heading' => '缩放',
            'default' => '100',
            'unit' => '%',
            'max' => '300',
            'min' => '50',
        ),

    ),
) );