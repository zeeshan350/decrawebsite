<?php
/**
 * Post Layout
 * =========
 */
$section  = 'post_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'post_layout',
	'label'       => esc_html__( 'Post layout', 'infinity' ),
	'description' => esc_html__( 'Choose the post layout you want', 'infinity' ),
	'help'        => esc_html__( 'Choose the post layout you want', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => POST_LAYOUT,
	'choices'     => array(
		'full-width'      => THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );


Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'post_layout_hide_tags',
	'label'       => esc_html__( 'Hide tags', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to hide tags when display posts.', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => POST_LAYOUT_HIDE_TAGS,
) );


Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'post_layout_hide_share',
	'label'       => esc_html__( 'Hide share buttons', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to hide share buttons when display posts.', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => POST_LAYOUT_HIDE_SHARE,
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'post_layout_hide_read_more',
	'label'       => esc_html__( 'Hide \'Read more\' link', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to hide \'Read more\' link when display posts.', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => POST_LAYOUT_HIDE_READ_MORE,
) );