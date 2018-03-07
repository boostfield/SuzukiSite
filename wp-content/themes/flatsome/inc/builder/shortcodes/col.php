<?php

add_ux_builder_shortcode( 'col', array(
    'type' => 'container',
    'name' => __( 'Column',  'flatsome-admin' ),
    'category' => __( 'Layout' ,  'flatsome-admin'),
    'template' => flatsome_ux_builder_template( 'col.html' ),
    'tools' => 'shortcodes/col/col-tools.directive.html',
    'info' => '{{ span }}/12',
    'require' => array( 'row' ),
    'wrap'   => false,
    'inline' => true,
    'nested' => true,
    'resize' => array( 'right' ),

    'presets' => array(
        array(
            'name' => __( 'Default' ,  'flatsome-admin'),
            'content' => '[col span="4" span__sm="12"][/col]',
        ),
    ),

    'options' => array(

        'span' => array(
            'type' => 'col-slider',
            'heading' => '宽度',
            'full_width' => true,
            'responsive' => true,
            'auto_focus' => true,
            'default' => 12,
            'max' => 12,
            'min' => 1,
        ),

        'visibility'  => require( __DIR__ . '/commons/visibility.php' ),

        'force_first' => array(
            'type' => 'select',
            'heading' => '强制第一个位置',
            'default' => '',
            'options' => array(
                ''   => '无',
                'medium' => '平板上',
                'small'  => '手机上'
            )
        ),

        'divider' => array(
            'type' => 'checkbox',
            'heading' => '分隔符',
        ),

        'padding' => array(
            'type' => 'margins',
            'heading' => '内边距',
            'full_width' => true,
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),

        'margin' => array(
            'type' => 'margins',
            'heading' => '外边距',
            'full_width' => true,
            'min' => -200,
            'max' => 200,
            'step' => 1,
        ),

        'align' => array(
            'type' => 'radio-buttons',
            'heading' => '文本对齐',
            'default' => '',
            'options' => require( __DIR__ . '/values/align-radios.php' ),
        ),

        'bg_color' => array(
            'type' => 'colorpicker',
            'heading' => __('Bg Color',  'flatsome-admin'),
            'format' => 'rgb',
            'alpha' => true,
            'position' => 'bottom right',
            'helpers' => require( __DIR__ . '/helpers/colors.php' ),
        ),

        'color' => array(
            'type' => 'radio-buttons',
            'heading' => '颜色',
            'default' => '',
            'options' => array(
                'light'   => array( 'title' => '浅色'),
                ''  => array( 'title' => '深色'),
            ),
        ),

        'text_depth' => array(
              'type' => 'slider',
              'heading' => __('Text Shadow',  'flatsome-admin'),
              'default' => '0',
              'unit' => '+',
              'max' => '5',
              'min' => '0',
        ),

        'max_width' => array(
            'type' => 'scrubfield',
            'heading' => '最大宽度',
            'default' => '',
            'min' => '0'
        ),


        'animate' => array(
            'type' => 'select',
            'heading' => '动画',
            'default' => 'none',
            'options' => require( __DIR__ . '/values/animate.php' ),
        ),

        'hover' => array(
            'type' => 'select',
            'heading' => '悬停效果',
            'options' => array(
                '' => '无',
                'fade' => '淡入',
                'focus' => '焦点',
                'blur' => '模糊',
            ),
        ),

        'tooltip' => array(
            'type' => 'textfield',
            'heading' => '工具提示',
        ),

        'class' => array(
            'type' => 'textfield',
            'heading' => '类',
            'default' => '',
        ),

        'parallax' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => '视差',
            'default' => 0,
            'max' => 10,
            'min' => -10,
        ),

        'depth' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => '深度',
            'default' => 0,
            'max' => 5,
            'min' => 0,
        ),

        'depth_hover' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => '悬停深度',
            'default' => 0,
            'max' => 5,
            'min' => 0,
        ),
    ),
) );
