<?php

// Shortcode to display product categories

$repeater_columns = '4';
$repeater_type = 'slider';

$default_text_align = 'center';

$options = array(
'style_options' => array(
    'type' => 'group',
    'heading' => __( 'Style', 'flatsome-admin' ),
    'options' => array(
         'style' => array(
            'type' => 'select',
            'heading' => __( 'Style', 'flatsome-admin' ),
            'default' => 'badge',
            'options' => require( __DIR__ . '/values/box-layouts.php' )
        )
    ),
),
'layout_options' => require( __DIR__ . '/commons/repeater-options.php' ),
'layout_options_slider' => require( __DIR__ . '/commons/repeater-slider.php' ),
'cat_meta' => array(
    'type' => 'group',
    'heading' => __( 'Meta' , 'flatsome-admin'),
    'options' => array(

     'ids' => array(
        'type' => 'select',
        'heading' => '分类',
        'param_name' => 'ids',
        'config' => array(
            'multiple' => true,
            'placeholder' => '选择..',
            'termSelect' => array(
                'post_type' => 'product_cat',
                'taxonomies' => 'product_cat'
            ),
        )
    ),

    'number' => array(
        'type' => 'textfield',
        'heading' => '共',
        'conditions' => 'ids == ""',
        'default' => '',
    ),

    'offset' => array(
        'type' => 'textfield',
        'heading' => '偏移',
        'conditions' => 'ids == ""',
        'default' => '',
    ),

    'orderby' => array(
        'type' => 'select',
        'heading' => __( 'Order By' , 'flatsome-admin'),
        'default' => 'menu_order',
        'options' => array(
            'name' => '名称',
            'date' => '日期',
            'menu_order' => '菜单顺序',
        )
    ),
    'order' => array(
        'type' => 'select',
        'heading' => __( 'Order' , 'flatsome-admin'),
        'default' => 'asc',
        'options' => array(
            'asc' => '升序',
            'desc' => '降序',
        )
    ),
   'show_count' => array(
        'type' => 'checkbox',
        'heading' => '显示计数',
        'default' => 'true'
    ),
  ),
)
);

$box_styles = require( __DIR__ . '/commons/box-styles.php' );
$options = array_merge($options, $box_styles);


add_ux_builder_shortcode( 'ux_product_categories', array(
    'name' => '产品分类',
    'category' => __( 'Shop' , 'flatsome-admin'),
    'priority' => 3,
    #'wrap' => false,
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'categories' ),

   'presets' => array(
        array(
            'name' => __( 'Default' , 'flatsome-admin'),
            'content' => '[ux_product_categories]'
        ),
        array(
            'name' => __( 'Simple' , 'flatsome-admin'),
            'content' => '[ux_product_categories style="normal"]'
        ),array(
            'name' => __( 'Overlay' , 'flatsome-admin'),
            'content' => '[ux_product_categories style="overlay" slider_nav_style="simple" slider_nav_position="outside" image_overlay="rgba(0, 0, 0, 0.19)" image_hover="overlay-remove-50" image_hover_alt="zoom"]'
        ),array(
            'name' => __( 'Grid', 'flatsome-admin' ),
            'content' => '[ux_product_categories style="overlay" type="grid" grid="3" columns="3" animate="fadeInLeft" number="4" orderby="name" image_size="large" image_overlay="rgba(38, 38, 38, 0.16)" text_pos="middle" text_size="large"]'
        ),array(
            'name' => __( 'Circle Style', 'flatsome-admin' ),
            'content' => '[ux_product_categories style="overlay" slider_nav_style="simple" slider_nav_position="outside" image_height="100%" image_radius="100" image_overlay="rgba(0, 0, 0, 0.19)" image_hover="overlay-remove-50" image_hover_alt="zoom" text_pos="middle" text_size="large" text_hover="bounce"]'
        ),array(
            'name' => __( 'Grid Dark' , 'flatsome-admin'),
            'content' => '[ux_product_categories style="overlay" type="grid" grid="13" col_spacing="small" columns="3" depth_hover="5" animate="fadeInLeft" number="5" orderby="name" image_size="large" image_overlay="rgba(38, 38, 38, 0.16)" image_hover="color" image_hover_alt="zoom-long" text_pos="middle" text_size="large"]'
        ),
    ),
    'options' => $options
) );
