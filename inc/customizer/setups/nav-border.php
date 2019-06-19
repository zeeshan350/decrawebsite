<?php
/**
 * Nav Border
 * ================
 */
$section  = 'nav_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_border_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Boder width', 'infinity' ),
	'setting'   => 'nav_border_menu_text_border_with',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_BORDER_MENU_TEXT_BORDER_WITH,
	'transport' => 'postMessage',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'nav_border_style',
	'label'     => esc_html__( 'Border style', 'kirki' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_BORDER_STYLE,
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'infinity' ),
		'dashed' => esc_html__( 'Dashed', 'infinity' ),
		'dotted' => esc_html__( 'Dotted', 'infinity' ),
		'double' => esc_html__( 'Double', 'infinity' ),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_border_menu_text_border_color',
	'label'       => esc_html__( 'Color', 'infinity' ),
	'description' => esc_html__( 'Border color', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BORDER_MENU_TEXT_BORDER_COLOR,
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_border_menu_text_border_color_hover',
	'description' => esc_html__( 'Border color on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BORDER_MENU_TEXT_BORDER_COLOR_HOVER,
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_border_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Border width', 'infinity' ),
	'setting'   => 'nav_border_sub_menu_text_border_with',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_BORDER_SUB_MENU_TEXT_BORDER_WITH,
	'transport' => 'postMessage',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'nav_border_sub_menu_style',
	'label'     => esc_html__( 'Border style', 'kirki' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_BORDER_SUB_MENU_STYLE,
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'infinity' ),
		'dashed' => esc_html__( 'Dashed', 'infinity' ),
		'dotted' => esc_html__( 'Dotted', 'infinity' ),
		'double' => esc_html__( 'Double', 'infinity' ),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_menu_text_border_color',
	'label'       => esc_html__( 'Color', 'infinity' ),
	'description' => esc_html__( 'Border color', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_SUB_MENU_TEXT_BORDER_COLOR,
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_menu_text_border_color_hover',
	'description' => esc_html__( 'Border color on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_SUB_MENU_TEXT_BORDER_COLOR_HOVER,
) );