<?php

add_ux_builder_shortcode( 'ux_nav', array(
  'name' => __( 'Navigation', 'flatsome-admin'),
  'category' => __( 'Layout' , 'flatsome-admin'),
  'thumbnail' =>  flatsome_ux_builder_thumbnail( 'nav' ),
  'options' => array(
       'parent' => array(
            'type' => 'select',
            'heading' => '父级',
            'default' => '',
            'options' => ux_builder_get_page_parents(),
      ),
      'type' => array(
            'type' => 'select',
            'heading' => __( 'Direction', 'flatsome-admin' ),
            'default' => 'vertical',
            'options' => array(
                'horizontal' => '水平',
                'vertical' => '垂直',
            )
      ),
      'style' => array(
          'type' => 'select',
          'heading' => __( 'Style', 'flatsome-admin'),
          'default' => 'line',
          'options' => require( __DIR__ . '/values/nav-styles.php' ),
      ),
      'align' => array(
          'type' => 'radio-buttons',
          'heading' => '文本对齐',
          'default' => 'left',
          'options' => require( __DIR__ . '/values/align-radios.php' ),
      ),
      'size' => array(
          'type' => 'radio-buttons',
          'heading' => __( 'Size' , 'flatsome-admin'),
          'default' => 'medium',
          'options' => require( __DIR__ . '/values/text-sizes.php' ),
      ),
)
) );