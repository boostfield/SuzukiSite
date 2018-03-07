<?php

add_ux_builder_shortcode( 'ux_the_title', array(
  'name' => __( 'Page Title' ,  'flatsome-admin'),
  'category' => __( 'Meta' ,  'flatsome-admin'),
  'options' => array(
  	 'video' => array(
        'type' => 'textfield',
        'heading' => '视频',
      ),
  	)
) );

add_ux_builder_shortcode( 'ux_breadcrumbs', array(
  'name' => __( 'Breadcrumbs' ,  'flatsome-admin'),
  'category' => __( 'Meta' ,  'flatsome-admin'),
  'options' => array(
  	 'video' => array(
        'type' => 'textfield',
        'heading' => '视频',
      ),
  	)
) );

add_ux_builder_shortcode( 'ux_subnav', array(
  'name' => __( 'Sub Navs' ,  'flatsome-admin'),
  'category' => __( 'Meta' ,  'flatsome-admin'),
  'options' => array( 
  	'video' => array(
        'type' => 'textfield',
        'heading' => '视频',
      ),
 	)
) );


add_ux_builder_shortcode( 'ux_excerpt', array(
  'name' => __( 'Excerpt' ,  'flatsome-admin'),
  'category' => __( 'Meta' ,  'flatsome-admin'),
  'options' => array( 
    'video' => array(
        'type' => 'textfield',
        'heading' => '视频',
      ),
  )
) );