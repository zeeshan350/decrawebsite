<?php
/**
 * Post Background
 * =========
 */
$section  = 'post_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'post_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'post_heading_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => POST_HEADING_BG_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title--single',
			'property' => 'background-color',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_style',
			'operator' => '==',
			'value'    => 'bg_color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'color-alpha',
	'setting'  => 'post_overlay_bg_color',
	'label'    => esc_html__( 'Overlay color', 'infinity' ),
	'help'     => esc_html__( 'Setup overlay color for your header', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => POST_OVERLAY_BG_COLOR,
	'output'   => array(
		array(
			'element'  => '.big-title--single.image-bg:after',
			'property' => 'background-color',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_style',
			'operator' => '!=',
			'value'    => 'bg_color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'image',
	'setting'   => 'post_heading_bg_image',
	'label'     => esc_html__( 'Background Image', 'infinity' ),
	'help'      => esc_html__( 'Default background image for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => POST_HEADING_BG_IMAGE,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title--single.image-bg',
			'property' => 'background-image',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'post_style_heading_style',
			'operator' => '!=',
			'value'    => 'bg_color',
		),
	)
) );