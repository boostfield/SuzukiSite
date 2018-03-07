<?php

add_ux_builder_shortcode( 'tabgroup', array(
    'type' => 'container',
    'name' => __( 'Tabs' , 'flatsome-admin'),
    'image' => '',
    'category' => __( 'Content' , 'flatsome-admin'),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'tabs' ),
    'template' => flatsome_ux_builder_template( 'tabgroup.html' ),
    'tools' => 'shortcodes/tabgroup/tabgroup.tools.html',
    'info' => '{{ title }}',
    'allow' => array( 'tab' ),

    'children' => array(
        'draggable' => false,
        'addable_spots' => array( 'center' ),
    ),

    'toolbar' => array(
        'show_children_selector' => true,
        'show_on_child_active' => true,
    ),

    'presets' => array(
        array(
            'name' => __( 'Default' , 'flatsome-admin'),
            'content' => '
                [tabgroup title="Tab Title"]
                    [tab title="Tab 1 Title"][/tab]
                    [tab title="Tab 2 Title"][/tab]
                    [tab title="Tab 3 Title"][/tab]
                [/tabgroup]
            '
        ),
    ),

    'options' => array(

        'title' => array(
            'type' => 'textfield',
            'heading' => __( 'Title', 'flatsome-admin' ),
            'default' => __( '' ),
        ),

        'style' => array(
            'type' => 'select',
            'heading' => __( 'Style' , 'flatsome-admin'),
            'default' => 'line',
            'options' => require( __DIR__ . '/values/nav-styles.php' ),
        ),

        'type' => array(
            'type' => 'select',
            'heading' => __( 'Type' , 'flatsome-admin'),
            'default' => 'horizontal',
            'options' => array(
                'horizontal' => '水平',
                'vertical' => '垂直',
            )
        ),

        'nav_style' => array(
          'type' => 'radio-buttons',
          'heading' => '导航样式',
          'default' => 'uppercase',
          'options' => require( __DIR__ . '/values/nav-types-radio.php' ),
        ),

        'nav_size' => array(
            'type' => 'radio-buttons',
            'heading' => __( 'Size' , 'flatsome-admin'),
            'default' => 'medium',
            'options' => require( __DIR__ . '/values/text-sizes.php' ),
        ),

        'align' => array(
            'type' => 'radio-buttons',
            'heading' => '选项卡对齐',
            'default' => 'left',
            'options' => require( __DIR__ . '/values/align-radios.php' ),
        )
    ),
) );
