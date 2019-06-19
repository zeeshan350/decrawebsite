<?php

/**
 * ThemeMove Google Maps 2 Shortcode
 * @version 1.0
 * @package ThemeMove
 */
class WPBakeryShortCode_Thememove_Gmaps2 extends WPBakeryShortCode {
	public function __construct( $settings ) {
		parent::__construct( $settings );
		$this->jsScripts();
	}

	public function jsScripts() {
		wp_enqueue_script( 'thememove-js-maps', 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en' );
		wp_enqueue_script( 'thememove-js-gmap3', THEME_ROOT . '/js/gmap3.min.js' );
	}

	public function convertAttributesToNewMarker( $atts ) {
		if ( isset( $atts['markers'] ) && strlen( $atts['markers'] ) > 0 ) {
			$markers = vc_param_group_parse_atts( $atts['markers'] );

			if ( ! is_array( $markers ) ) {
				$temp         = explode( ',', $atts['markers'] );
				$paramMarkers = array();

				foreach ( $temp as $marker ) {
					$data = explode( '|', $marker );

					$newMarker            = array();
					$newMarker['address'] = isset( $data[0] ) ? $data[0] : '';
					$newMarker['icon']    = isset( $data[1] ) ? $data[1] : '';
					$newMarker['info']    = isset( $data[2] ) ? $data[2] : '';

					$paramMarkers[] = $newMarker;
				}

				$atts['markers'] = urlencode( json_encode( $paramMarkers ) );

			}

			return $atts;
		}
	}
}

// Mapping shortcode
vc_map( array(
	'name'     => esc_html__( 'Google Maps 2 (multiple locations)', 'infinity' ),
	'base'     => 'thememove_gmaps2',
	'category' => esc_html__( 'by THEMEMOVE', 'infinity' ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Height', 'tm-molly-vc' ),
			'param_name'  => 'map_height',
			'value'       => '480',
			'description' => esc_html__( 'Enter map height (in pixels or %)', 'tm-molly-vc' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Width', 'tm-molly-vc' ),
			'param_name'  => 'map_width',
			'value'       => '100%',
			'description' => esc_html__( 'Enter map width (in pixels or %)', 'tm-molly-vc' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Zoom level', 'tm-molly-vc' ),
			'param_name'  => 'zoom',
			'value'       => '16',
			'description' => esc_html__( 'Map zoom level', 'tm-molly-vc' ),
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
			'heading'     => esc_html__( 'Map type', 'tm-molly-vc' ),
			'admin_label' => true,
			'param_name'  => 'map_type',
			'description' => esc_html__( 'Choose a map type', 'tm-molly-vc' ),
			'value'       => array(
				'Roadmap'   => 'roadmap',
				'Satellite' => 'satellite',
				'Hybrid'    => 'hybrid',
				'Terrain'   => 'terrain',
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Map style', 'tm-molly-vc' ),
			'admin_label' => true,
			'param_name'  => 'map_style',
			'description' => esc_html__( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules)', 'tm-molly-vc' ),
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
				'Custom'           => 'custom',
			),
		),
		array(
			'type'        => 'textarea_raw_html',
			'heading'     => esc_html__( 'Map style snippet', 'tm-molly-vc' ),
			'param_name'  => 'map_style_snippet',
			'description' => wp_kses( __( 'To get the style snippet, visit <a href="https://snazzymaps.com" target="_blank">Sanzzymaps</a> or <a href="http://www.mapstylr.com/" target="_blank">Mapstylr</a>.', 'tm-molly-vc' ), array( 'a' => array( 'href' => array() ) ) ),
			'dependency'  => array(
				'element' => 'map_style',
				'value'   => 'custom',
			),
		),
		array(
			'group'       => esc_html__( 'Markers', 'tm-molly-vc' ),
			'type'        => 'param_group',
			'heading'     => esc_html__( 'Markers', 'tm-molly-vc' ),
			'param_name'  => 'markers',
			'description' => esc_html__( 'You can add multiple markers to the map', 'tm-molly-vc' ),
			'value'       => urlencode( json_encode( array(
				array(
					'address' => '40.7590615,-73.969231',
				),
			) ) ),
			'params'      => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Address or Coordinate', 'tm-molly-vc' ),
					'param_name'  => 'address',
					'admin_label' => true,
					'description' => wp_kses( __( 'Enter address or coordinate. To learn how to get coordinates, visit <a href="https://support.google.com/maps/answer/18539?hl=en" target="_blank">here</a>', 'tm-molly-vc' ), array(
						'a' => array(
							'href'   => array(),
							'target' => array(),
						),
					) ),
				),
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__( 'Marker icon', 'tm-molly-vc' ),
					'param_name'  => 'icon',
					'description' => esc_html__( 'Choose a image for marker address', 'tm-molly-vc' ),
				),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Marker Information', 'tm-molly-vc' ),
					'param_name'  => 'info',
					'description' => esc_html__( 'Content for info window', 'tm-molly-vc' ),
				),
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'infinity' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you want to use multiple Google Maps in one page, please add a class name for them.', 'infinity' ),
		),
	)
) );