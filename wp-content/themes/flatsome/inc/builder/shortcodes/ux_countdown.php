<?php

// Add to builder
add_ux_builder_shortcode( 'ux_countdown', array(
    'name' => __( 'Countdown' , 'flatsome-admin'),
    'category' => __( 'Content' , 'flatsome-admin'),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'countdown' ),
    'allow_in' => array('text_box'),
    'scripts' => array(
        'flatsome-countdown-script' => get_template_directory_uri() . '/inc/shortcodes/ux_countdown/countdown-script-min.js',
        'flatsome-countdown-theme-js' => get_template_directory_uri() . '/inc/shortcodes/ux_countdown/ux-countdown.js'
    ),
    'styles' => array(
        'flatsome-countdown-style' => get_template_directory_uri() . '/inc/shortcodes/ux_countdown/ux-countdown.css',
    ),
    'options' => array(
        'style' => array(
            "type" => "select",
            "heading" => __('Style', 'flatsome-admin'),
            "default" => 'clock',
            "options" => array(
              'clock' => '钟',
              'text' => '文本',
            )
        ),
	   'size' => array(
            'type' => 'slider',
            'heading' => __('Size', 'flatsome-admin'),
            'responsive' => true,
            'default' => '300',
            'unit' => '%',
            'responsive' => true,
            'max' => '400',
            'min' => '0',
            'on_change' => array(
                'selector' => '.ux-timer, .ux-timer-text',
                'style' => 'font-size: {{ value }}%'
            ),
        ),
        'color' => array(
                'type' => 'radio-buttons',
                'heading' => __( 'Color', 'flatsome-admin' ),
                'default' => 'dark',
                'options' => array(
                    'dark' => array( 'title' => 'Light' ),
                    'light' => array( 'title' => 'Dark' ),
                ),
        ),
        'bg_color' => array(
          'type' => 'colorpicker',
          'heading' => __('Background', 'flatsome-admin'),
          'responsive' => true,
          'default' => '',
          'alpha' => true,
          'format' => 'rgb',
          'position' => 'bottom right',
          'helpers' => require( __DIR__ . '/helpers/colors.php' ),
        ),
        'year' => array(
            "type" => "textfield",
            "heading" => "年",
            "default" => "2016"
        ),
        'month' => array(
            "type" => "textfield",
            "heading" => "月",
            "default" => "12"
        ),
        'day' => array(
            "type" => "textfield",
            "heading" => "日",
            "default" => "31"
        ),
        'time' => array(
            "type" => "textfield",
            "heading" => "时间",
            "default" => "18:00"
        ),
        'translations' => array(
            'type' => 'group',
            'heading' => '翻译',
            'options' => array(
                't_week' => array( "type" => "textfield", "heading" => "周", "default" => "week"),
                't_day' => array( "type" => "textfield", "heading" => "天", "default" => "day"),
                't_hour' => array( "type" => "textfield", "heading" => "小时", "default" => "hour"),
                't_min' => array( "type" => "textfield", "heading" => "分", "default" => "min"),
                't_sec' => array( "type" => "textfield", "heading" => "秒", "default" => "sec"),
            )
        ),
        'translations_p' => array(
            'type' => 'group',
            'heading' => 'Texts Plural',
            'options' => array(
                't_plural' => array( "type" => "textfield", "heading" => "复数默认", "default" => ""),
                't_week_p' => array( "type" => "textfield", "heading" => "周复数"),
                't_day_p' => array( "type" => "textfield", "heading" => "天复数"),
                't_hour_p' => array( "type" => "textfield", "heading" => "时复数"),
                't_min_p' => array( "type" => "textfield", "heading" => "分复数"),
                't_sec_p' => array( "type" => "textfield", "heading" => "秒复数"),
            )
        )
     )
) );
