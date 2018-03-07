<?php


// Contactform7
$forms = array('' => '-- 表单 --');
foreach(get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1)) as $cf7Form){
    $forms[$cf7Form->ID] = $cf7Form->post_title;
}

add_ux_builder_shortcode( 'contact-form-7', array(
    'name' => __( 'Form (CF7)' ,  'flatsome-admin'),
    'category' => __( 'Content' ,  'flatsome-admin'),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'forms' ),
    'allow_in' => array('text_box'),
    'options' => array(
        'id' => array(
            'type' => 'select',
            'heading' => '选择表单',
            'default' => '',
            'options' => $forms
        )
    )
) );
