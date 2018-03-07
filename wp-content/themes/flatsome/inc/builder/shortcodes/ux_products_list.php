<?php

// Shortcode to display a single product
$options = array(
'post_options' => require( __DIR__ . '/commons/repeater-posts.php' ),
'filter_posts' => array(
    'type' => 'group',
    'heading' => __( 'Filter Posts' , 'flatsome-admin'),
    'conditions' => 'ids === ""',
    'options' => array(
         'orderby' => array(
            'type' => 'select',
            'heading' => __( 'Order By', 'flatsome-admin' ),
            'default' => 'normal',
            'options' => array(
                'normal' => '普通',
                'title' => '标题',
                'sales' => '促销',
                'rand' => '随机',
                'date' => '日期'
            )
        ),
        'order' => array(
            'type' => 'select',
            'heading' => __( 'Order', 'flatsome-admin' ),
            'default' => 'desc',
            'options' => array(
                'asc' => '升序',
                'desc' => '降序',
            )
        ),
        'show' => array(
            'type' => 'select',
            'heading' => __( 'Show', 'flatsome-admin' ),
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

$options['post_options']['options']['tags'] = array(
  'type' => 'select',
  'heading' => '标签',
  'conditions' => 'ids === ""',
  'default' => '',
  'config' => array(
      'placeholder' => '选择...',
      'termSelect' => array(
          'post_type' => 'product',
          'taxonomies' => 'product_tag',
      ),
  )
);

add_ux_builder_shortcode( 'ux_products_list', array(
    'name' => '产品列表',
    'category' => __( 'Shop' , 'flatsome-admin'),
    'priority' => 2,
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'products-list' ),
    'presets' => array(
            array(
                'name' => __( 'Default', 'flatsome-admin' ),
                'content' => '[ux_products_list]'
            ),
            array(
                'name' => __( 'On Sale' , 'flatsome-admin'),
                'content' => '[ux_products_list orderby="sales" show="onsale"]'
            ),
            array(
                'name' => __( 'Featured Products' , 'flatsome-admin'),
                'content' => '[ux_products_list show="featured"]'
            ),
             array(
                'name' => __( 'Best Selling', 'flatsome-admin' ),
                'content' => '[ux_products_list orderby="sales"]'
      ),
    ),
    'options' => $options
) );
