<?php
/**
 * Top Area Border
 * ============
 */
$section  = 'top_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'top_border_width',
	'label'     => esc_html__( 'Border width', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TOP_BORDER_WIDTH,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-top',
			'property' => 'border-width',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'top_border_style',
	'label'     => esc_html__( 'Border style', 'kirki' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TOP_BORDER_STYLE,
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'infinity' ),
		'dashed' => esc_html__( 'Dashed', 'infinity' ),
		'dotted' => esc_html__( 'Dotted', 'infinity' ),
		'double' => esc_html__( 'Double', 'infinity' ),
	),
	'output'    => array(
		array(
			'element'  => '.site-top',
			'property' => 'border-style',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'top_border_color',
	'label'     => esc_html__( 'Border color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TOP_BORDER_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-top',
			'property' => 'border-color',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );