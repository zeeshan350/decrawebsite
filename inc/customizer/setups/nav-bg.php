<?php
/**
 * Nav Background
 * ================
 */
$section  = 'nav_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'nav_bg_menu_background',
	'label'     => esc_html__( 'Main Background', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_BG_MENU_BACKGROUND,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.main-navigation,
				.header02 #site-navigation .menu,
				.header02 #site-navigation .primary-menu:before',
			'property' => 'background-color',
		)
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'infinity' ),
	'description' => esc_html__( 'Link background', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_MENU_TEXT_BG,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				#site-navigation .menu > ul > li,
				#site-navigation .menu > li',
			'property' => 'background-color',
		),
		array(
			'element' => '
				.header02 #site-navigation .menu:before,
				.header02 #site-navigation .menu > ul > li:before,
				.header02 #site-navigation .menu > li:before
			',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
		)
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_menu_text_bg_hover',
	'description' => esc_html__( 'Link background on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_MENU_TEXT_BG_HOVER,
	'output'      => array(
		array(
			'element'  => '
				#site-navigation .menu > ul > li.current-menu-item,
				#site-navigation .menu > li.current-menu-item,
				#site-navigation .menu > ul > li:hover,
				#site-navigation .menu > li:hover',
			'property' => 'background-color',
		),
		array(
			'element' => '
				.header02 #site-navigation .menu > ul > li.current-menu-item:before,
				.header02 #site-navigation .menu > li.current-menu-item:before,
				.header02 #site-navigation .menu > ul > li:hover:before,
				.header02 #site-navigation .menu > li:hover:before
			',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
		)
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_sub_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'infinity' ),
	'description' => esc_html__( 'Link background', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_SUB_MENU_TEXT_BG,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu li, #site-navigation .children li',
			'property' => 'background-color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_sub_menu_text_bg_hover',
	'description' => esc_html__( 'Link background on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_SUB_MENU_TEXT_BG_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu li:hover, #site-navigation .children li:hover',
			'property' => 'background-color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Mobile Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_bg_mobile_menu_bg',
	'description' => esc_html__( 'Mobile menu background', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_MOBILE_MENU_BG,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.snap-drawers',
			'property' => 'background-color',
			'prefix'   => '@media ( max-width: 74.9375rem ) {',
			'suffix'   => '}',
		),
	)
) );


Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Home Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'nav_bg_home_menu_background',
	'label'     => esc_html__( 'Main Background', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_BG_HOME_MENU_BACKGROUND,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.home-navigation,
				.header02 #subsite-navigation .menu,
				.header02 #subsite-navigation .primary-menu:before',
			'property' => 'background-color',
		)
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_home_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'infinity' ),
	'description' => esc_html__( 'Link background', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_HOME_MENU_TEXT_BG,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				#subsite-navigation .menu > ul > li,
				#subsite-navigation .menu > li',
				'property' => 'background-color',
		),
		array(
			'element' => '
				.header02 #subsite-navigation .menu:before,
				.header02 #subsite-navigation .menu > ul > li:before,
				.header02 #subsite-navigation .menu > li:before
			',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
		)
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_home_menu_text_bg_hover',
	'description' => esc_html__( 'Link background on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_HOME_MENU_TEXT_BG_HOVER,
	'output'      => array(
		array(
			'element'  => '
				#subsite-navigation .menu > ul > li.current-menu-item,
				#subsite-navigation .menu > li.current-menu-item,
				#subsite-navigation .menu > ul > li:hover,
				#subsite-navigation .menu > li:hover',
				'property' => 'background-color',
		),
		array(
			'element' => '
				.header02 #subsite-navigation .menu > ul > li.current-menu-item:before,
				.header02 #subsite-navigation .menu > li.current-menu-item:before,
				.header02 #subsite-navigation .menu > ul > li:hover:before,
				.header02 #subsite-navigation .menu > li:hover:before
			',
			'property' => ( ! is_rtl() ? 'border-left-color' : 'border-right-color' ),
		)
	)
) );


Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Home Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_sub_home_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'infinity' ),
	'description' => esc_html__( 'Link background', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_SUB_HOME_MENU_TEXT_BG,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#subsite-navigation .sub-menu li, #subsite-navigation .children li',
			'property' => 'background-color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_sub_home_menu_text_bg_hover',
	'description' => esc_html__( 'Link background on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_BG_SUB_HOME_MENU_TEXT_BG_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#subsite-navigation .sub-menu li:hover, #subsite-navigation .children li:hover',
			'property' => 'background-color',
		),
	)
) );