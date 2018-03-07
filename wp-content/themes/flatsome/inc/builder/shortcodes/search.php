<?php


add_ux_builder_shortcode( 'search', array(
  'name' => __( 'Search Box' ,  'flatsome-admin'),
  'category' => __( 'Content' ,  'flatsome-admin'),
  'thumbnail' => flatsome_ux_builder_thumbnail( 'search' ),
  'wrap' => false,
  'allow_in' => array('text_box'),
  'presets' => array(
    array(
      'name' => __( 'Default' ,  'flatsome-admin'),
      'content' => '[search]',
      ),
    ),
    'options' => array(
      'style' => array(
          'type' => 'select',
          'heading' => __( 'Style' ,  'flatsome-admin'),
          'options' => array(
              '' => '普通',
              'flat' => '扁平',
          )
        ),

      'size' => array(
              'type' => 'radio-buttons',
              'heading' => __( 'Size' ,  'flatsome-admin'),
              'default' => 'medium',
              'options' => require( __DIR__ . '/values/text-sizes.php' ),
              'on_change' => array(
                  'class' => 'is-{{ value }}'
              )
        ),
    )
) );