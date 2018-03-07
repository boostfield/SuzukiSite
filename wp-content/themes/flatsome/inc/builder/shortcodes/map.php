<?php

add_ux_builder_shortcode( 'map', array(
  'type' => 'container',
  'name' => __( 'Map' ,  'flatsome-admin'),
  'category' => __( 'Content' ,  'flatsome-admin'),
  'thumbnail' =>  flatsome_ux_builder_thumbnail( 'map' ),
  'template' => flatsome_ux_builder_template( 'map.html' ),
  'wrap' => false,
  'scripts' => array(
    'google-maps' => '//www.google.cn/maps/api/js?key='.flatsome_option('google_map_api'),
  ),

  'presets' => array(
    array(
      'name' => '默认',
      'content' => '
        [map content_width="30" content_width__sm="100" content_width__md="40" position_x__sm="100" position_y__sm="100"]
          Enter street adress here. Or any other information you want.</p>
        [/map]',
    ),
  ),

  'options' => array(

    'height' => array(
      'type' => 'scrubfield',
      'heading' => '高度',
      'default' => '500px',
      'responsive' => true
    ),

    'lat' => array(
      'type' => 'scrubfield',
      'heading' => '纬度',
      'default' => '40.79028',
      'step' => '0.00001',
      'unit' => '',
    ),

    'long' => array(
      'type' => 'scrubfield',
      'heading' => '经典',
      'default' => '-73.95972',
      'step' => '0.00001',
      'unit' => '',
    ),

    'zoom' => array(
      'type' => 'slider',
      'heading' => __( 'Zoom' ,  'flatsome-admin'),
      'default' => 17,
      'max' => 20,
      'min' => 1,
    ),

    'pan' => array(
      'type' => 'checkbox',
      'heading' => __( 'Pan',  'flatsome-admin' ),
      'default' => 'true',
    ),

    'content_group' => array(
      'type' => 'group',
      'heading' => __( 'Content' ,  'flatsome-admin'),
      'options' => array(
           'content_enable' => array(
            'type' => 'checkbox',
            'heading' => __( 'Show Content' ,  'flatsome-admin'),
            'default' => 'true',
          ),
          'content_bg' => array(
            'type' => 'colorpicker',
            'heading' => __('Background',  'flatsome-admin'),
            'format' => 'rgb',
            'default' => '#fff',
            'position' => 'bottom right',
          ),
          'content_width' => array(
            'type' => 'slider',
            'heading' => __( 'Width' ,  'flatsome-admin'),
            'responsive' => true,
            'default' => 30,
            'min'  => 0,
            'max'  => 100,
            'step' => 1
          ),
          'position_x' => array(
            'type' => 'slider',
            'heading' => __( 'X Position' ,  'flatsome-admin'),
            'responsive' => true,
            'default' => 95,
            'min'  => 0,
            'max'  => 100,
            'step' => 5
          ),
          'position_y' => array(
            'type' => 'slider',
            'heading' => __( 'Y Position' ,  'flatsome-admin'),
            'responsive' => true,
            'default' => 95,
            'min'  => 0,
            'max'  => 100,
            'step' => 5
            ),
        ),
    ),

    'controls_group' => array(
      'type' => 'group',
      'heading' => __( 'Controls' ,  'flatsome-admin'),
      'options' => array(
        'controls' => array(
          'type' => 'checkbox',
          'heading' => __( 'Show controls' ,  'flatsome-admin'),
          'default' => false,
        ),
        'zoom_control' => array(
          'type' => 'checkbox',
          'heading' => __( 'Zoom' ,  'flatsome-admin'),
          'default' => 'true',
          'conditions' => 'controls === "true"'
        ),
        'street_view_control' => array(
          'type' => 'checkbox',
          'heading' => __( 'Street view' ,  'flatsome-admin'),
          'default' => 'true',
          'conditions' => 'controls === "true"'
        ),
        'map_type_control' => array(
          'type' => 'checkbox',
          'heading' => __( 'Map type' ,  'flatsome-admin'),
          'default' => 'true',
          'conditions' => 'controls === "true"'
        ),
      ),
    ),

    'styles_group' => array(
      'type' => 'group',
      'heading' => '样式',
      'options' => array(
        'color' => array(
          'type' => 'colorpicker',
          'heading' => '颜色',
          'default' => '#58728a',
          'format' => 'hex',
          'position' => 'bottom right',
        ),
        'saturation' => array(
          'type' => 'slider',
          'heading' => '饱和度',
          'default' => -30,
          'max' => 100,
          'min' => -100,
        ),
      ),
    ),
  ),
) );
