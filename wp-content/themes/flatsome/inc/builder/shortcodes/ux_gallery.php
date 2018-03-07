<?php

$repeater_type = 'row';
$default_text_align = 'left';

$options = array(
'pages_options' => array(
    'type' => 'group',
    'heading' => __( 'Options' , 'flatsome-admin'),
    'options' => array(
      'ids' => array(
        'type' => 'gallery',
        'heading' => __( 'Images' , 'flatsome-admin'),
      ),
     'style' => array(
            'type' => 'select',
            'heading' => __( 'Style' , 'flatsome-admin'),
            'default' => 'overlay',
            'options' => require( __DIR__ . '/values/box-layouts.php' )
     ),
    'lightbox' => array(
          'type' => 'radio-buttons',
          'heading' => __('Open in Lightbox', 'flatsome-admin'),
          'default' => 'true',
          'options' => array(
              'false'  => array( 'title' => '禁用'),
              'true'  => array( 'title' => '启用'),
          ),
      ),
  ),
),
'layout_options' => require( __DIR__ . '/commons/repeater-options.php' ),
'layout_options_slider' => require( __DIR__ . '/commons/repeater-slider.php' ),
);

$box_styles = require( __DIR__ . '/commons/box-styles.php' );
$options = array_merge($options, $box_styles);

add_ux_builder_shortcode( 'ux_gallery', array(
  'name' => __( 'Gallery', 'flatsome-admin'),
  'category' => __( 'Content' , 'flatsome-admin'),
  'thumbnail' => flatsome_ux_builder_thumbnail( 'ux_gallery' ),
  'wrap' => false,
  'scripts' => array(
    'flatsome-masonry-js' => get_template_directory_uri() .'/assets/libs/packery.pkgd.min.js',
  ),
  'presets' => array(
    array(
      'name' => __( 'Default' , 'flatsome-admin'),
      'content' => '[ux_gallery]',
      ),
    ),
    'options' => $options
) );
