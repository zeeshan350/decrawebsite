<?php
/**
 * Top Area Background
 * ============
 */
$section  = 'top_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'top_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your top', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TOP_BG_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-top, .header01 .top-right-menu .sub-menu li',
			'property' => 'background-color',
		),
		array (
			'element'   => '.header02 .top-right-menu li:first-child:before',
			'property'  => 'border-left-color',
			'prefix'    => '@media (min-width: 62rem) {',
			'suffix'    => '}'
		)
	),
	'required'  => array(
		array(
			'setting'  => 'header_type',
			'operator' => '!=',
			'value'    => 'header04',
		),
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );