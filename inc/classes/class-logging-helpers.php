<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class Logging_Helpers {

	public static function init() {

	}

	public static function login_enqueue_scripts() {
		$url = $_SERVER['REQUEST_URI'];
		$title      = 'Page called = login_enqueue_scripts() was called by ' . $url;
		$message    = 'The login_enqueue_scripts() was called' . site_url( 'wp-login.php?loggedout=true' );
		// $parent     = 46; // This might be the ID of a payment post type item we want this log item connected to
		$type       = 'error';

		WP_Logging::add( $title, $message, $type );
	}

	public static function login_form() {
		$url = $_SERVER['REQUEST_URI'];
		$title      = 'login_form() ' . $url;
		$message    = 'The login_form() was called';
		// $parent     = 46; // This might be the ID of a payment post type item we want this log item connected to
		$type       = 'error';

		WP_Logging::add( $title, $message, $type );
	}

	public static function login_form_login() {
		$url = $_SERVER['REQUEST_URI'];
		$title      = 'Non-admin called login_form_login() was called by ' . $url;
		$message    = 'The login_form_login() was called by a user with non-administrator level';
		// $parent     = 46; // This might be the ID of a payment post type item we want this log item connected to
		$type       = 'error';

		WP_Logging::add( $title, $message, $type );
	}

	public static function login_from_admin() {
		$url = $_SERVER['REQUEST_URI'];
		$title      = 'Admin called login_from_admin() was called by ' . $url;
		$message    = 'The login_from_admin() was called hopefully on Login when IMG logged in';
		// $parent     = 46; // This might be the ID of a payment post type item we want this log item connected to
		$type       = 'error';

		WP_Logging::add( $title, $message, $type );
	}

	public static function login_form_form() {
		$url = $_SERVER['REQUEST_URI'];
		$title      = 'login_form_form() was called by ' . $url;
		$message    = 'The login_form_form() was called hopefully on Login';
		// $parent     = 46; // This might be the ID of a payment post type item we want this log item connected to
		$type       = 'error';

		WP_Logging::add( $title, $message, $type );
	}

	public static function login_form_action() {
		$url = $_SERVER['REQUEST_URI'];
		$title      = 'login_form_action() was called by ' . $url;
		$message    = 'The login_form_action() was called';
		// $parent     = 46; // This might be the ID of a payment post type item we want this log item connected to
		$type       = 'error';

		WP_Logging::add( $title, $message, $type );
	}
}
