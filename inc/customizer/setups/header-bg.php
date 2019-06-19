<?php
/**
 * Header Background
 * ============
 */
$section  = 'header_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'header_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Header</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'header_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => HEADER_BG_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-header',
			'property' => 'background-color',
		),
	)
) );

if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'infinity', array(
		'type'     => 'custom',
		'setting'  => 'header_bg_group_title_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<div class="group_title">Mini Cart</div>',
		'required' => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'infinity', array(
		'type'      => 'color-alpha',
		'setting'   => 'header_bg_minicart_number_bg',
		'label'     => esc_html__( 'Number Background Color', 'infinity' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => HEADER_BG_MINICART_NUMBER_BG,
		'transport' => 'postMessage',
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		),
		'output'    => array(
			array(
				'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:after',
				'property' => 'background-color',
			),
		)
	) );
}