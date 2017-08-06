<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class Admin_Menus {

	public static function init() {
		add_action( 'admin_menu', array( __CLASS__, 'dev_menu' ) );
		add_action( 'admin_menu', array( __CLASS__, 'move_spacer1_admin_menu_item' ) );
		// add_action( 'admin_menu', array( __CLASS__, 'move_options_page_admin_menu' ) );
		add_action( 'admin_menu', array( __CLASS__, 'change_pages_label_to_something_else' ) );
		add_action( 'admin_menu', array( __CLASS__, 'change_posts_label_to_updates' ) );
		add_action( 'admin_menu', array( __CLASS__, 'remove_some_admin_menus' ), 990 );
	}

	public static function move_spacer1_admin_menu_item( $menu_order ) {
		global $menu;

		$spacer_admin_menu = $menu[4];

		if ( ! empty( $spacer_admin_menu ) ) {

			// Add 'woocommerce' to bottom of menu
			 $menu[15] = $spacer_admin_menu;

			// Remove initial 'woocommerce' appearance
			unset( $menu[4] );
		}
		return $menu_order;
	}

	public static function move_options_page_admin_menu( $menu_order ) {
		global $menu;

		$infra_admin_menu = $menu[81];

		if ( ! empty( $infra_admin_menu ) ) {

			// Add 'woocommerce' to bottom of menu
			 $menu[37] = $infra_admin_menu;

			// Remove initial 'woocommerce' appearance
			unset( $menu[81] );
		}
		return $menu_order;
	}


	public static function change_pages_label_to_something_else() {
		global $menu;

		$menu[20][0] = 'Home Panels';
	}

	public static function change_s_label_to_something_else() {
		global $menu;

		$menu[20][0] = 'Home ';
	}

	public static function change_posts_label_to_updates() {
		global $menu;

		$menu[5][0] = 'Current Updates';

	}


	public static function remove_some_admin_menus() {
		global $menu, $submenu;
		remove_menu_page( 'edit-comments.php' );
		remove_menu_page( 'edit.php' );
		remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
		remove_submenu_page( 'themes.php', 'theme-editor.php' );
	}


	public static function dev_menu() {
		// if ( current_user_can( 'manage_network' ) ) { // for multisite
		if ( current_user_can( 'manage_options' ) ) {
			add_menu_page( 'Dev Admin', 'Dev Admin', 'edit_posts', 'dev-admin-menu.php',  array( __CLASS__, 'dev_menu_page' ), 'dashicons-tickets', 13 );
			add_submenu_page( 'dev-admin-menu.php', 'Dev Arrays', 'Arrays', 'edit_posts', 'dev-arrays.php',  array( __CLASS__, 'dev_arrays_page' ) );
			add_submenu_page( 'dev-admin-menu.php', 'Dev Submenu', 'Menus/Submenus', 'edit_posts', 'dev-submenu.php',  array( __CLASS__, 'dev_submenu_page' ) );
		}
	}

	public static function dev_arrays_page() {
		echo '<h1>' . basename( __FUNCTION__ ) . '</h1>';
		echo '<pre>';
		echo 'You can find this file in  <br>';
		echo plugins_url( '/', __FILE__ );
		$cpts = get_post_types();
		print_r( $cpts );
		$cpt = get_post_type_object( 'pbrx_use_cases' );
		$cpt = get_post( 205 );
		print_r( $cpt );

		echo '<br>';
		echo '</pre>';
		$use_cases = new \WP_Query( array(
			'post_type' => 'use_cases',
		) );
		echo '<pre> Use Cases';
		print_r( $use_cases );
		echo '</pre>';
		echo '<pre>';
		    print_r( get_field( 'use_cases' ) );
		echo '</pre>';
		die;
	}

	public static function dev_submenu_page() {
		global $menu;
		echo '<h1>' . basename( __FUNCTION__ ) . '</h1>';
		echo '<pre>';
		echo 'You can find this file in  <br>';
		echo plugins_url( '/', __FILE__ );
		print_r( $menu );
		echo '<br>';
		echo '<br>ACF path =>' . plugin_dir_path( __FILE__ ) . 'acf-json<br>';
		echo '</pre>';

	}

	public static function dev_menu_page() {
		echo '<h1>' . basename( __FUNCTION__ ) . '</h1>';
			echo '<h1>Dev Admin Menu</h1>';
			echo '<pre>';

			echo '<p>get_stylesheet_directory => ' . get_stylesheet_directory();
			echo '<p>get_stylesheet_directory_uri => ' . get_stylesheet_directory_uri();
			echo '<p>get_stylesheet_uri => ' . get_stylesheet_uri();

			echo 'You can find this file in  <br>';
			echo esc_url( plugins_url( '/', __FILE__ ) );
			echo '<br>';
			echo '</pre>';

			$mods = get_theme_mods();
			echo '<pre>';
			var_dump( $mods );
			echo '</pre>';
	}
}
