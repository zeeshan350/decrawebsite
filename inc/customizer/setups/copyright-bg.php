<?php
/**
 * Copyright Background
 * ============
 */
$section  = 'copyright_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'copyright_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your footer', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => COPYRIGHT_BG_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.copyright',
			'property' => 'background-color',
		),
	)
) );