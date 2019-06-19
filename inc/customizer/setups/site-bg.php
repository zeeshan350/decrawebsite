<?php
/**
 * Site Background
 * =========
 */
$section  = 'background_image';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_BG_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => 'body.boxed',
			'property' => 'background-color',
		),
	)
) );