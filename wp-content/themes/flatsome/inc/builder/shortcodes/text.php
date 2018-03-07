<?php

add_ux_builder_shortcode( 'text', array(
    'type' => 'container',
    'name' => __( 'Text',  'flatsome-admin'),
    'category' => __( 'Content' , 'flatsome-admin'),
    'compile' => false,
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'text' ),
    'template_shortcode' => "{content}\n",
    'template' => flatsome_ux_builder_template( 'text.html' ),
    'directives' => array( 'ux-text-editor' ),
    'priority' => 1,

    'presets' => array(
        array(
            'name' => __( 'Paragraph', 'flatsome-admin' ),
            'content' => '[text]<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>[/text]'
        ),
        array(
            'name' => __( 'Lead Paragraph',  'flatsome-admin'),
            'content' => '[text]<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>[/text]'
        ),
        array(
            'name' => __( 'Paragraph with Headline', 'flatsome-admin' ),
            'content' => '[text]<h3>This is a simple headline</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>[/text]'
        ),
        array(
            'name' => __( 'Paragraph with Sub Headline', 'flatsome-admin' ),
            'content' => '[text]<h5 class="uppercase">This is a simple headline</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>[/text]'
        ),
        array(
            'name' => __( 'Headline', 'flatsome-admin' ),
            'content' => '[text]<h2>This is a simple headline</h2>[/text]'
        ),
        array(
            'name' => __( 'Headline Uppercase' , 'flatsome-admin'),
            'content' => '[text]<h2 class="uppercase">This is a simple headline</h2>[/text]'
        ),
        array(
            'name' => __( 'Headline with Subtitle',  'flatsome-admin'),
            'content' => '[text]<h2 class="uppercase">This is a simple headline</h2><h3 class="thin-font">This is a sub title</h3>[/text]'
        ),
        array(
            'name' => __( 'Image Left', 'flatsome-admin' ),
            'content' => '[row][col span="6" span__sm="12"][ux_image image_size="medium"][/col][col span="6" span__sm="12"][text]<h3>This is a simple headline</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>[/text][/col][/row]'
        ),
       array(
            'name' => __( 'Image Right',  'flatsome-admin'),
            'content' => '[row][col span="6" span__sm="12"][text]<h3>This is a simple headline</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>[/text][/col][col span="6" span__sm="12"][ux_image image_size="medium"][/col][/row]'
        ),
        array(
            'name' => __( 'Quote',  'flatsome-admin'),
            'content' => '[text]<blockquote>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Consectetuer adipiscing elit, sed diam nonummy nibh euismod</blockquote>[/text]'
        ),
    ),

    'options' => array(
      '$content' => array(
        'type' => 'text-editor',
        'full_width' => true,
      )
    )
) );
