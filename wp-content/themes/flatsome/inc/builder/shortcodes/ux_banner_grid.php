<?php

add_ux_builder_shortcode( 'ux_banner_grid', array(
    'type' => 'container',
    'name' => __( 'Grid' , 'flatsome-admin'),
    'image' => '',
    'wrap' => false,
    'category' => __( 'Layout' , 'flatsome-admin'),
    'template' => flatsome_ux_builder_template( 'ux_banner_grid.html' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grid' ),
    'allow' => array( 'col_grid' ),
    'info' => '{{ label }}',
    'directives' => array( 'ux-banner-grid' ),
    'add_buttons' => array( 'bottom-right' ),
    'addable_spots' => array(),

    'scripts' => array(
        'flatsome-packery' => get_template_directory_uri() . '/assets/libs/packery.pkgd.min.js',
    ),

    // Override children data.
    'children' => array(
        'addable_spots' => array( 'center' ),
    ),

    'presets' => array(
        array(
        'name' => __( 'Grid 1', 'flatsome-admin' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-1' ),
        'content' => '[ux_banner_grid] [col_grid span="6"] [/col_grid] [col_grid span="3"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'Grid 2', 'flatsome-admin' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-2' ),
        'content' => '[ux_banner_grid] [col_grid height="2-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'Grid 3', 'flatsome-admin' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-3' ),
        'content' => '[ux_banner_grid] [col_grid span="6"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'Grid 4', 'flatsome-admin' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-4' ),
        'content' => '[ux_banner_grid] [col_grid span="9"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'Grid 5', 'flatsome-admin' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-5' ),
        'content' => '[ux_banner_grid] [col_grid span="3"] [/col_grid] [col_grid span="6"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'Grid 6' , 'flatsome-admin'),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-6' ),
        'content' => '[ux_banner_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="8"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'Grid 7' , 'flatsome-admin'),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-7' ),
        'content' => '[ux_banner_grid] [col_grid span="8" height="2-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="4" height="2-3"] [/col_grid] [col_grid span="8" height="1-3"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'Grid 8' , 'flatsome-admin'),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-8' ),
        'content' => '[ux_banner_grid] [col_grid span="6" height="2-3"] [/col_grid] [col_grid span="6" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="6" height="1-3"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'Grid 9', 'flatsome-admin' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-9' ),
        'content' => '[ux_banner_grid] [col_grid span="6"] [/col_grid] [col_grid span="6" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
    ),

    'options' => array(
          'label' => array(
            'type' => 'textfield',
            'heading' => '管理标签',
            'placeholder' => 'Enter admin label...'
          ),
          'spacing' => array(
            'type' => 'radio-buttons',
            'heading' => '空格',
            'full_width' => true,
            'default' => 'small',
            'options' => array(
                    'xsmall' => array( 'title' => '很小' ),
                    'small' => array( 'title' => '小' ),
                    '' => array( 'title' => '普通'),
                    'large' => array( 'title' => '大' ),
                    'collapse' => array( 'title' => '塌陷' ),
             ),
          ),
         'height' => array(
            'type' => 'slider',
            'responsive' => true,
            'full_width' => true,
            'heading' => __('Height', 'flatsome-admin'),
            'debounce' => 300,
            'description' => __('Set the height of tallest column', 'flatsome-admin'),
            'default' => 600,
            'responsive' => true,
            'min' => 0,
            'max' => 1000,
            'step' => 1,
        ),
        'width' => array(
        'type' => 'select',
        'heading' => '宽度',
        'default' => '',
        'options' => array(
                '' => '容器',
                'full-width' => '全宽',
            )
        ),

        'depth' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => '栏深度',
            'default' => 0,
            'max' => 5,
            'min' => 0,
        ),
        'depth_hover' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => '栏悬停深度',
            'default' => 0,
            'max' => 5,
            'min' => 0,
        ),
    ),
) );
