<?php
/**
 * Footer Spacing
 * ============
 */
$section  = 'footer_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'footer_general_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => FOOTER_GENERAL_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer',
			'property' => 'padding',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'footer_general_margin',
	'label'     => esc_html__( 'Margin', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => FOOTER_GENERAL_MARGIN,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer',
			'property' => 'margin',
		),
	)
) );