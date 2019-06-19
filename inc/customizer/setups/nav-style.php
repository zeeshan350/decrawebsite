<?php
/**
 * Nav Color
 * ================
 */
$section  = 'nav_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_typo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Mobile Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_mobile_menu_link_color',
	'label'       => esc_html__( 'Button color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_MOBILE_MENU_LINK_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#open-left',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_typo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'nav_typo_menu_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => NAV_TYPO_MENU_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'transport'   => 'postMessage',
	'output'   => array(
		'element'  => '#site-navigation',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_menu_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_MENU_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '#site-navigation',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_menu_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_MENU_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .menu ul li > a, #site-navigation .menu li > a',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_menu_text',
	'label'       => esc_html__( 'Link color', 'infinity' ),
	'description' => esc_html__( 'Link color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_MENU_TEXT,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#site-navigation .menu > ul > li > a, #site-navigation .menu > li > a',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_menu_text_hover',
	'description' => esc_html__( 'Link color hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_MENU_TEXT_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				#site-navigation .menu > ul > li:hover > a,
				#site-navigation .menu > ul > li.current_page_item > a,
				#site-navigation .menu > li.current-menu-item > a,
				#site-navigation .menu > li:hover > a',
			'property' => 'color',
		)
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_typo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'nav_typo_sub_menu_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => NAV_TYPO_SUB_MENU_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '#site-navigation .sub-menu,#site-navigation .children',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_sub_menu_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_SUB_MENU_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '#site-navigation .sub-menu li a, #site-navigation .children li a',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_sub_menu_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_SUB_MENU_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .sub-menu li a, #site-navigation .children li a',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_menu_text',
	'label'       => esc_html__( 'Link color', 'infinity' ),
	'description' => esc_html__( 'Link color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_SUB_MENU_TEXT,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu li a, #site-navigation .children li a',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_menu_text_hover',
	'description' => esc_html__( 'Link color on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_SUB_MENU_TEXT_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu li:hover > a, #site-navigation .children li:hover > a',
			'property' => 'color',
		),
	)
) );


Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'home_typo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Home Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'nav_typo_homemenu_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => NAV_TYPO_HOMEMENU_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'transport'   => 'postMessage',
	'output'   => array(
		'element'  => '#subsite-navigation',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_homemenu_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_HOMEMENU_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '#subsite-navigation',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_homemenu_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_HOMEMENU_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#subsite-navigation .menu ul li > a, #subsite-navigation .menu li > a',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_homemenu_text',
	'label'       => esc_html__( 'Link color', 'infinity' ),
	'description' => esc_html__( 'Link color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_HOMEMENU_TEXT,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#subsite-navigation .menu > ul > li > a, #subsite-navigation .menu > li > a',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_homemenu_text_hover',
	'description' => esc_html__( 'Link color hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_HOMEMENU_TEXT_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				#subsite-navigation .menu > ul > li:hover > a,
				#subsite-navigation .menu > ul > li.current_page_item > a,
				#subsite-navigation .menu > li.current-menu-item > a,
				#subsite-navigation .menu > li:hover > a',
			'property' => 'color',
		)
	)
) );


Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_typo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Sub Home Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'nav_typo_sub_home_menu_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => NAV_TYPO_SUB_HOME_MENU_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '#subsite-navigation .sub-menu,#subsite-navigation .children',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_sub_home_menu_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_SUB_HOME_MENU_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '#subsite-navigation .sub-menu li a, #subsite-navigation .children li a',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_sub_home_menu_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_SUB_HOME_MENU_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#subsite-navigation .sub-menu li a, #subsite-navigation .children li a',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_home_menu_text',
	'label'       => esc_html__( 'Link color', 'infinity' ),
	'description' => esc_html__( 'Link color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_SUB_HOME_MENU_TEXT,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#subsite-navigation .sub-menu li a, #subsite-navigation .children li a',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_home_menu_text_hover',
	'description' => esc_html__( 'Link color on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_SUB_HOME_MENU_TEXT_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#subsite-navigation .sub-menu li:hover > a, #subsite-navigation .children li:hover > a',
			'property' => 'color',
		),
	)
) );



Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'home_typo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Top Right Home Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'nav_typo_top_homemenu_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => NAV_TYPO_TOP_HOMEMENU_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'transport'   => 'postMessage',
	'output'   => array(
		'element'  => '#subrightsite-navigation',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_top_homemenu_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_TOP_HOMEMENU_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '#subrightsite-navigation',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_top_homemenu_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_TOP_HOMEMENU_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#subrightsite-navigation .menu ul li > a, #subrightsite-navigation .menu li > a',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_top_homemenu_text',
	'label'       => esc_html__( 'Link color', 'infinity' ),
	'description' => esc_html__( 'Link color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_TOP_HOMEMENU_TEXT,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#subrightsite-navigation .menu > ul > li > a, #subrightsite-navigation .menu > li > a',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_top_homemenu_text_hover',
	'description' => esc_html__( 'Link color hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_TOP_HOMEMENU_TEXT_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '
				#subrightsite-navigation .menu > ul > li:hover > a,
				#subrightsite-navigation .menu > ul > li.current_page_item > a,
				#subrightsite-navigation .menu > li.current-menu-item > a,
				#subrightsite-navigation .menu > li:hover > a',
			  'property' => 'color',
		)
	)
) );


Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_typo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Sub menu for top right menu', 'infinity' ),
	'default'  => '<div class="group_title">Top Right Sub Home Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'nav_typo_top_sub_home_menu_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => NAV_TYPO_TOP_SUB_HOME_MENU_FONT_FAMILY,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '#subrightsite-navigation .sub-menu,#subrightsite-navigation .children',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_top_sub_home_menu_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_TOP_SUB_HOME_MENU_FONT_WEIGHT,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '#subrightsite-navigation .sub-menu li a, #subrightsite-navigation .children li a',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'nav_typo_top_sub_home_menu_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => NAV_TYPO_TOP_SUB_HOME_MENU_FONT_SIZE,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#subrightsite-navigation .sub-menu li a, #subrightsite-navigation .children li a',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_top_sub_home_menu_text',
	'label'       => esc_html__( 'Link color', 'infinity' ),
	'description' => esc_html__( 'Link color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_TOP_SUB_HOME_MENU_TEXT,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#subrightsite-navigation .sub-menu li a, #subrightsite-navigation .children li a',
			'property' => 'color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_top_sub_home_menu_text_hover',
	'description' => esc_html__( 'Link color on hover', 'kirki' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => NAV_STYLE_TOP_SUB_HOME_MENU_TEXT_HOVER,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '#subrightsite-navigation .sub-menu li:hover > a, #subrightsite-navigation .children li:hover > a',
			'property' => 'color',
		),
	)
) );
