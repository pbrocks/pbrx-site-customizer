<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

/**
 * Silencing these BuddyPress + Yoast SEO warnings by manually changing when the Yoast SEO functions are loaded.
 *
 * This class can be removed once this ticket is resolved: https://github.com/Yoast/wordpress-seo/issues/4479
 */
class Yoast_BuddyPress_Fix {

	public static function init() {
			add_action( 'plugins_loaded', array( __CLASS__, 'load_wpseo_on_init_instead_of_plugins_loaded' ), 5 );
	}

	public static function load_wpseo_on_init_instead_of_plugins_loaded() {

		if ( class_exists( 'WPSEO_Options' ) ) {

			if ( is_admin() ) {
				remove_action( 'plugins_loaded', 'wpseo_admin_init', 15 );
				add_action( 'init', 'wpseo_admin_init', 15 );
			}

			remove_action( 'plugins_loaded', 'load_yoast_notifications' );
			add_action( 'init', 'load_yoast_notifications' );

		}
	}
}
