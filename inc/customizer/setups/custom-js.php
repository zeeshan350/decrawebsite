<?php
/**
 * Custom JS
 * ===================
 */
$section  = 'custom_js';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'toggle',
	'settings' => 'custom_js_enable',
	'label'    => esc_html__( 'Enable custom JS', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 1,
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'textarea',
	'settings' => 'custom_js',
	'label'    => esc_html__( 'Custom JS', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '',
	'required' => array(
		array(
			'setting'  => 'custom_js_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );