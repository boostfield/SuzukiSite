<?php

add_ux_builder_shortcode( 'featured_box',
	array(
		'type'      => 'container',
    'name' => __( 'Icon Box' ,  'flatsome-admin'),
    'category' => __( 'Content' ,  'flatsome-admin'),
		'thumbnail' => flatsome_ux_builder_thumbnail( 'icon_box' ),
		'wrap'      => false,
		'presets'   => array(
			array(
            'name' => __( 'Default' ,  'flatsome-admin'),
				'content' => '[featured_box]<h3>Lorem ipsum dolor sit amet</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat....</p>[/featured_box]',
			),
		),
		'options'   => array(
			'img'         => array(
				'type'    => 'image',
        'heading' => '图标',
				'value'   => '',
			),
			'inline_svg'  => array(
				'type'    => 'checkbox',
        'heading' => '行内 SVG',
				'default' => 'true',
			),
			'img_width'   => array(
				'type'      => 'slider',
        'heading' => '图标宽度',
				'unit'      => 'px',
				'default'   => 60,
				'max'       => 600,
				'min'       => 20,
				'on_change' => array(
					'selector' => '.icon-box-img',
					'style'    => 'width: {{ value }}px',
				),
			),
			'pos'         => array(
				'type'      => 'select',
        'heading' => '图标位置',
				'default'   => 'top',
				'options'   => array(
					'top'    => '上',
					'center' => '中',
					'left'   => '左',
					'right'  => '右',
				),
				'on_change' => array(
					'class' => 'icon-box-{{ value }}',
				),
			),
			'title'       => array(
				'type'      => 'textfield',
        'heading' => '标题',
				'value'     => '',
				'on_change' => array(
					'selector' => '.icon-box-text h5',
					'content'  => '{{ value }}',
				),
			),
			'title_small' => array(
				'type'      => 'textfield',
        'heading' => '标题小',
				'value'     => '',
				'on_change' => array(
					'selector' => '.icon-box-text h6',
					'content'  => '{{ value }}',
				),
			),
			'tooltip'     => array(
				'type'    => 'textfield',
				'heading' => '工具提示',
				'value'   => '',
			),
			'link_group'  => require( __DIR__ . '/commons/links.php' ),
			'font_size'   => array(
				'type'      => 'radio-buttons',
        'heading' => __( 'Text Size' ,  'flatsome-admin'),
				'default'   => 'medium',
				'options'   => require( __DIR__ . '/values/text-sizes.php' ),
				'on_change' => array(
					'recompile' => false,
					'class'     => 'is-{{ value }}',
				),
			),
			'icon_border' => array(
				'type'      => 'slider',
        'heading' => '图标边框',
				'unit'      => 'px',
				'default'   => 0,
				'max'       => 10,
				'min'       => 0,
				'on_change' => array(
					'selector' => '.has-icon-bg .icon-inner',
					'style'    => 'border-width: {{ value }}px',
				),
			),
			'icon_color'  => array(
				'type'        => 'colorpicker',
        'heading' => __( 'Icon Color' ,  'flatsome-admin'),
        'description' => __( 'Only works for simple SVG icons' ,  'flatsome-admin'),
				'format'      => 'rgb',
				'position'    => 'bottom right',
				'on_change'   => array(
					'selector' => '.icon-inner',
					'style'    => 'color: {{ value }}',
				),
			),
			'margin'      => array(
				'type'      => 'margins',
        'heading' => __( 'Margin' ,  'flatsome-admin'),
				'value'     => '',
				'default'   => '',
				'min'       => -100,
				'max'       => 100,
				'step'      => 1,
				'on_change' => array(
					'selector' => '.icon-box',
					'style'    => 'margin: {{ value }}',
				),
			),
		),
	)
);
