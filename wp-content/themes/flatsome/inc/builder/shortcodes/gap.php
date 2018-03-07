<?php

add_ux_builder_shortcode( 'gap', array(
    'name' => __( 'Gap' ,  'flatsome-admin'),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'gap' ),
    'info' => '{{ height }}',
    'allow_in' => array('text_box'),
    'wrap' => false,

    'options' => array(

        'height' => array(
            'type' => 'scrubfield',
            'heading' => __( 'Height' ,  'flatsome-admin'),
            'default' => '30px',
            'min' => 0,
            'on_change' => array(
                'style' => 'padding-top: {{ value }}'
            ),
        ),
     
    ),
) );
