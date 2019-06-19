<?php
/**
 * Header Spacing
 * ============
 */
$section  = 'button_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'button_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => BUTTON_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '
				button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn',
			'property' => 'padding',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'button_margin',
	'label'     => esc_html__( 'Margin', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => BUTTON_MARGIN,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '
				button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn',
			'property' => 'margin',
		),
	)
) );