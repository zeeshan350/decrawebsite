<?php
/**
 * Copyright Spacing
 * ============
 */
$section  = 'copyright_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'copyright_general_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => COPYRIGHT_GENERAL_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.copyright',
			'property' => 'padding',
		),
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'copyright_general_margin',
	'label'     => esc_html__( 'Margin', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => COPYRIGHT_GENERAL_MARGIN,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.copyright',
			'property' => 'margin',
		),
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );