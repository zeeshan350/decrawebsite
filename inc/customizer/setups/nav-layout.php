<?php
/**
 * Nav General
 * ================
 */
$section  = 'nav';
$priority = 50;

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'nav_sticky_enable',
	'label'       => esc_html__( 'Sticky Menu', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to enable sticky header on your site', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STICKY_ENABLE,
) );