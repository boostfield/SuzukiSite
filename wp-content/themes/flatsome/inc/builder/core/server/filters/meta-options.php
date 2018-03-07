<?php

add_filter( 'ux_builder_meta_options', function ( $options, $post ) {
  if ( $post->post_type == 'page' ) {
    $options['_wp_page_template'] = array(
      'type' => 'select',
      'heading' => __( 'Template', 'flatsome-admin' ),
      'options' => ux_builder_get_page_templates( $post ),
      'reload' => true,
    );
    $options['_footer'] = array(
      'type' => 'select',
      'heading' => __( 'Page Footer', 'flatsome-admin' ),
      'reload' => true,
      'default' => '',
      'options' => array(
        '' => __( 'Default', 'flatsome-admin' ),
        'simple' => __( 'Simple' , 'flatsome-admin'),
        'transparent' => __( 'Transparent', 'flatsome-admin' ),
        'custom' => __( 'Custom Footer', 'flatsome-admin' ),
        'disabled' => __( 'Hide', 'flatsome-admin' ),
      ),
    );
  }

  if ( get_theme_support( 'post-thumbnails' ) ) {
    $options['_thumbnail_id'] = array(
      'type' => 'image',
      'heading' => __( 'Featured Image', 'flatsome-admin' ),
      'reload' => true,
    );
  }

  return $options;
}, 10, 2 );
