<?php

add_ux_builder_shortcode( 'ux_slider', array(
    'type' => 'container',
    'name' => __( 'Slider' , 'flatsome-admin'),
    'category' => __( 'Layout' , 'flatsome-admin'),
    'message' => __( 'Add slides here' , 'flatsome-admin'),
    'directives' => array( 'ux-slider' ),
    'allow' => array( 'ux_banner','ux_image','section','row','ux_banner_grid','logo'),
    'template' => flatsome_ux_builder_template( 'ux_slider.html' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'slider' ),
    'tools' => 'shortcodes/ux_slider/ux-slider-tools.directive.html',
    'wrap'   => false,
    'info' => '{{ label }}',
    'priority' => -1,

    'toolbar' => array(
        'show_children_selector' => true,
        'show_on_child_active' => true,
    ),

    'children' => array(
        'inline' => true,
        'addable_spots' => array( 'left', 'right' )
    ),

    /*
    'presets' => array(
        array(
            'name' => __( 'Default' , 'flatsome-admin'),
            'content' => '[ux_slider]',
        ),
        array(
            'name' => __( 'Simple Banner' , 'flatsome-admin'),
            'content' => '[ux_slider][ux_banner][/ux_slider]',
        ),
    ), */

    'options' => array(
        'label' => array(
            'type' => 'textfield',
            'heading' => '管理标签',
            'placeholder' => 'Enter admin label...'
        ),
        'layout_options' => array(
          'type' => 'group',
          'heading' => __( 'Layout', 'flatsome-admin' ),
          'options' => array(
            'visibility'  => require( __DIR__ . '/commons/visibility.php' ),
            
            'style' => array(
              'type' => 'select',
              'heading' => '样式',
              'default' => 'normal',
              'options' => array(
                  'normal' => '默认',
                  'container' => '容器',
                  'focus' => '焦点',
                  'shadow' => '阴影',
              )
            ),
            'slide_width' => array(
              'type' => 'scrubfield',
              'heading' => '滑块宽度',
              'placeholder' => 'Width in Px',
              'default' => '',
              'min' => '0',
            ),

            'slide_align' => array(
              'type' => 'select',
              'heading' => '滑块对齐',
              'default' => 'center',
              'options' => array(
                  'center' => '居中',
                  'left' => '左',
                  'right' => '右',
              )
            ),
            'bg_color' => array(
              'type' => 'colorpicker',
              'heading' => __('Bg Color', 'flatsome-admin'),
              'format' => 'rgb',
              'position' => 'bottom right',
              'helpers' => require( __DIR__ . '/helpers/colors.php' ),
            ),
            'margin' => array(
              'type' => 'scrubfield',
              'responsive' => true,
              'heading' => __('Margin', 'flatsome-admin'),
              'default' => '0px',
              'min' => 0,
              'max' => 100,
              'step' => 1
            ),
            'infinitive' => array(
                'type' => 'radio-buttons',
                'heading' => __('Infinitive', 'flatsome-admin'),
                'default' => 'true',
                'options' => array(
                    'false'  => array( 'title' => '禁用'),
                    'true'  => array( 'title' => '启用'),
                ),
            ),
            'freescroll' => array(
                'type' => 'radio-buttons',
                'heading' => __('Free Scroll', 'flatsome-admin'),
                'default' => 'false',
                'options' => array(
                    'false'  => array( 'title' => '禁用'),
                    'true'  => array( 'title' => '启用'),
                ),
            ),
            'draggable' => array(
                'type' => 'radio-buttons',
                'heading' => __('Draggable', 'flatsome-admin'),
                'default' => 'true',
                'options' => array(
                    'false'  => array( 'title' => '禁用'),
                    'true'  => array( 'title' => '启用'),
                ),
            ),
            'parallax' => array(
                'type' => 'slider',
                'heading' => '视差',
                'unit' => '+',
                'default' => 0,
                'max' => 10,
                'min' => 0,
            ),
            'mobile' => array(
                'type' => 'radio-buttons',
                'heading' => __('Show for Mobile', 'flatsome-admin'),
                'default' => 'true',
                'options' => array(
                    'false'  => array( 'title' => '禁用'),
                    'true'  => array( 'title' => '启用'),
                ),
            ),
          ),
        ),

        'nav_options' => array(
          'type' => 'group',
          'heading' => __( 'Navigation' , 'flatsome-admin'),
          'options' => array(
            'hide_nav' => array(
                'type' => 'radio-buttons',
                'heading' => __('Always Visible', 'flatsome-admin'),
                'default' => '',
                'options' => array(
                    ''  => array( 'title' => '禁用'),
                    'true'  => array( 'title' => '启用'),
                ),
            ),
            'nav_pos' => array(
              'type' => 'select',
              'heading' => '位置',
              'default' => '',
              'options' => array(
                  '' => 'Inside',
                  'outside' => 'Outside',
              )
            ),
           'nav_size' => array(
              'type' => 'select',
              'heading' => '尺寸',
              'default' => 'large',
              'options' => array(
                  'large' => '大',
                  'normal' => '普通',
              )
            ),
            'arrows' => array(
              'type' => 'radio-buttons',
              'heading' => __('Arrows', 'flatsome-admin'),
              'default' => 'true',
              'options' => array(
                'false'  => array( 'title' => '禁用'),
                'true'  => array( 'title' => '启用'),
                ),
            ),
            'nav_style' => array(
              'type' => 'select',
              'heading' => __('Arrow Style', 'flatsome-admin'),
              'default' => 'circle',
              'options' => array(
                  'circle' => 'Circle',
                  'simple' => 'Simple',
                  'reveal' => 'Reveal',
              )
            ),
            'nav_color' => array(
                'type' => 'radio-buttons',
                'heading' => __('Arrow Color', 'flatsome-admin'),
                'default' => 'light',
                'options' => array(
                    'dark'  => array( 'title' => '深色'),
                    'light'  => array( 'title' => '浅色'),
                ),
            ),

            'bullets' => array(
              'type' => 'radio-buttons',
              'heading' => __('Bullets', 'flatsome-admin'),
              'default' => 'true',
              'options' => array(
                  'false'  => array( 'title' => '禁用'),
                  'true'  => array( 'title' => '启用'),
              ),
            ),
            'bullet_style' => array(
              'type' => 'select',
              'heading' => '子弹样式',
              'default' => 'circle',
              'options' => array(
                'circle' => '圆',
                'simple' => '简单',
                'dashes' => '虚线'
            )
           ),
          ),
        ),
        'slide_options' => array(
          'type' => 'group',
          'heading' => __( 'Auto Slide' , 'flatsome-admin'),
          'options' => array(  
            'auto_slide' => array(
                'type' => 'radio-buttons',
                'heading' => __('Auto slide', 'flatsome-admin'),
                'default' => 'true',
                'options' => array(
                    'false'  => array( 'title' => '禁用'),
                    'true'  => array( 'title' => '启用'),
                ),
            ),
            'timer' => array(
                'type' => 'textfield',
                'heading' => '记时 (ms)',
                'default' => 6000,
            ),
            'pause_hover' => array(
                'type' => 'radio-buttons',
                'heading' => __('Pause on Hover', 'flatsome-admin'),
                'default' => 'true',
                'options' => array(
                    'false'  => array( 'title' => '禁用'),
                    'true'  => array( 'title' => '启用'),
                ),
            ),
          ),
        ),
    ),
) );
