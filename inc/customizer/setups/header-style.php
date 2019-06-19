<?php
/**
 * Header Style
 * ============
 */
$section  = 'header_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'header_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Header</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'header_style_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => HEADER_STYLE_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.site-header',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'header_style_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => HEADER_STYLE_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'header_style_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => HEADER_STYLE_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'header_style_font_color',
	'label'     => esc_html__( 'Font Color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => HEADER_STYLE_FONT_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header, .extra-info h3',
		'property' => 'color',
		'prefix'   => '@media ( min-width: 75rem ) {',
		'suffix'   => '}',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'header_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Search</div>',
	'required' => array(
		array(
			'setting'  => 'header_layout_search_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'header_style_search_text_color',
	'label'     => esc_html__( 'Search Icon Color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => HEADER_STYLE_SEARCH_TEXT_COLOR,
	'transport' => 'postMessage',
	'required'  => array(
		array(
			'setting'  => 'header_layout_search_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
	'output'    => array(
		'element'  => '.search-box i',
		'property' => 'color',
	)
) );

if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'infinity', array(
		'type'     => 'custom',
		'setting'  => 'header_style_group_title_' . $priority ++,
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
		'type'      => 'color',
		'setting'   => 'header_style_minicart_icon_color',
		'label'     => esc_html__( 'Cart Icon Color', 'infinity' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => HEADER_STYLE_MINICART_ICON_COLOR,
		'transport' => 'postMessage',
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		),
		'output'    => array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:before',
			'property' => 'color',
		)
	) );

	Kirki::add_field( 'infinity', array(
		'type'      => 'color',
		'setting'   => 'header_style_minicart_text_color',
		'label'     => esc_html__( 'Cart Text Color', 'infinity' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => HEADER_STYLE_MINICART_TEXT_COLOR,
		'transport' => 'postMessage',
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		),
		'output'    => array(
			'element'  => '.mini-cart',
			'property' => 'color',
		)
	) );

	Kirki::add_field( 'infinity', array(
		'type'      => 'color',
		'setting'   => 'header_style_minicart_number_color',
		'label'     => esc_html__( 'Cart Number Color', 'infinity' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => HEADER_STYLE_MINICART_NUMBER_COLOR,
		'transport' => 'postMessage',
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		),
		'output'    => array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:after',
			'property' => 'color',
		)
	) );
}


