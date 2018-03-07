<?php

$sizes = array(
    'xxsmall' => 'XX-小',
    'xsmall' => 'X-小',
    'smaller' => '较小',
    'small' => '小',
    '' => '正常',
    'large' => '大',
    'larger' => '较大',
    'xlarge' => 'X-大',
    'xxlarge' => 'XX-大',
);

add_ux_builder_shortcode( 'ux_product_gallery', array(
    'name' => __( 'Product Gallery'  ,  'flatsome-admin'),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'overlay' => true,
    'wrap' => true,
    'priority' => 9999,
    'options' => array(
      'style' => array(
        'type' => 'select',
        'heading' => '样式',
        'default' => 'normal',
        'options' => array(
            'normal' => __( 'Normal', 'flatsome-admin' ),
            'vertical' => __( 'Vertical', 'flatsome-admin' ),
            'full-width' => __( 'Full Width', 'flatsome-admin' ),
        )
      )
    )
) );

add_ux_builder_shortcode( 'ux_product_title', array(
    'name' => __( 'Product Title'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'options' => array(
      'size' => array(
        'type' => 'select',
        'heading' => '尺寸',
        'default' => '',
        'options' => $sizes
      ),
      'divider' => array(
          'type' => 'checkbox',
          'heading' => '分隔线',
          'default' => 'true'
      ),
      'uppercase' => array(
          'type' => 'checkbox',
          'heading' => '大写',
          'default' => 'false'
      ),
    )
) );

add_ux_builder_shortcode( 'ux_product_rating', array(
    'name' => __( 'Product Rating'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'wrap' => false,
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
) );

add_ux_builder_shortcode( 'ux_product_price', array(
    'name' => __( 'Product Price'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'wrap' => false,
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'options' => array(
      'size' => array(
        'type' => 'select',
        'heading' => '尺寸',
        'default' => '',
        'options' => $sizes
      )
    )
) );

add_ux_builder_shortcode( 'ux_product_excerpt', array(
    'name' => __( 'Product Short Description'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'wrap' => false,
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
) );


add_ux_builder_shortcode( 'ux_product_add_to_cart', array(
    'name' => __( 'Product Add To Cart'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'options' => array(
      'style' => array(
        'type' => 'select',
        'heading' => '表单样式',
        'default' => 'normal',
        'options' => array(
            'normal' => __( 'Normal', 'flatsome-admin' ),
            'flat' => __( 'Flat', 'flatsome-admin' ),
        )
      ),
      'size' => array(
        'type' => 'select',
        'heading' => '尺寸',
        'default' => '',
        'options' => $sizes
      )
    ),
) );

add_ux_builder_shortcode( 'ux_product_meta', array(
    'name' => __( 'Product Meta'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
) );

add_ux_builder_shortcode( 'ux_product_upsell', array(
    'name' => __( 'Product Up-sells'  ,  'flatsome-admin'),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'options' => array(
      'style' => array(
      'type' => 'select',
      'heading' => '样式',
      'default' => 'sidebar',
      'options' => array(
          'sidebar' => __( 'List', 'flatsome-admin' ),
          'grid' => __( 'Grid', 'flatsome-admin' ),
      )
    ))
) );

add_ux_builder_shortcode( 'ux_product_tabs', array(
    'name' => __( 'Product Tabs'  ,  'flatsome-admin'),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'options' => array(
      'style' => array(
      'type' => 'select',
      'heading' => '样式',
      'default' => 'tabs',
      'options' => array(
          'tabs' => __( 'Line Tabs', 'flatsome-admin' ),
          'tabs_normal' => __( 'Tabs Normal', 'flatsome-admin' ),
          'line-grow' => __( 'Line Tabs - Grow', 'flatsome-admin' ),
          'tabs_vertical' => __( 'Tabs vertical', 'flatsome-admin' ),
          'tabs_pills' => __( 'Pills', 'flatsome-admin' ),
          'tabs_outline' => __( 'Outline', 'flatsome-admin' ),
          'sections' => __( 'Sections', 'flatsome-admin' ),
          'accordian' => __( 'Accordian', 'flatsome-admin' ),
          )
      ),
      'align' => array(
        'type' => 'select',
        'heading' => '对齐',
        'default' => 'left',
        'options' => array(
            'left' => __( 'Left', 'flatsome-admin' ),
            'center' => __( 'Center', 'flatsome-admin' ),
            'right' => __( 'Right', 'flatsome-admin' ),
          )
        )
    )
) );

add_ux_builder_shortcode( 'ux_product_related', array(
    'name' => __( 'Product Related'  ,  'flatsome-admin'),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'options' => array(
      'style' => array(
      'type' => 'select',
      'heading' => '样式',
      'default' => 'slider',
      'options' => array(
        'slider' => __( 'Slider', 'flatsome-admin' ),
        'grid' => __( 'Grid', 'flatsome-admin' ),
      )
    ))
) );

add_ux_builder_shortcode( 'ux_product_hook', array(
    'name' => __( 'Product Hooks'  ,  'flatsome-admin'),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'options' => array(
      'hook' => array(
      'type' => 'select',
      'heading' => '钩子',
      'default' => 'woocommerce_single_product_summary',
      'options' => array(
        'woocommerce_single_product_summary' => 'woocommerce_single_product_summary',
        'woocommerce_before_single_product_summary' => 'woocommerce_before_single_product_summary',
        'woocommerce_after_single_product_summary' => 'woocommerce_after_single_product_summary',
      )
    ))
) );

add_ux_builder_shortcode( 'ux_product_breadcrumbs', array(
    'name' => __( 'Product Breadcrumbs'  ,  'flatsome-admin'),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'woo_products' ),
    'category' => __( 'Product Page'  ,  'flatsome-admin'),
    'options' => array(
      'size' => array(
        'type' => 'select',
        'heading' => '尺寸',
        'default' => '',
        'options' => $sizes
      )
    ),
) );
