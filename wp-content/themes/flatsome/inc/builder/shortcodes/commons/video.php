<?php

return array(
        'type' => 'group',
        'heading' => __( 'Video', 'flatsome-admin'),
        'collapsed' => true,
        'options' => array(

            'youtube' => array(
                'type' => 'textfield',
                'heading' => 'YouTube',
                'description' => '在这里添加youtube ID. F.ex 9d8wWcJLnFI',
            ),

            'video_mp4' => array(
                'type' => 'textfield',
                'heading' => '视频MP4',
                'description' => '转化视频好工具: https://cloudconvert.org/',
            ),

            'video_ogg' => array(
                'type' => 'textfield',
                'heading' => '视频OGG ',

            ),

            'video_webm' => array(
                'type' => 'textfield',
                'heading' => '视频WEBM',
            ),

            'video_sound' => array(
                'type' => 'checkbox',
                'heading' => '声音',
                'default' => 'false',
            ),

            'video_sound' => array(
                'type' => 'select',
                'heading' => '声音',
                'default' => 'false',
                'options' => array(
                    'true' => '启用',
                    'false' => '禁用',
                )
            ),

            'video_loop' => array(
                'type' => 'select',
                'heading' => '循环',
                'default' => 'true',
                'options' => array(
                    'true' => '循环',
                    'false' => '不循环',
                )
            ),
        ),
);
