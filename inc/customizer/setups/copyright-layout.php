<?php
/**
 * Copyright Layout
 * ============
 */
$section  = 'copyright_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'copyright_layout_enable',
	'label'       => esc_html__( 'Copyright', 'infinity' ),
	'description' => esc_html__( 'Enabling this option will display copyright area', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => COPYRIGHT_LAYOUT_ENABLE,
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'textarea',
	'setting'     => 'copyright_layout_text',
	'label'       => esc_html__( 'Left Text', 'infinity' ),
	'description' => esc_html__( 'Entry the text for left block', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => COPYRIGHT_LAYOUT_TEXT,
	'transport'   => 'postMessage',
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );
