<?php
/**
 * Top Area Layout
 * ==============
 */
$section  = 'top_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'top_layout_enable',
	'label'       => esc_html__( 'Top area', 'infinity' ),
	'description' => esc_html__( 'Enabling this option will display top area', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TOP_LAYOUT_ENABLE,
) );