<?php

add_ux_builder_shortcode( 'logo', array(
    'name' => __( 'Logo',  'flatsome-admin'),
    'category' => __( 'Content' , 'flatsome-admin'),
    'toolbar_thumbnail' => 'img',
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'logo' ),
    'inline' => true,
    'wrap' => false,
    'presets' => array(
        array(
            'name' => __( 'Default',  'flatsome-admin'),
            'content' => '[logo]',
        ),
        array(
            'name' => __( 'Simple Row', 'flatsome-admin' ),
            'content' => '[row] [col span__sm="12" align="center"] [logo] [logo] [logo] [logo] [logo] [logo] [/col] [/row]',
        ),
        array(
            'name' => __( 'Dashed Grid' , 'flatsome-admin'),
            'content' => '[row col_style="dashed" v_align="middle"] [col span="4" span__sm="12" align="center"] [logo img="9176" hover="overlay-add"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [/row]',
        ),
        array(
            'name' => __( 'Logo Slider', 'flatsome-admin' ),
            'content' => '[row] [col span__sm="12"] [ux_slider freescroll="true" hide_nav="true" nav_pos="outside" nav_style="simple" nav_color="dark" bullets="false"] [logo hover="color"] [logo  hover="color"] [logo  hover="color"] [logo  hover="color"][logo  hover="color"][logo  hover="color"] [logo  hover="color"] [logo  hover="color"] [logo  hover="color"] [logo  hover="color"] [/ux_slider] [/col] [/row]',
        ),

        //
    ),
    'options' => array(

        'img' => array(
            'type' => 'image',
            'heading' => '图像',
            'default' => ''
        ),
        'hover' => array(
            'type' => 'select',
            'heading' => __( 'Hover',  'flatsome-admin'),
            'default' => '',
            'options' => array(
                '' => '无',
                'zoom' => '缩放',
                'fade-in' => '淡变',
                'glow' => '辉光',
                'color' => '添加颜色',
                'grayscale' => '灰度',
            ),
            'on_change' => array(
                'selector' => '.ux-logo-link',
                'class' => 'image-{{ value }}'
            )
        ),
        'height' => array(
          'type' => 'scrubfield',
          'heading' => '高度',
          'default' => '50px',
          'max' => 300,
          'min' => 0,
        ),

        'link_options' => require( __DIR__ . '/commons/links.php' ),

    ),
) );
