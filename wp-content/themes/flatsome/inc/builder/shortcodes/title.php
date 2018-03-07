<?php

add_ux_builder_shortcode( 'title', array(
    'name' => __( 'Title', 'flatsome-admin'),
    'category' => __( 'Content' , 'flatsome-admin'),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'title' ),
    'template' => flatsome_ux_builder_template( 'title.html' ),
    'info' => '{{ text }}',
    'wrap' => false,

    'options' => array(

        'style' => array(
            'type' => 'select',
            'heading' => '样式',
            'default' => 'normal',
            'options' => array(
                'normal' => '普通',
                'center' => '中心',
                'bold' => '左粗',
                'bold-center' => '中间粗',
            )
        ),

        'text' => array(
            'type' => 'textfield',
            'heading' => '标题',
            'default' => 'Lorem ipsum dolor sit amet...',
            'auto_focus' => true,
        ),

        'color' => array(
          'type' => 'colorpicker',
          'heading' => __('Color', 'flatsome-admin'),
          'alpha' => true,
          'format' => 'rgb',
          'position' => 'bottom right',
        ),

        'icon' => array(
            'type' => 'select',
            'heading' => '图标',
            'options' => require( __DIR__ . '/values/icons.php' ),
        ),

        'width' => array(
            'type' => 'scrubfield',
            'heading' => __('Width', 'flatsome-admin'),
            'default' => '',
            'min' => 0,
            'max' => 1200,
            'step' => 5,
        ),


       'margin_top' => array(
          'type' => 'scrubfield',
          'heading' => __('Margin Top', 'flatsome-admin'),
          'default' => '',
          'placeholder' => __('0px'),
          'min' => -100,
          'max' => 300,
          'step' => 1,
        ),

        'margin_bottom' => array(
          'type' => 'scrubfield',
          'heading' => __('Margin Bottom', 'flatsome-admin'),
          'default' => '',
          'placeholder' => __('0px'),
          'min' => -100,
          'max' => 300,
          'step' => 1,
        ),

        'size' => array(
          'type' => 'slider',
          'heading' => __('Size', 'flatsome-admin'),
          'default' => 100,
          'unit' => '%',
          'min' => 20,
          'max' => 300,
          'step' => 1,
        ),

        'link_text' => array(
            'type' => 'textfield',
            'heading' => '链接文本',
            'default' => '',
        ),

        'link' => array(
            'type' => 'textfield',
            'heading' => '链接',
            'default' => '',
        ),
    ),
) );
