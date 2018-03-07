<?php

add_ux_builder_shortcode( 'page_header', array(
  'name' => __( 'Page Header' ,  'flatsome-admin'),
  'category' => __( 'Layout' ,  'flatsome-admin'),
  'wrap' => false,
  'thumbnail' =>  flatsome_ux_builder_thumbnail( 'page_title' ),
  'allow' => array(),
  'presets' => array(),
  'options' => array(
  	 'layout_options' => array(
      'type' => 'group',
      'heading' => __( 'Layout' ,  'flatsome-admin'),
      'options' => array(
      	'height' => array(
          'type' => 'scrubfield',
          'responsive' => true,
          'heading' => __('Height',  'flatsome-admin'),
          'default' => '',
          'placeholder' => __('Default',  'flatsome-admin'),
          'min' => 0,
          'step' => 1,
           'on_change' => array(
              'recompile' => false,
              'selector' => '.page-title-inner',
              'style' => 'min-height: {{ value }}'
          )
        ),

        'margin' => array(
          'type' => 'scrubfield',
          'responsive' => true,
          'heading' => __('Margin',  'flatsome-admin'),
          'min' => 0,
          'step' => 1,
           'on_change' => array(
            'recompile' => false,
            'style' => 'margin-bottom: {{ value }}'
          )
        ),

        'style' => array(
            'type' => 'select',
            'heading' => '内容样式',
            'full_width' => true,
            'default' => 'featured',
            'options' => array(
            	'featured' => '特色',
            	'normal' => '扁平',
                'simple' => '简单',
                'divided' => '分隔',
            )
        ),

        'type' => array(
            'type' => 'select',
            'heading' => '内容类型',
            'full_width' => true,
            'default' => 'breadcrumbs',
            'options' => array(
            	'breadcrumbs' => '面包屑',
                'subnav' => '子导航',
                'onpage' => '滚动至导航',
                'share' => '分享图标'
            )
        ),

        'text_color' => array(
          'type' => 'radio-buttons',
          'heading' => __('Text color',  'flatsome-admin'),
          'default' => 'light',
          'options' => array(
            'light'  => array( 'title' => '浅色'),
            'dark'  => array( 'title' => '深色'),
          ),
        ),

        'align' => array(
            'type' => 'radio-buttons',
            'heading' => '对齐',
            'full_width' => true,
            'default' => 'left',
            'options' => array(
            	'left' => array( 'title' => '左'),
              'center' => array( 'title' => '中'),
              'right' => array( 'title' => '右'),
            ),
        ),

        'v_align' => array(
            'type' => 'radio-buttons',
            'heading' => '垂直对齐',
            'full_width' => true,
            'default' => 'center',
            'options' => array(
                'top' => array( 'title' => '顶部'),
                'center' => array( 'title' => '中间'),
                'bottom' => array( 'title' => '底部'),
            )
        ),

        'depth' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => '深度',
            'default' => 0,
            'max' => 5,
            'min' => 0,
        ),

        'parallax_text' => array(
            'type' => 'slider',
            'heading' => '内容视差',
            'unit' => '+',
            'default' => 0,
            'max' => 10,
            'min' => 0,
        ),
      )
    ),
  	'title_options' => array(
  	   'type' => 'group',
       'heading' => __( 'Title' ,  'flatsome-admin'),
       'options' => array(

          'show_title' => array(
            'type' => 'checkbox',
            'heading' => '显示标题',
            'default' => 'true'
          ),

       	 'title' => array(
            'conditions' => 'show_title',
            'type' => 'textfield',
            'heading' => '标题',
            'placeholder' => __( 'Page title' ,  'flatsome-admin'),
            'default' => '',
       	 ),

       	 'title_size' => array(
            'conditions' => 'show_title',
            'type' => 'select',
            'heading' => '尺寸',
            'options' => require( __DIR__ . '/values/sizes.php' ),
         ),

       	 'title_case' => array(
            'conditions' => 'show_title',
  	        'type' => 'radio-buttons',
  	        'heading' => '文字案例',
  	        'default' => 'normal',
  	        'options' => array(
              'normal' => array( 'title' => 'Abc' ),
	            'uppercase' => array( 'title' => 'ABC'),
  	        ),
        ),

       	 'sub_title' => array(
            'conditions' => 'show_title',
            'type' => 'textfield',
            'heading' => '子标题',
            'default' => '',
       	 ),
       ),
  	),
  	'nav_options' => array(
      'type' => 'group',
      'heading' => __( 'Navigation style' ,  'flatsome-admin'),
      'options' => array(
      	'nav_style' => array(
            'type' => 'select',
            'heading' => '样式',
            'default' => 'line',
            'options' => require( __DIR__ . '/values/nav-styles.php' ),
         ),
      	'nav_size' => array(
            'type' => 'select',
            'heading' => '尺寸',
            'options' => require( __DIR__ . '/values/sizes.php' ),
         ),
      	 'nav_case' => array(
	        'type' => 'radio-buttons',
	        'heading' => '文字案例',
	        'default' => 'uppercase',
	        'options' => array(
	            'uppercase' => array( 'title' => 'ABC'),
	            'lowercase' => array( 'title' => 'Abc' ),
	        ),
        ),
       )
    ),
  	'background_options' => array(
      'type' => 'group',
      'heading' => __( 'Background' ,  'flatsome-admin'),
      'options' => array(
        'bg' => array(
          'type' => 'image',
          'heading' => __( 'Image' ,  'flatsome-admin'),
          'thumb_size' => 'bg_size',
          'bg_position' => 'bg_pos',
        ),
        'bg_size'=> array(
          'type' => 'select',
          'heading' => '尺寸',
          'default' => 'large',
          'options' => array(
            'orginal' => '原始',
            'large' => '大',
            'medium' => '中',
            'thumbnail' => '缩略图',
          )
        ),
        'bg_color' => array(
          'type' => 'colorpicker',
          'heading' => __('Color',  'flatsome-admin'),
          'format' => 'rgb',
          'position' => 'bottom right',
          'helpers' => require( __DIR__ . '/helpers/colors.php' ),
        ),
        'bg_overlay' => array(
          'type' => 'colorpicker',
          'heading' => __('Overlay',  'flatsome-admin'),
          'responsive' => true,
          'alpha' => true,
          'format' => 'rgb',
          'position' => 'bottom right',
          'helpers' => require( __DIR__ . '/helpers/colors-overlay.php' ),
        ),
        'bg_pos' => array(
          'type' => 'textfield',
          'heading' => __('Position',  'flatsome-admin'),
           'on_change' => array(
	            'selector' => '.title-bg',
	            'style' => 'background-position: {{ value }}'
          )
        ),
        'parallax' => array(
            'type' => 'slider',
            'heading' => '视差',
            'unit' => '+',
            'default' => 0,
            'max' => 10,
            'min' => 0,
        ),
    ), // end bgs

  ),
 ),
) );
