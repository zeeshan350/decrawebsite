<?php
/**
 * Site Logo
 * =========
 */
$section  = 'site_logo';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'image',
	'setting'     => 'site_logo',
	'label'       => esc_html__( 'Logo', 'infinity' ),
	'description' => esc_html__( 'Choose a default logo image to display', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => SITE_LOGO
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_logo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Spacing</div>',
) );


Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Logo Padding', 'infinity' ),
	'setting'   => 'site_logo_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_LOGO_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-branding',
			'property' => 'padding',
			'prefix'   => '@media ( min-width: 62rem ) {',
			'suffix'   => '}',
		),
	)
) );
