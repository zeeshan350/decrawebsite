<?php
/**
 * Nav Spacing
 * ===========
 */
$section  = 'nav_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'infinity' ),
	'setting'   => 'nav_spacing_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_SPACING_MENU_TEXT_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '#site-navigation .menu > ul > li, #site-navigation .menu > li',
			'property' => 'padding',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'infinity' ),
	'setting'   => 'nav_spacing_sub_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_SPACING_SUB_MENU_TEXT_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '#site-navigation .sub-menu li, #site-navigation .children li',
			'property' => 'padding',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Home Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'infinity' ),
	'setting'   => 'nav_spacing_home_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_SPACING_HOME_MENU_TEXT_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '#subsite-navigation .menu > ul > li, #subsite-navigation .menu > li',
			'property' => 'padding',
		),
	)
) );


Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Home Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'infinity' ),
	'setting'   => 'nav_spacing_sub_home_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_SPACING_SUB_HOME_MENU_TEXT_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '#subsite-navigation .sub-menu li, #subsite-navigation .children li',
			'property' => 'padding',
		),
	)
) );



Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_top_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Top Right Home Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'infinity' ),
	'setting'   => 'nav_spacing_top_home_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_SPACING_TOP_HOME_MENU_TEXT_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '#subrightsite-navigation .menu > ul > li, #subrightsite-navigation .menu > li',
			'property' => 'padding',
		),
	)
) );


Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Top Right Home Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'infinity' ),
	'setting'   => 'nav_spacing_top_sub_home_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_SPACING_TOP_SUB_HOME_MENU_TEXT_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '#subrightsite-navigation .sub-menu li, #subrightsite-navigation .children li',
			'property' => 'padding',
		),
	)
) );
