<?php
/**
 * Top Area Spacing
 * ============
 */
$section  = 'top_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'top_general_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TOP_GENERAL_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '
				.header01 .site-top,
				.header02 .site-top .top-right-menu li,
				.header03 .site-top ul li',
			'property' => 'padding',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'top_general_margin',
	'label'     => esc_html__( 'Margin', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TOP_GENERAL_MARGIN,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-top',
			'property' => 'margin',
		),
	)
) );