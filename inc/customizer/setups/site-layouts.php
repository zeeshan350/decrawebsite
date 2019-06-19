<?php
/**
 * Site Layout
 * ================
 */
$section  = 'site_layouts';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'site_layout',
	'label'       => esc_html__( 'Site layout', 'infinity' ),
	'description' => esc_html__( 'Choose the site layout you want', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => SITE_LAYOUT,
	'choices'     => array(
		'full-width'      => THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'archive_layout',
	'label'       => esc_html__( 'Archive layout', 'infinity' ),
	'description' => esc_html__( 'Choose the archive layout you want', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => ARCHIVE_LAYOUT,
	'choices'     => array(
		'full-width'      => THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'search_layout',
	'label'       => esc_html__( 'Search layout', 'infinity' ),
	'description' => esc_html__( 'Choose the search layout you want', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => SEARCH_LAYOUT,
	'choices'     => array(
		'full-width'      => THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );