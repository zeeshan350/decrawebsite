<?php
/**
 * Button Background
 * ============
 */
$section  = 'button_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'button_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your button', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => BUTTON_BG_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '
				a.button, button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn
			',
			'property' => 'background-color',
		),
		array(
			'element'  => '.tp-caption.Renovation-Button',
			'property' => 'background-color',
			'units'    => '!important'
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'button_bg_color_hover',
	'label'     => esc_html__( 'Background color on hover', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your button', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'postMessage',
	'default'   => BUTTON_BG_COLOR_HOVER,
	'output'    => array(
		array(
			'element'  => '
				a.button:hover, button:hover, input[type="button"]:hover,
				input[type="reset"]:hover, input[type="submit"]:hover,
				.btn:hover, .thememove-btn:hover
			',
			'property' => 'background-color',
		),
		array(
			'element'  => '.tp-caption.Renovation-Button:hover',
			'property' => 'background-color',
			'units'    => '!important'
		),
	)
) );