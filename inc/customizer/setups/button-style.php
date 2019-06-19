<?php
/**
 * Button Style
 * ============
 */
$section  = 'button_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'button_style_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => BUTTON_STYLE_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '
				.woocommerce a.button.alt,
				.woocommerce button.button.alt,
				.woocommerce input.button.alt,
				.woocommerce #respond input#submit.alt,
				.woocommerce a.button,
				.woocommerce button.button,
				.woocommerce input.button,
				.woocommerce #respond input#submit,
				a.button, button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'button_style_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => BUTTON_STYLE_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '
				.woocommerce a.button.alt,
				.woocommerce button.button.alt,
				.woocommerce input.button.alt,
				.woocommerce #respond input#submit.alt,
				.woocommerce a.button,
				.woocommerce button.button,
				.woocommerce input.button,
				.woocommerce #respond input#submit,
				a.button, button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'button_style_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => BUTTON_STYLE_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '
				.woocommerce a.button.alt,
				.woocommerce button.button.alt,
				.woocommerce input.button.alt,
				.woocommerce #respond input#submit.alt,
				.woocommerce a.button,
				.woocommerce button.button,
				.woocommerce input.button,
				.woocommerce #respond input#submit,
				a.button, button, input[type="button"],
				input[type="reset"], input[type="submit"],
				.btn, .thememove-btn',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_style_link_color',
	'label'       => esc_html__( 'Link Color', 'infinity' ),
	'description' => esc_html__( 'Link Color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => BUTTON_STYLE_LINK_COLOR,
	'transport' => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				button, input[type="button"],
				input[type="reset"], input[type="submit"],
				a.btn, a.thememove-btn',
			'property' => 'color',
		),
		array(
			'element'  => '.tp-caption.Renovation-Button > a',
			'property' => 'color',
			'units'    => '!important'
		)
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_style_link_color_hover',
	'description' => esc_html__( 'Link Color on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => BUTTON_STYLE_LINK_COLOR_HOVER,
	'transport' => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				button:hover, input[type="button"]:hover,
				input[type="reset"]:hover, input[type="submit"]:hover,
				a.btn:hover, a.thememove-btn:hover',
			'property' => 'color',
		),
		array(
			'element'  => '.tp-caption.Renovation-Button:hover > a, .tp-caption.Renovation-Button > a:hover',
			'property' => 'color',
			'units'    => '!important'
		)
	)
) );