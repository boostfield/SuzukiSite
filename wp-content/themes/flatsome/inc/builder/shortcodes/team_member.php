<?php

add_ux_builder_shortcode( 'team_member', array(
    'name' => __( 'Team Member' , 'flatsome-admin'),
    'category' => __( 'Content' , 'flatsome-admin'),
    'type' => 'container',
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'team_member' ),

    'presets' => array(
        array(
            'name' => __( 'Default' , 'flatsome-admin'),
            'content' => '[team_member name="Ola Nordmann" title="Customer Support" image_height="100%" image_width="80" image_radius="100"] Lorem ipsum.. [/team_member]'
        ),
    ),

    'options' => array_merge_recursive( array(
        'layout_options' => array(
            'type' => 'group',
            'heading' => __( 'Layout' , 'flatsome-admin'),
            'options' => array(
                'img' => array(
                    'type' => 'image',
                    'heading' => '图像',
                    'group' => 'background',
                    'param_name' => 'img',
                ),
                'style' => array(
                    'type' => 'select',
                    'heading' => __( 'Style' , 'flatsome-admin'),
                    'default' => 'normal',
                    'options' => require( __DIR__ . '/values/box-layouts.php' )
                ),
               
                'name' => array( 'type' => 'textfield','heading' => '名称', 'default' => '', 'on_change' => array( 'selector' => '.person-name', 'content' => 'p{{ value }}')),
                'title' => array( 'type' => 'textfield','heading' => '标题', 'default' => '',  'on_change' => array( 'selector' => '.person-title', 'content' => 'p{{ value }}')),
                'link' => array( 'type' => 'textfield','heading' => '链接', 'default' => ''),
                'depth' => array(
                    'type' => 'slider',
                    'heading' => __( 'Depth' , 'flatsome-admin'),
                    'default' => '0',
                    'max' => '5',
                    'min' => '0',
                ),
                'depth_hover' => array(
                    'type' => 'slider',
                    'heading' => __( 'Depth :Hover' , 'flatsome-admin'),
                    'default' => '0',
                    'max' => '5',
                    'min' => '0',
                ),
            ),
        ),
        'social_icons' => array(
            'type' => 'group',
            'heading' => __( 'Social Icons' , 'flatsome-admin'),
            'options' => array(
               'icon_style' => array(
                    'type' => 'radio-buttons',
                    'heading' => __( 'Style' , 'flatsome-admin'),
                    'default' => 'outline',
                    'options' => array(
                        'outline' => array( 'title' => '轮廓' ),
                        'fill' => array( 'title' => '填充' ),
                        'small' => array( 'title' => '小' ),
                    ),
                ),
                'facebook' => array( 'type' => 'textfield','heading' => 'Facebook', 'default' => ''),
                'instagram' => array( 'type' => 'textfield','heading' => 'Instagram', 'default' => ''),
                'twitter' => array( 'type' => 'textfield','heading' => 'Twitter', 'default' => ''),
                'googleplus' => array( 'type' => 'textfield','heading' => 'Google+', 'default' => ''),
                'youtube' => array( 'type' => 'textfield','heading' => 'Youtube', 'default' => ''),
                'email' => array( 'type' => 'textfield','heading' => 'Email', 'default' => ''),
                'pinterest' => array( 'type' => 'textfield','heading' => 'Pinterest', 'default' => ''),
                'linkedin' => array( 'type' => 'textfield','heading' => 'Linkedin', 'default' => ''),
                'snapchat' => array( 'type' => 'image', 'heading' => __( 'SnapChat' )),
				'weibo' => array( 'type' => 'textfield','heading' => '新浪微博', 'default' => ''),
				'tqq' => array( 'type' => 'textfield','heading' => '腾讯微博', 'default' => ''),
				'qq' => array( 'type' => 'textfield','heading' => 'QQ', 'default' => ''),
				'weixin' => array( 'type' => 'textfield','heading' => '微信', 'default' => ''),
            ),
        ),
        'link_group' => require( __DIR__ . '/commons/links.php' ),
    ),
    require( __DIR__ . '/commons/box-styles.php' ) ),
) );

// ux_builder_parse_args
