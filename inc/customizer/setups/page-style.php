<?php
/**
 * Page Style
 * =========
 */
$section  = 'page_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'page_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

// Style
Kirki::add_field( 'infinity', array(
	'type'        => 'select',
	'setting'     => 'page_style_heading_style',
	'default'     => PAGE_STYLE_HEADING_STYLE,
	'section'     => $section,
	'priority'    => $priority++,
	'choices'     => array(
		'image'     => esc_html__( 'Image Background', 'infinity' ),
		'big-image' => esc_html__( 'Big Image Background', 'infinity' ),
		'bg_color'  => esc_html__( 'Single Color Background', 'infinity' ),
	),
));

// Enable paralalx effect
Kirki::add_field('infinity', array(
	'type'        => 'toggle',
	'setting'     => 'page_style_disable_parallax',
	'label'       => esc_html__('Parallax effect', 'infinity'),
	'description' => esc_html__('Turn on this option if you want to enable parallax effect for page heading', 'infinity'),
	'default'     => !PAGE_STYLE_DISABLE_PARALLAX,
	'section'     => $section,
	'priority'    => $priority++,
	'required'  => array(
		array(
			'setting'  => 'page_style_heading_style',
			'operator' => '!=',
			'value'    => 'bg_color',
		),
	)
));

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'page_style_heading_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => PAGE_STYLE_HEADING_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.big-title .entry-title',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PAGE_STYLE_HEADING_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'font-weight',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PAGE_STYLE_HEADING_LETTER_SPACING,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => - 1,
		'max'  => 1,
		'step' => .05,
	),
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'letter-spacing',
		'units'    => 'em',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'page_style_heading_font_color',
	'label'     => esc_html__( 'Font Color', 'kirki' ),
	'help'      => esc_html__( 'This is some extra help text.', 'kirki' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PAGE_STYLE_HEADING_FONT_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title .entry-title',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PAGE_STYLE_HEADING_FONT_SIZE,
	'choices'   => array(
		'min'  => 15,
		'max'  => 100,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );