<?php
/**
 * Button Border
 * ============
 */
$section  = 'button_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'button_border_width',
	'label'     => esc_html__( 'Border width', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => BUTTON_BORDER_WIDTH,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '
				button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn',
			'property' => 'border-width',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'button_border_style',
	'label'     => esc_html__( 'Border style', 'kirki' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => BUTTON_BORDER_STYLE,
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'infinity' ),
		'dashed' => esc_html__( 'Dashed', 'infinity' ),
		'dotted' => esc_html__( 'Dotted', 'infinity' ),
		'double' => esc_html__( 'Double', 'infinity' ),
	),
	'output'    => array(
		array(
			'element'  => '
				a.button, button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn',
			'property' => 'border-style',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_border_color',
	'label'       => esc_html__( 'Border color', 'infinity' ),
	'description' => esc_html__( 'Border color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => BUTTON_BORDER_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				a.button, button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn',
			'property' => 'border-color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_border_color_hover',
	'description' => esc_html__( 'Border color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => BUTTON_BORDER_COLOR_HOVER,
	'transport' => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				a.button:hover, button:hover, input[type="button"]:hover,
				input[type="reset"]:hover, input[type="submit"]:hover,
				.btn:hover, .thememove-btn:hover',
			'property' => 'border-color',
		),
	)
) );