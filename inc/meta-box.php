<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function cmb2_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}

	return true;
}

add_filter( 'cmb2_meta_boxes', 'infinity_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 *
 * @return array
 */
function infinity_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'infinity_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['page_metabox'] = array(
		'id'           => 'page_metabox',
		'title'        => esc_html__( 'Page Settings', 'infinity' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		'fields'       => array(
			// Sticky Header
			array(
				'name'    => esc_html__('Sticky Menu', 'infinity'),
				'desc'    => esc_html__('Custom settings for sticky menu', 'infinity'),
				'id'      => $prefix . 'sticky_menu',
				'type'    => 'select',
				'options' => array(
					'default' => esc_html__('Default', 'infinity'),
					'enable'  => esc_html__('Enable', 'infinity'),
					'disable' => esc_html__('Disable', 'infinity'),
				),
			),
			// Bread Crumb Enable
			array(
				'name'    => esc_html__('Enable Breadcrumb', 'infinity'),
				'desc'    => esc_html__('Custom settings for breadcrumb', 'infinity'),
				'id'      => $prefix . 'bread_crumb_enable',
				'type'    => 'select',
				'options' => array(
					'default' => esc_html__('Default', 'infinity'),
					'enable'  => esc_html__('Enable', 'infinity'),
					'disable' => esc_html__('Disable', 'infinity'),
				),
			),
			// Custom Logo
			array(
				'name' => esc_html__( 'Custom Logo', 'infinity' ),
				'desc' => esc_html__( 'Upload an image or enter a URL for logo', 'infinity' ),
				'id'   => $prefix . 'custom_logo',
				'type' => 'file',
			),
			// Page Layout
			array(
				'name'    => esc_html__( 'Page Layout', 'infinity' ),
				'desc'    => esc_html__( 'Choose a layout you want', 'infinity' ),
				'id'      => $prefix . 'page_layout_private',
				'type'    => 'select',
				'options' => array(
					'default'         => esc_html__( 'Default', 'infinity' ),
					'full-width'      => esc_html__( 'Full width', 'infinity' ),
					'content-sidebar' => esc_html__( 'Content-Sidebar', 'infinity' ),
					'sidebar-content' => esc_html__( 'Sidebar-Content', 'infinity' ),
				),
			),
			// Disable Title
			array(
				'name' => esc_html__('Disable Title', 'infinity'),
				'desc' => esc_html__('Check this box to disable the title of the page', 'infinity'),
				'id'   => $prefix . 'disable_title',
				'type' => 'checkbox'
			),
			// Title Style
			array(
				'name' => esc_html__('Title Style', 'infinity'),
				'desc' => esc_html__('Choose style for the title of the page', 'infinity'),
				'id' => $prefix . 'title_style',
				'type' => 'select',
				'default'   => 'default',
				'options' => array(
					'default' => esc_html__('Default', 'infinity'),
					'image' => esc_html__('Image Background', 'infinity'),
					'big-image' => esc_html__('Big Image Background', 'infinity'),
					'bg_color' => esc_html__('Single Color Background', 'infinity'),
				),
			),
			// Image Background
			array(
				'name' => esc_html__( 'Image Background', 'infinity' ),
				'desc' => esc_html__( 'Upload an image or enter a URL for heading title', 'infinity' ),
				'default' => PAGE_HEADING_BG_IMAGE,
				'id'   => $prefix . 'heading_image',
				'type' => 'file',
			),
			// Disable Parallax
			array(
				'name' => esc_html__('Disable Parallax', 'infinity' ),
				'desc' => esc_html__('Check this box to disable parallax effect for heading title', 'infinity'),
				'id' => $prefix . 'disable_parallax',
				'type' => 'checkbox'
			),
			// Title Background Color
			array(
				'name' => esc_html__('Title Background Color', 'infinity'),
				'desc' => esc_html__('Pick a background color for heading title', 'infinity'),
				'id' => $prefix . 'heading_bg_color',
				'default' => PAGE_HEADING_BG_COLOR,
				'type' => 'colorpicker',
			),
			// Title Color
			array(
				'name' => esc_html__('Title Color', 'infinity'),
				'desc' => esc_html__('Pick a color for heading title', 'infinity'),
				'id' => $prefix . 'heading_color',
				'default' => PAGE_STYLE_HEADING_FONT_COLOR,
				'type' => 'colorpicker',
			),
			// Alternative Title
			array(
				'name'    => esc_html__('Alternative Title', 'infinity'),
				'desc'    => esc_html__('Enter your alternative title here', 'infinity'),
				'id'      => $prefix . 'alt_title',
				'type'    => 'textarea_small'
			),
			// Disable Comment
			array(
				'name' => esc_html__('Disable Comment', 'infinity'),
				'desc' => esc_html('Check this box to disable comment form of the page', 'infinity'),
				'id'   => $prefix . 'disable_comment',
				'type' => 'checkbox'
			),
			// Custom Class
			array(
				'name' => esc_html__('Custom Class', 'infinity'),
				'desc' => esc_html__('Enter custom class for this page', 'infinity'),
				'id'   => $prefix . 'custom_class',
				'type' => 'text'
			),
		),
	);

	return $meta_boxes;
}
