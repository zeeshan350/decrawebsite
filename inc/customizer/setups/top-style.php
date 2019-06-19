<?php
/**
 * Top Area Style
 * ============
 */
$section  = 'top_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'top_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Link</div>',
	'required' => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'top_style_link_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => TOP_STYLE_LINK_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.site-top a',
		'property' => 'font-family',
	),
	'required' => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'top_style_link_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TOP_STYLE_LINK_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-top a',
		'property' => 'font-size',
		'units'    => 'px',
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'top_style_link_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TOP_STYLE_LINK_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.site-top a',
		'property' => 'font-weight',
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'top_style_link_font_color',
	'label'       => esc_html__( 'Link Color', 'infinity' ),
	'description' => esc_html__( 'Link Color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TOP_STYLE_LINK_FONT_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.site-top a, .header03 .site-top',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'top_style_link_font_color_hover',
	'description' => esc_html__( 'Link color on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TOP_STYLE_LINK_FONT_COLOR_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.site-top a:hover',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );