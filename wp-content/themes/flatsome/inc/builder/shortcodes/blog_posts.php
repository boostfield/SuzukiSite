<?php

// Set defaults
$repeater_columns = '4';
$repeater_type = 'slider';
$repeater_post_type = 'post';
$repeater_col_spacing = 'normal';

$repeater_post_cat = 'category';
$default_text_align = 'center';

$options =  array(
'style_options' => array(
    'type' => 'group',
    'heading' => __( 'Style' ,  'flatsome-admin'),
    'options' => array(
         'style' => array(
            'type' => 'select',
            'heading' => __( 'Style' ,  'flatsome-admin'),
            'default' => '',
            'options' => require( __DIR__ . '/values/box-layouts.php' )
        )
    ),
),
'layout_options' => require( __DIR__ . '/commons/repeater-options.php' ),
'layout_options_slider' => require( __DIR__ . '/commons/repeater-slider.php' ),
'post_options' => require( __DIR__ . '/commons/repeater-posts.php' ),
'post_title_options' => array(
    'type' => 'group',
    'heading' => __( 'Title' ,  'flatsome-admin'),
        'options' => array(
            'title_size' => array(
                'type' => 'select',
                'heading' => '标题尺寸',
                'default' => '',
                'options' => require( __DIR__ . '/values/sizes.php' )
            ),
            'title_style' => array(
                'type' => 'radio-buttons',
                'heading' => '标题样式',
                'default' => '',
                'options' => array(
                    ''   => array( 'title' => 'Abc'),
                    'uppercase' => array( 'title' => 'ABC'),
                )
        ),
    )
),
'read_more_button' => array(
    'type' => 'group',
    'heading' => __( 'Read More' ,  'flatsome-admin'),
        'options' => array(
            'readmore' => array(
                'type' => 'textfield',
                'heading' => '文本',
                'default' => '',
            ),
            'readmore_color' => array(
            'type' => 'select',
            'heading' => '颜色',
            'conditions' => 'readmore',
            'default' => 'primary',
            'options' => array(
                '' => '空白',
                'primary' => '主',
                'secondary' => '次',
                'alert' => '警告',
                'success' => '成功',
                'white' => '白色',
            )
        ),
        'readmore_style' => array(
            'type' => 'select',
            'heading' => '样式',
            'conditions' => 'readmore',
            'default' => 'outline',
            'options' => array(
                '' => 'Default',
                'outline' => '轮廓',
                'link' => '简单',
                'underline' => '下划线',
                'shade' => '阴影',
                'bevel' => '倒角',
                'gloss' => '辉光',
            )
        ),
        'readmore_size' => array(
            'type' => 'select',
            'conditions' => 'readmore',
            'heading' => '尺寸',
            'default' => '',
            'options' => require( __DIR__ . '/values/sizes.php' ),
        ),
    )
),


'post_meta_options' => array(
    'type' => 'group',
    'heading' => __( 'Meta' ,  'flatsome-admin'),
    'options' => array(

    'show_date' => array(
        'type' => 'select',
        'heading' => '日期',
        'default' => 'badge',
        'options' => array(
            'badge' => '徽标',
            'text' => '文本',
            'false' => '隐藏',
        )
    ),
    'badge_style' => array(
        'type' => 'select',
        'heading' => '徽标样式',
        'default' => '',
        'conditions' => 'show_date == "badge"',
        'options' => array(
            '' => '默认',
            'outline' => '轮廓',
            'square' => '方形',
            'circle' => '圆形',
            'circle-inside' => '内圆',
        )
    ),
    'excerpt' => array(
        'type' => 'select',
        'heading' => '摘要',
        'default' => 'visible',
        'options' => array(
            'visible' => '可见',
            'fade' => '悬停淡入',
            'slide' => '悬停滑入',
            'reveal' => '悬停显示',
            'false' => '隐藏',
        )
    ),
   'excerpt_length' => array(
        'type' => 'slider',
        'heading' => '摘要长度',
        'default' => 15,
        'max' => 50,
        'min' => 5,
    ),
    'show_category' => array(
        'type' => 'select',
        'heading' => '分类',
        'default' => 'false',
        'options' => array(
            'label' => '标签',
            'text' => '文本',
            'false' => '隐藏',
        )
    ),
    'comments' => array(
        'type' => 'select',
        'heading' => '评论',
        'default' => 'visible',
        'options' => array(
            'visible' => '可见',
            'false' => '隐藏',
        )
    ),
    ),
));

$box_styles = require( __DIR__ . '/commons/box-styles.php' );
$options = array_merge($options, $box_styles);

add_ux_builder_shortcode( 'blog_posts', array(
    'name' => __( 'Blog posts' ,  'flatsome-admin'),
    'category' => __( 'Content' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'blog_posts' ),
    'scripts' => array(
        'flatsome-masonry-js' => get_template_directory_uri() .'/assets/libs/packery.pkgd.min.js',
    ),

    'presets' => array(
        array(
            'name' => __( 'Normal' ,  'flatsome-admin'),
            'content' => '[blog_posts style="normal" columns="3" columns__md="1" image_height="56.25%"]'
        ),
        array(
            'name' => __( 'Bounce' ,  'flatsome-admin'),
            'content' => '[blog_posts style="bounce" badge_style="square" image_height="75%"]'
        ),
        array(
            'name' => __( 'Push' ,  'flatsome-admin'),
            'content' => '[blog_posts style="push" columns="3" columns__md="1" badge_style="circle-inside" image_height="75%"]'
        ),
        array(
            'name' => __( 'Vertical' ,  'flatsome-admin'),
            'content' => '[blog_posts style="vertical" slider_nav_style="simple" slider_nav_position="outside" columns="2" columns__md="1" depth="2" image_height="89%" image_width="43"]'
        ),
        array(
            'name' => __( 'Overlay' ,  'flatsome-admin'),
            'content' => '[blog_posts style="overlay" depth="1" title_style="uppercase" show_date="text" image_height="144%" image_overlay="rgba(0, 0, 0, 0.17)" image_hover="zoom"]'
        ),
        array(
            'name' => __( 'Overlay - Grayscale' ),
            'content' => '[blog_posts style="overlay" depth="1" animate="fadeInLeft" title_style="uppercase" show_date="text" image_height="144%" image_overlay="rgba(0, 0, 0, 0.56)" image_hover="color" image_hover_alt="overlay-remove-50"]'
       ),
        array(
            'name' => __( 'Masonery' ,  'flatsome-admin'),
            'content' => '[blog_posts type="masonry" columns="3" depth="2" image_height="180px"]'
       ),
       array(
            'name' => __( 'Grid' ,  'flatsome-admin'),
            'content' => '[blog_posts style="shade" type="grid" columns="3" depth="1" posts="4" title_size="larger" title_style="uppercase" readmore="Read More" badge_style="circle-inside" image_height="180px"]'
       ),
       array(
            'name' => __( 'Full Slider' ,  'flatsome-admin'),
            'content' => '[blog_posts style="shade" type="slider-full" grid="2" slider_nav_style="circle" columns="1" title_size="larger" show_date="text" excerpt="false" show_category="label" comments="false" image_size="large" image_overlay="rgba(0, 0, 0, 0.09)" image_hover="overlay-remove" text_size="large" text_hover="bounce" text_padding="10% 0px 10% 0px"]'
        ),
),

    'options' => $options
) );
