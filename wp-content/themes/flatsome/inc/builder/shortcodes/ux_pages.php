<?php

$repeater_type        = 'row';
$default_text_align   = 'left';
$repeater_col_spacing = 'normal';

$options = array(
	'pages_options'   => array(
		'type'    => 'group',
    'heading' => __( 'Options', 'flatsome-admin' ),
		'options' => array(
			'style'   => array(
				'type'    => 'select',
            'heading' => __( 'Style', 'flatsome-admin' ),
				'default' => 'normal',
				'options' => require( __DIR__ . '/values/box-layouts.php' ),
			),
			'parent'  => array(
				'type'    => 'select',
            'heading' => '父级',
				'default' => '',
				'options' => ux_builder_get_page_parents(),
			),
			'orderby' => array(
				'type'    => 'select',
				'heading' => __( 'Order By' , 'flatsome-admin'),
				'default' => 'menu_order',
				'options' => array(
					'post_title'    => '标题',
					'post_date'     => '日期',
					'menu_order'    => '菜单顺序',
					'post_modified' => '最后修改',
				),
			),
			'order'   => array(
				'type'    => 'select',
				'heading' => __( 'Order', 'flatsome-admin' ),
				'default' => 'asc',
				'options' => array(
					'asc'  => '升序',
					'desc' => '降序',
				),
			),
		),
	),
	'layout_options'        => require( __DIR__ . '/commons/repeater-options.php' ),
	'layout_options_slider' => require( __DIR__ . '/commons/repeater-slider.php' ),
);

$box_styles = require( __DIR__ . '/commons/box-styles.php' );
$options    = array_merge( $options, $box_styles );

add_ux_builder_shortcode( 'ux_pages',
	array(
  'name' => __( 'Pages', 'flatsome-admin'),
  'category' => __( 'Content', 'flatsome-admin'),
		'thumbnail' => flatsome_ux_builder_thumbnail( 'pages' ),
		'scripts'   => array(
			'flatsome-masonry-js' => get_template_directory_uri() . '/assets/libs/packery.pkgd.min.js',
		),
		'presets'   => array(
			array(
      'name' => __( 'Default' , 'flatsome-admin'),
				'content' => '[ux_pages]',
			),
		),
		'options'   => $options,
	)
);
