<?php
/**
 * Header Spacing
 * ============
 */
$section  = 'header_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'header_spacing_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => HEADER_SPACING_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-header',
			'property' => 'padding',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'header_spacing_margin',
	'label'     => esc_html__( 'Margin', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => HEADER_SPACING_MARGIN,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-header',
			'property' => 'margin',
		),
	)
) );