<?php

add_ux_builder_shortcode( 'video_button', array(
  'name' => __( 'Video Button' , 'flatsome-admin'),
  'category' => __( 'Content' , 'flatsome-admin'),
  'thumbnail' =>  flatsome_ux_builder_thumbnail( 'play' ),

  'options' => array(
      'video' => array(
        'type' => 'textfield',
        'heading' => '视频',
        'description' => '输入Youtube或 Vimeo 视频. 视频将在灯箱中打开. 如: https://www.youtube.com/watch?v=AoPiLg8DZ3A',
      ),
      'size' => array(
        'type' => 'slider',
        'heading' => __('Size', 'flatsome-admin'),
        'unit' => '%',
        'default' => '100',
        'max' => '500',
        'min' => '0',
        'on_change' => array(
            'style' => 'font-size: {{ value }}%'
        )
      ),
  )
) );
