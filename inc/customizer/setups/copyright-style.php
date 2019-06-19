<?php
/**
 * Copyright Style
 * ============
 */
$section  = 'copyright_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'copyright_style_text_color',
	'label'     => esc_html__( 'Text Color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => COPYRIGHT_STYLE_TEXT_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.copyright',
		'property' => 'color',
	),
	'required'  => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'copyright_style_link_color',
	'label'       => esc_html__( 'Link Color', 'infinity' ),
	'description' => esc_html__( 'Link Color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => COPYRIGHT_STYLE_LINK_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.copyright a',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'copyright_style_link_color_hover',
	'description' => esc_html__( 'Link color on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => COPYRIGHT_STYLE_LINK_COLOR_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.copyright a:hover',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );