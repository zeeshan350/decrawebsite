<?php
/**
 * Post Spacing
 * =========
 */
$section  = 'post_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'post_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'post_spacing_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => POST_SPACING_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title--single .entry-title',
			'property' => 'padding',
		),
	)
) );