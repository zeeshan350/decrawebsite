<?php
/**
 * Page Background
 * =========
 */
$section  = 'page_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'page_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'page_heading_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PAGE_HEADING_BG_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title',
			'property' => 'background-color',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'page_style_heading_style',
			'operator' => '==',
			'value'    => 'bg_color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'color-alpha',
	'setting'  => 'page_overlay_bg_color',
	'label'    => esc_html__( 'Overlay color', 'infinity' ),
	'help'     => esc_html__( 'Setup overlay color for your header', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => PAGE_OVERLAY_BG_COLOR,
	'output'   => array(
		array(
			'element'  => '.big-title.image-bg:after',
			'property' => 'background-color',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'page_style_heading_style',
			'operator' => '!=',
			'value'    => 'bg_color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'image',
	'setting'   => 'page_heading_bg_image',
	'label'     => esc_html__( 'Background Image', 'infinity' ),
	'help'      => esc_html__( 'Default background image for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PAGE_HEADING_BG_IMAGE,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title.image-bg',
			'property' => 'background-image',
		),
	),
	'required'  => array(
		array(
			'setting'  => 'page_style_heading_style',
			'operator' => '!=',
			'value'    => 'bg_color',
		),
	)
) );