<?php
/**
 * Footer Background
 * ============
 */
$section  = 'footer_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'image',
	'setting'   => 'footer_bg_image',
	'label'     => esc_html__( 'Background image', 'infinity' ),
	'description' => __('Choose a background image for your footer', 'thememove'),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => FOOTER_BG_IMAGE,
	'output'    => array(
		array(
			'element'  => '.site-footer',
			'property' => 'background-image',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'footer_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your footer', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => FOOTER_BG_COLOR,
	'output'    => array(
		array(
			'element'  => '.site-footer:before',
			'property' => 'background-color',
		),
	),
) );