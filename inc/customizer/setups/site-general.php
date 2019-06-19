<?php
/**
 * Site General
 * ================
 */
$section  = 'site_general';
$priority = 3;

function frontpage_setup( $wp_customize ) {
	$wp_customize->get_control( 'show_on_front' )->section  = 'site_general';
	$wp_customize->get_control( 'show_on_front' )->priority = '3';
	$wp_customize->get_control( 'page_on_front' )->section  = 'site_general';
	$wp_customize->get_control( 'page_on_front' )->priority = '4';
	$wp_customize->get_control( 'page_on_front' )->label    = 'Choose a page';
	$wp_customize->get_control( 'show_on_front' )->label    = '';
}

add_action( 'customize_register', 'frontpage_setup' );

Kirki::add_field( 'infinity', array(
	'type'      => 'select',
	'setting'   => 'skin',
	'label'     => esc_html__( 'Skin', 'infinity' ),
	'section'   => $section,
	'choices'   => apply_filters( 'tm_customizer_skins', array() ),
	'priority'  => 1,
	'default'   => apply_filters( 'tm_customizer_default_skin', '' ),
	'transport' => 'postMessage'
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_general_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => 2,
	'default'  => '<div class="group_title">Front page</div>',
) );

if ( function_exists( 'tm_bread_crumb' ) ) {
	Kirki::add_field( 'infinity', array(
		'type'     => 'custom',
		'setting'  => 'site_general_group_title_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<div class="group_title">Breadcrumb</div>',
	) );

	Kirki::add_field( 'infinity', array(
		'type'        => 'toggle',
		'setting'     => 'site_general_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb', 'infinity' ),
		'description' => esc_html__( 'Enabling this option will display breadcrumb on every page', 'infinity' ),
		'section'     => $section,
		'priority'    => $priority ++,
		'default'     => SITE_GENERAL_BREADCRUMB_ENABLE,
	) );

	Kirki::add_field( 'infinity', array(
		'type'     => 'custom',
		'setting'  => 'site_general_hr_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<hr />',
		'required' => array(
			array(
				'setting'  => 'site_general_breadcrumb_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'infinity', array(
		'type'     => 'text',
		'setting'  => 'site_general_breadcrumb_home_text',
		'label'    => esc_html__( '"Home" text', 'infinity' ),
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => SITE_GENERAL_BREADCRUMB_HOME_TEXT,
		'required' => array(
			array(
				'setting'  => 'site_general_breadcrumb_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'infinity', array(
		'type'     => 'custom',
		'setting'  => 'site_general_hr_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<hr />',
		'required' => array(
			array(
				'setting'  => 'site_general_breadcrumb_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'infinity', array(
		'type'     => 'text',
		'setting'  => 'site_general_breadcrumb_you_are_here_text',
		'label'    => esc_html__( '"You are here" text', 'infinity' ),
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => SITE_GENERAL_BREADCRUMB_YOU_ARE_HERE_TEXT,
		'required' => array(
			array(
				'setting'  => 'site_general_breadcrumb_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );
}
Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_general_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Other settings</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'site_general_boxed',
	'label'       => esc_html__( 'Boxed mode', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to enable box mode for content', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => SITE_GENERAL_BOXED,
) );

Kirki::add_field('infinity', array(
  'type'     => 'custom',
  'setting'  => 'site_general_hr_' . $priority++,
  'section'  => $section,
  'priority' => $priority++,
  'default'  => '<hr />',
));

Kirki::add_field('infinity', array(
  'type'        => 'toggle',
  'setting'     => 'site_general_back_to_top',
  'label'       => __('Back to top', 'infinity'),
  'description' => __('Enabling this option will display a Back to Top button on every page', 'infinity'),
  'section'     => $section,
  'priority'    => $priority++,
  'default'     => SITE_GENERAL_BACK_TO_TOP,
));