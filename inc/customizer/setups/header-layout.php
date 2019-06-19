<?php
/**
 * Header Layout
 * ==============
 */
$section  = 'header_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'select',
	'setting'     => 'header_type',
	'label'       => esc_html__( 'Header Type', 'infinity' ),
	'description' => esc_html__( 'Choose the header type you want', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => HEADER_TYPE,
	'choices'     => array(
		'header01' => 'Type 01',
		'header02' => 'Type 02',
		'header03' => 'Type 03',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'header_layout_search_enable',
	'label'       => esc_html__( 'Search box', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to enable search box on your site', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => HEADER_LAYOUT_SEARCH_ENABLE,
) );

if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'infinity', array(
		'type'        => 'toggle',
		'setting'     => 'header_layout_mini_cart_enable',
		'label'       => esc_html__( 'Mini Cart', 'infinity' ),
		'description' => esc_html__( 'Turn on this option if you want to enable mini cart for header', 'infinity' ),
		'section'     => $section,
		'priority'    => $priority ++,
		'default'     => HEADER_LAYOUT_MINI_CART_ENABLE,
	) );
}