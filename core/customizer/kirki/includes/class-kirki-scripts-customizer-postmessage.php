<?php
/**
 * Try to automatically generate the script necessary for postMessage to work.
 * for documentation see https://github.com/reduxframework/kirki/wiki/required
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Early exit if the class already exists
if ( class_exists( 'Kirki_Scripts_Customizer_PostMessage' ) ) {
	return;
}

class Kirki_Scripts_Customizer_PostMessage extends Kirki_Scripts_Enqueue_Script {

	public function generate_script() {

		global $wp_customize;
		// Early exit if we're not in the customizer
		if ( ! isset( $wp_customize ) ) {
			return;
		}

		// Get an array of all the fields
		$fields = Kirki::$fields;

		$script = 'jQuery( "#kirki-styles-inline-css" ).remove();';
		$styles = array();

		// Parse the fields and create the script.
		foreach ( $fields as $field ) {
			$field['transport'] = Kirki_Field::sanitize_transport( $field );
			$field['js_vars']   = Kirki_Field::sanitize_js_vars( $field );

			if ( ! empty( $field['setting'] ) ) {
				$inline_id = 'kirki-' . $field['setting'];
				$styles[]  = '<style id="' . esc_attr( $inline_id ) . '">' . $this->inline_css( $field ) . '</style>';

				$placeholder_inline_css = $this->placeholder_inline_css( $field );

				$script .= 'wp.customize( \'' . Kirki_Field::sanitize_settings( $field ) . '\', function( value ) {';
				$script .= 'value.bind( function( newval ) {';
				$script .= 'jQuery( "#' . $inline_id . '" )[0].innerHTML = "' . str_replace( array(
					                                                                             '{value}',
					                                                                             '&gt;',
				                                                                             ), array(
					                                                                             '" + newval + "',
					                                                                             '>',
				                                                                             ), esc_js( $placeholder_inline_css ) ) . '";';
				$script .= '}); });';
			}
		}

		return array( $script, $styles );
	}

	public function wp_footer() {
		$code = $this->generate_script();

		if ( empty( $code ) ) {
			return;
		}

		if ( '' != $code[0] ) {
			echo Kirki_Scripts_Registry::prepare( $code[0] );
		}

		echo implode( '', $code[1] );
	}

	public function customize_controls_print_scripts() {
	}

	public function customize_controls_enqueue_scripts() {
	}

	public function customize_controls_print_footer_scripts() {
	}

	public function inline_css( $field ) {

		$css = array();

		// Only continue if $field['output'] is set
		if ( isset( $field['output'] ) && ! empty( $field['output'] ) && 'background' != $field['type'] ) {

			$css = array_merge_recursive( $css, Kirki_Output::css( Kirki_Field::sanitize_field( $field ) ) );

		}

		if ( is_array( $css ) ) {
			return Kirki_Output::styles_parse( Kirki_Output::add_prefixes( $css ) );
		}

		return;

	}

	public function placeholder_inline_css( $field ) {

		$css = array();

		// Only continue if $field['output'] is set
		if ( isset( $field['output'] ) && ! empty( $field['output'] ) && 'background' != $field['type'] ) {

			$css = array_merge_recursive( $css, Kirki_Output::css( Kirki_Field::sanitize_field( $field ) ) );

		}

		if ( ! is_array( $css ) || empty( $css ) ) {
			return '';
		}

		$final_css = '';

		foreach ( $css as $media_query => $styles ) {

			$final_css .= ( 'global' != $media_query ) ? $media_query . '{' : '';

			foreach ( $styles as $style => $style_array ) {
				$final_css .= $style . '{';
				foreach ( $style_array as $property => $value ) {
					$value = '{value}';
					// Take care of formatting the URL for background-image statements.
					if ( 'background-image' == $property || 'background' == $property && false !== filter_var( $value, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED ) ) {
						$value = 'url("' . $value . '")';
					}
					// Make sure the background-position property is properly formatted
					if ( 'background-position' == $property ) {
						$value = str_replace( array( '_', '-' ), ' ', $value );
					}
					$final_css .= $property . ':' . $value . ';';
				}
				$final_css .= '}';
			}

			$final_css .= ( 'global' != $media_query ) ? '}' : '';

		}

		return $final_css;

	}

}