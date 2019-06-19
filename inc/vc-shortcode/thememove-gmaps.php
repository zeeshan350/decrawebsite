<?php

/**
 * ThemeMove Google Maps Shortcode
 * @version 1.0
 * @package ThemeMove
 */
class WPBakeryShortCode_Thememove_Gmaps extends WPBakeryShortCode {
	public function __construct( $settings ) {
		parent::__construct( $settings );
		$this->jsScripts();
	}

	public function jsScripts() {
		wp_enqueue_script( 'thememove-js-maps', 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en' );
		wp_enqueue_script( 'thememove-js-gmap3', THEME_ROOT . '/js/gmap3.min.js' );
	}
}

// Mapping shortcode
vc_map( array(
	'name'     => esc_html__( 'Google Maps', 'infinity' ),
	'base'     => 'thememove_gmaps',
	'category' => esc_html__( 'by THEMEMOVE', 'infinity' ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Address or Coordinate', 'infinity' ),
			'admin_label' => true,
			'param_name'  => 'address',
			'value'       => '40.7590615,-73.969231',
			'description' => wp_kses( __( 'Enter address or coordinate. To learn how to get coordinates, visit <a href="https://support.google.com/maps/answer/18539?hl=en" target="_blank">here</a>', 'infinity' ), array( 'a' => array( 'href' => array() ) ) ),
		),
		array(
			'type'        => 'attach_image',
			'heading'     => esc_html__( 'Marker icon', 'infinity' ),
			'param_name'  => 'marker_icon',
			'description' => esc_html__( 'Choose a image for marker address', 'infinity' ),
		),
		array(
			'type'        => 'textarea_html',
			'heading'     => esc_html__( 'Marker Information', 'infinity' ),
			'param_name'  => 'content',
			'description' => esc_html__( 'Content for info window', 'infinity' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Height', 'infinity' ),
			'param_name'  => 'map_height',
			'value'       => '480',
			'description' => esc_html__( 'Enter map height (in pixels or percentage)', 'infinity' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Width', 'infinity' ),
			'param_name'  => 'map_width',
			'value'       => '100%',
			'description' => esc_html__( 'Enter map width (in pixels or percentage)', 'infinity' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Zoom level', 'infinity' ),
			'param_name'  => 'zoom',
			'value'       => '16',
			'description' => esc_html__( 'Map zoom level', 'infinity' ),
		),
		array(
			'type'       => 'checkbox',
			'param_name' => 'zoom_enable',
			'value'      => array(
				esc_html__( 'Enable mouse scroll wheel zoom', 'tm-molly-vc' ) => 'yes',
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Map type', 'infinity' ),
			'admin_label' => true,
			'param_name'  => 'map_type',
			'description' => esc_html__( 'Choose a map type', 'infinity' ),
			'value'       => array(
				'Roadmap'   => 'roadmap',
				'Satellite' => 'satellite',
				'Hybrid'    => 'hybrid',
				'Terrain'   => 'terrain',
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Map style', 'infinity' ),
			'admin_label' => true,
			'param_name'  => 'map_style',
			'description' => esc_html__( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules)', 'infinity' ),
			'value'       => array(
				'Default'          => 'default',
				'Grayscale'        => 'style1',
				'Subtle Grayscale' => 'style2',
				'Apple Maps-esque' => 'style3',
				'Pale Dawn'        => 'style4',
				'Muted Blue'       => 'style5',
				'Paper'            => 'style6',
				'Light Dream'      => 'style7',
				'Retro'            => 'style8',
				'Avocado World'    => 'style9',
				'Facebook'         => 'style10',
				'Custom'           => 'custom'
			)
		),
		array(
			'type'        => 'textarea_raw_html',
			'heading'     => esc_html__( 'Map style snippet', 'infinity' ),
			'param_name'  => 'map_style_snippet',
			'description' => wp_kses( __( 'To get the style snippet, visit <a href="https://snazzymaps.com" target="_blank">Sanzzymaps</a> or <a href="http://www.mapstylr.com/" target="_blank">Mapstylr</a>.', 'infinity' ), array( 'a' => array( 'href' => array() ) ) ),
			'dependency'  => array(
				'element' => 'map_style',
				'value'   => 'custom',
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'infinity' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you want to use multiple Google Maps in one page, please add a class name for them.', 'infinity' ),
		),
	)
) );