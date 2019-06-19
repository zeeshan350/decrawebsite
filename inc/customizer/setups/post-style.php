<?php
/**
 * Post Style
 * =========
 */
$section  = 'post_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'post_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Title</div>',
) );


Kirki::add_field( 'infinity', array(
	'type'          => 'toggle',
	'setting'       => 'post_style_heading_enable',
	'label'         => esc_html__( 'Show heading title in single post', 'infinity' ),
	'description'   => esc_html__( 'Turn on this option if you want to show heading title in single post', 'infinity' ),
	'section'       => $section,
	'priority'      => $priority ++,
	'default'       => POST_STYLE_HEADING_ENABLE,
) );


Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'post_style_heading_text',
	'label'     => esc_html__( 'Text', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => POST_STYLE_HEADING_TEXT,
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

// Style
Kirki::add_field( 'infinity', array(
	'type'        => 'select',
	'setting'     => 'post_style_heading_style',
	'label'     => esc_html__( 'Style', 'infinity' ),
	'default'     => POST_STYLE_HEADING_STYLE,
	'section'     => $section,
	'priority'    => $priority++,
	'choices'     => array(
		'image'     => esc_html__( 'Image Background', 'infinity' ),
		'big-image'     => esc_html__( 'Big Image Background', 'infinity' ),
		'bg_color'  => esc_html__( 'Single Color Background', 'infinity' ),
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
));

// Enable paralalx effect
Kirki::add_field('infinity', array(
	'type'        => 'toggle',
	'setting'     => 'post_style_disable_parallax',
	'label'       => esc_html__('Parallax effect', 'infinity'),
	'description' => esc_html__('Turn on this option if you want to enable parallax effect for page heading', 'infinity'),
	'default'     => !POST_STYLE_DISABLE_PARALLAX,
	'section'     => $section,
	'priority'    => $priority++,
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_style',
			'operator' => '!=',
			'value'    => 'bg_color',
		),
	)
));

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'post_style_heading_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => POST_STYLE_HEADING_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'font-family',
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'post_style_heading_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => POST_STYLE_HEADING_FONT_SIZE,
	'choices'   => array(
		'min'  => 15,
		'max'  => 100,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'font-size',
		'units'    => 'px',
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'post_style_heading_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => POST_STYLE_HEADING_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'font-weight',
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'post_style_heading_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => POST_STYLE_HEADING_LETTER_SPACING,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => - 1,
		'max'  => 1,
		'step' => .05,
	),
	'output'    => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'letter-spacing',
		'units'    => 'em',
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'post_style_heading_font_color',
	'label'     => esc_html__( 'Font Color', 'kirki' ),
	'help'      => esc_html__( 'This is some extra help text.', 'kirki' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => POST_STYLE_HEADING_FONT_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title--single .entry-title',
			'property' => 'color',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );