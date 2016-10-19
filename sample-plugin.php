<?php
/**
 * Plugin Name:     Sample Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     sample-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Sample_Plugin
 */

add_shortcode( 'greeting', function( $atts ) {
	if ( empty( $atts['language'] ) ) {
		return;
	}

	switch( $atts['language'] ) {
		case 'japanese' :
			return 'こんにちは';

		case 'english' :
			return 'hello';
	}
} );
