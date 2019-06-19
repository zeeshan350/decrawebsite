<?php
/**
 * Site Style
 * =========
 */
$section  = 'site_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Body</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'site_style_body_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => SITE_STYLE_BODY_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		array(
			'element'  => '
				.eg-renovation-member-wrapper .esg-entry-content p,
				body, input, select, textarea
				',
			'property' => 'font-family',
		)
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_body_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_BODY_FONT_WEIGHT,
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => 'body',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_body_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_BODY_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'body',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_style_body_text',
	'label'     => esc_html__( 'Font Color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_BODY_TEXT,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => 'body',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Heading</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'site_style_heading_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => SITE_STYLE_HEADING_FONT_FAMILY,
	'transport' => 'postMessage',
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		array(
			'element'  => 'h1,h2,h3,h4,h5,h6',
			'property' => 'font-family',
		),
		array(
			'element'  => '.renovation .esg-filterbutton',
			'property' => 'font-family',
			'units' => '!important'
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_HEADING_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => 'h1,h2,h3,h4,h5,h6',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_HEADING_LETTER_SPACING,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => - 1,
		'max'  => 1,
		'step' => .05,
	),
	'output'    => array(
		'element'  => 'h1,h2,h3,h4,h5,h6',
		'property' => 'letter-spacing',
		'units'    => 'em',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_style_heading_font_color',
	'label'     => esc_html__( 'Font Color', 'kirki' ),
	'help'      => esc_html__( 'This is some extra help text.', 'kirki' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_HEADING_FONT_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => 'h1,h2,h3,h4,h5,h6',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_style_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h1_font_size',
	'label'     => esc_html__( 'H1 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_HEADING_H1_FONT_SIZE,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 15,
		'max'  => 100,
		'step' => 1,
	),
	'output'    => array(
		'element'  => 'h1',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h2_font_size',
	'label'     => esc_html__( 'H2 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_HEADING_H2_FONT_SIZE,
	'choices'   => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h2',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h3_font_size',
	'label'     => esc_html__( 'H3 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_HEADING_H3_FONT_SIZE,
	'choices'   => array(
		'min'  => 10,
		'max'  => 80,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h3',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h4_font_size',
	'label'     => esc_html__( 'H4 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SITE_STYLE_HEADING_H4_FONT_SIZE,
	'choices'   => array(
		'min'  => 10,
		'max'  => 70,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h4',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );