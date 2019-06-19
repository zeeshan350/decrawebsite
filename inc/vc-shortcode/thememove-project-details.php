<?php
/**
 * ThemeMove Project Detalis Shortcode
 * @version 1.0
 * @package ThemeMove
 */
class WPBakeryShortCode_Thememove_Project_Details extends WPBakeryShortCode
{
}

// Mapping shortcode
vc_map(array(
	'name'        => esc_html__('Project Details', 'infinity'),
	'description' => esc_html__('Only available for Projects.', 'infinity'),
	'base'        => 'thememove_project_details',
	'category'    => esc_html__('by THEMEMOVE', 'infinity'),
	'show_settings_on_create' => false,
	'params'      => array(
//		array(
//			'type'        => 'dropdown',
//			'heading'     => "Layout",
//			'admin_label' => true,
//			'param_name'  => 'layout',
//			'description' => esc_html__('Choose a layout to display project details', 'infinity'),
//			'value'       => array(
//				'Layout 1' => 'layout1',
//				'Layout 2' => 'layout2'
//			),
//		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Extra class name', 'infinity'),
			'param_name' => 'el_class',
			'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS.', 'infinity'),
		),
	)
));