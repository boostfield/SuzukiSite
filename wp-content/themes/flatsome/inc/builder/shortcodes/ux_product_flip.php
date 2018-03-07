<?php

// Shortcode to display a single product
$repeater_posts = 'products';
$repeater_post_type = 'product';
$repeater_post_cat = 'product_cat';

$options = array(

'post_options' => require( __DIR__ . '/commons/repeater-posts.php' ),

'filter_posts' => array(
    'type' => 'group',
    'heading' => __( 'Filter Posts' , 'flatsome-admin'),
    'conditions' => 'ids === ""',
    'options' => array(
         'orderby' => array(
            'type' => 'select',
            'heading' => __( 'Order By' , 'flatsome-admin'),
            'default' => 'normal',
            'options' => array(
                'normal' => '普通',               
                'sales' => '促销',
                'rand' => '随机',
                'date' => '日期'
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
        'show' => array(
            'type' => 'select',
            'heading' => __( 'Order' , 'flatsome-admin'),
            'default' => '',
            'options' => array(
                '' => '所有',
                'featured' => '精选',
                'onsale' => '促销',
            )
        )
    )
)
);

add_ux_builder_shortcode( 'ux_product_flip', array(
    'name' => '翻转书本',
    'category' => __( 'Shop', 'flatsome-admin' ),
    'priority' => 4,
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'product_flipbook' ),
    'wrap' => false,
   'presets' => array(
        array(
            'name' => __( 'Normal' , 'flatsome-admin'),
            'content' => '[ux_product_flip]'
        ),
    ),

    'options' => $options
) );
