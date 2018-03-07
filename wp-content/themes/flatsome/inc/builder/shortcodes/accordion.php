<?php

add_ux_builder_shortcode( 'accordion', array(
    'type' => 'container',
    'name' => __( 'Accordion' ,  'flatsome-admin'),
    'image' => '',
    'category' => __( 'Content' ,  'flatsome-admin'),
    //'template' => flatsome_ux_builder_template( 'accordion.html' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'accordion' ),
    'info' => '{{ title }}',
    'allow' => array( 'accordion-item' ),

    'presets' => array(
        array(
            'name' => __( 'Default' ,  'flatsome-admin'),
            'content' => '
                [accordion]
                    [accordion-item title="Accordion Item 1 Title"][/accordion-item]
                    [accordion-item title="Accordion Item 2 Title"][/accordion-item]
                    [accordion-item title="Accordion Item 3 Title"][/accordion-item]
                [/accordion]
            '
        ),
    ),

    'options' => array(
        'title' => array(
            'type' => 'textfield',
            'heading' => __( 'Title' ,  'flatsome-admin'),
            'default' => __( '' ),
            'auto_focus' => true,
        ),
        'auto_open' => array(
            'type' => 'radio-buttons',
            'heading' => __('Auto Open',  'flatsome-admin'),
            'default' => '',
            'options' => array(
                ''  => array( 'title' => 'Off'),
                'true'  => array( 'title' => 'On'),
            ),
        ),
    ),
) );
