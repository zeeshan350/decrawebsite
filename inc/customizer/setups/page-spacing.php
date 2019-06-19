<?php
/**
 * Page Spacing
 * =========
 */
$section  = 'page_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'page_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'page_spacing_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PAGE_SPACING_PADDING,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title .entry-title',
			'property' => 'padding',
		),
	)
) );