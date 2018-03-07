<?php

// Shortcode to hotspot

add_ux_builder_shortcode( 'ux_hotspot', array(
    'name' => '徽标',
    'category' => __( 'Elements',  'flatsome-admin'),

   'presets' => array(
        array(
            'name' => __( 'Normal',  'flatsome-admin'),
            'content' => '[ux_badge text_top="Enter text" text_main="Sale" text_bottom="text_bottom"]'
        ),
    ),

    'options' => array(

    )
) );