<?php

return array(
	array(
		'title' => '黑色',
		'value' => 'rgb(0,0,0)',
	),
	array(
		'title' => '白色',
		'value' => 'rgb(255,255,255)',
	),
	array(
		'title' => '主色',
		'value' => get_theme_mod( 'color_primary', flatsome_default_color( 'color_primary' ) ),
	),
	array(
		'title' => '成功',
		'value' => get_theme_mod( 'color_success', flatsome_default_color( 'color_success' ) ),
	),
);
