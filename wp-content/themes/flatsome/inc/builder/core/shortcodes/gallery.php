<?php

$size_names = apply_filters( 'image_size_names_choose', array(
	'thumbnail' => __( 'Thumbnail', 'flatsome-admin' ),
	'medium' => __( 'Medium', 'flatsome-admin' ),
	'large' => __( 'Large', 'flatsome-admin' ),
	'full' => __( 'Full Size', 'flatsome-admin' ),
) );

add_ux_builder_shortcode( 'gallery', array(
    'name' => __( 'WP Gallery', 'flatsome-admin'),
    'image' => '',
    'category' => __( 'Content' , 'flatsome-admin'),
    'presets' => array(
        array(
            'name' => __( 'Default', 'flatsome-admin' ),
            'content' => '[gallery]'
        ),
    ),

    'options' => array(
      /*'id' => array(
        'type' => 'select',
        'heading' => __( 'Post' , 'flatsome-admin'),
        'descrition' => __( 'The gallery will display images which are attached to that post.', 'flatsome-admin' ),
        'config' => array(
          'placeholder' => __( 'Select..' , 'flatsome-admin'),
          'postSelect' => array(),
        )
      ), */
      'ids' => array(
        'type' => 'gallery',
        'heading' => __( 'Images' , 'flatsome-admin'),
      ),
      'orderby' => array(
        'type' => 'select',
        'heading' => __( 'Order by' , 'flatsome-admin'),
        'default' => 'menu_order',
        'options' => array(
          'menu_order' => __( 'Custom' , 'flatsome-admin'),
          'title' => __( 'Image title' , 'flatsome-admin'),
          'ID' => __( 'Image ID' , 'flatsome-admin'),
          'post_date' => __( 'Date/time' , 'flatsome-admin'),
          'rand' => __( 'Randomly', 'flatsome-admin' ),
        ),
      ),
      'order' => array(
        'type' => 'select',
        'heading' => __( 'Sort order', 'flatsome-admin' ),
        'default' => 'ASC',
        'options' => array(
          'ASC' => __( 'Ascending', 'flatsome-admin' ),
          'DESC' => __( 'Descending', 'flatsome-admin' ),
        ),
      ),
      'columns' => array(
        'type' => 'select',
        'heading' => __( 'Columns', 'flatsome-admin' ),
        'default' => '3',
        'options' => array(
          '1' => __( '1' ),
          '2' => __( '2' ),
          '3' => __( '3' ),
          '4' => __( '4' ),
          '5' => __( '5' ),
          '6' => __( '6' ),
          '7' => __( '7' ),
          '8' => __( '8' ),
         ),
      ),
      'size' => array(
        'type' => 'select',
        'heading' => __( 'Image size' , 'flatsome-admin'),
        'default' => 'thumbnail',
        'options' => $size_names,
      ),
      'link' => array(
        'type' => 'select',
        'heading' => __( 'Link to' , 'flatsome-admin'),
        'default' => 'post',
        'options' => array(
          'post' => __( 'Attachment page' , 'flatsome-admin'),
          'file' => __( 'Media file' , 'flatsome-admin'),
          'none' => __( 'None', 'flatsome-admin' ),
        ),
      ),
      'itemtag' => array(
        'type' => 'textfield',
        'heading' => __( 'Item tag' , 'flatsome-admin'),
        'placeholder' => 'dl',
      ),
      'icontag' => array(
        'type' => 'textfield',
        'heading' => __( 'Icon tag' , 'flatsome-admin'),
        'placeholder' => 'dt',
      ),
      'captiontag' => array(
        'type' => 'textfield',
        'heading' => __( 'Caption tag' , 'flatsome-admin'),
        'placeholder' => 'dd',
      ),
      'include' => array(
        'type' => 'textfield',
        'heading' => __( 'Include IDs' , 'flatsome-admin'),
      ),
      'exclude' => array(
        'type' => 'textfield',
        'heading' => __( 'Exclude IDs' , 'flatsome-admin'),
      ),
    ),
) );
