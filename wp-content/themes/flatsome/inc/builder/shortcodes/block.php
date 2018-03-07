<?php

add_ux_builder_shortcode( 'block', array(
  'name' => __( 'Block',  'flatsome-admin' ),
  'category' => __( 'Layout',  'flatsome-admin' ),
  'compile' => false,
  'thumbnail' =>  flatsome_ux_builder_thumbnail( 'block' ),
  'template_shortcode' => "[{tag}{options}]\n\n",
  'external' => true,

  'options' => array(
    'id' => array(
      'type' => 'select',
      'heading' => __( 'Block',  'flatsome-admin' ),
      'full_width' => true,
      'config' => array(
        'placeholder' => __( 'Select',  'flatsome-admin' ),
        'postSelect' => array(
          'post_type' => array( 'blocks' )
        ),
      )
    ),
  ),
) );
