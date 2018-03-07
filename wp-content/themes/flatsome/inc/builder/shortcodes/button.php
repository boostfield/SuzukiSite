<?php

add_ux_builder_shortcode( 'button', array(
    'name' => __( 'Button' ,  'flatsome-admin'),
    'category' => __( 'Content' ,  'flatsome-admin'),
    'template' => flatsome_ux_builder_template( 'button.html' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button' ),
    'info' => '{{ text }}',
    'inline' => true,
    'wrap'   => false,
    'priority' => 1,

    'presets' => array(
        array(
            'name' => __( 'Simple' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-simple' ),
            'content' => '[button text="Click me!"]'
        ),
        array(
            'name' => __( 'Round' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-round' ),
            'content' => '[button text="Click me!" radius="10"]'
        ),
        array(
            'name' => __( 'Circle' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-circle' ),
            'content' => '[button text="Click me!" radius="99"]'
        ),
        array(
            'name' => __( 'Outline' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-outline' ),
            'content' => '[button text="Click me!" style="outline"]'
        ),
        array(
            'name' => __( 'Outline Round' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-outline-round' ),
            'content' => '[button text="Click me!" style="outline" radius="10"]'
        ),
        array(
            'name' => __( 'Outline Circle' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-outline-circle' ),
            'content' => '[button text="Click me!" style="outline" radius="99"]'
        ),
        array(
            'name' => __( 'Simple Link' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-link' ),
            'content' => '[button text="Click me!"  style="link"]'
        ),
        array(
            'name' => __( 'Underline' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-underline' ),
            'content' => '[button text="Click me!"  style="underline"]'
        ),
        array(
            'name' => __( 'CTA - Small' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-call-to-action' ),
            'content' => '[button text="Click me!" style="shade" depth="3" depth_hover="5" radius="5"]'
        ),
        array(
            'name' => __( 'CTA - Large' ,  'flatsome-admin'),
            'thumbnail' =>  flatsome_ux_builder_thumbnail( 'button-call-to-action-large' ),
            'content' => '[button text="Click me!" style="shade" size="larger" depth="4" depth_hover="5" radius="10"]'
        ),
    ),

    'options' => array(

        'text' => array(
            'type' => 'textfield',
            'holder' => 'button',
            'heading' => 'Text',
            'param_name' => 'text',
            'focus' => 'true',
            'value' => '按钮',
            'default' => '',
            'auto_focus' => true,
        ),

        'letter_case' => array(
            'type' => 'radio-buttons',
            'heading' => '文字案例',
            'default' => '',
            'options' => array(
                '' => array( 'title' => 'ABC'),
                'lowercase' => array( 'title' => 'Abc' ),
            ),
        ),

      'class' => array(
          'type' => 'textfield',
          'heading' => '类',
          'param_name' => 'class',
          'default' => '',
      ),

      'layout_options' => array(
        'type' => 'group',
        'heading' => '布局',
        'options' => array(
          'color' => array(
            'type' => 'select',
            'heading' => '颜色',
            'default' => 'primary',
            'options' => array(
                'primary' => '主',
                'secondary' => '次',
                'alert' => '警告',
                'success' => '成功',
                'white' => '白色',
            )
        ),
        'style' => array(
            'type' => 'select',
            'heading' => '样式',
            'default' => '',
            'options' => array(
                '' => '默认',
                'outline' => '轮廓',
                'link' => '简单',
                'underline' => '下划线',
                'shade' => '阴影',
                'bevel' => '倒角',
                'gloss' => '辉光',
            )
        ),
        'size' => array(
            'type' => 'select',
            'heading' => '尺寸',
            'options' => require( __DIR__ . '/values/sizes.php' ),
        ),
        'animate' => array(
            'type' => 'select',
            'heading' => '动画',
            'default' => 'none',
            'options' => require( __DIR__ . '/values/animate.php' ),
        ),

        'radius' => array(
            'type' => 'slider',
            'class' => '',
            'heading' => '半径',
            'default' => '0',
            'max' => '99',
            'min' => '0',
        ),

        'depth' => array(
            'type' => 'slider',
            'class' => '',
            'heading' => '深度',
            'default' => '0',
            'max' => '5',
            'min' => '0',
        ),

        'depth_hover' => array(
            'type' => 'slider',
            'class' => '',
            'heading' => '深度 :悬停',
            'param_name' => 'depth_hover',
            'default' => '0',
            'max' => '5',
            'min' => '0',
        ),
        'expand' => array(
            'type' => 'checkbox',
            'heading' => '扩展',
        ),
       ),
      ),
      'icon_options' => array(
            'type' => 'group',
            'heading' => '图标',
            'options' => array(
                'icon' => array(
                    'type' => 'select',
                    'heading' => '图标',
                    'options' => require( __DIR__ . '/values/icons.php' ),
                ),
                'icon_pos' => array(
                    'conditions' => 'icon',
                    'type' => 'select',
                    'heading' => '位置',
                    'options' => array(
                        '' => '右',
                        'left' => '左',
                    )
                ),
                'icon_reveal' => array(
                    'conditions' => 'icon',
                    'type' => 'select',
                    'heading' => '可见',
                    'options' => array(
                        '' => '总可见',
                        'true' => '悬停可见',
                    )
                ),
            ),
        ),
        'link_options' => require( __DIR__ . '/commons/links.php' )
    ),
) );
