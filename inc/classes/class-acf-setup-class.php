<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class ACF_Setup_Class {

	public static function init() {
		add_action( 'admin_init', array( __CLASS__, 'verify_acf_activated' ) );
		add_action( 'admin_menu', array( __CLASS__, 'add_acf_options_page' ) );

		add_filter( 'acf/settings/load_json', array( __CLASS__, 'add_acf_json_load_point' ) );
		// add_filter( 'acf/load_field/name=404_page', array( __CLASS__, 'acf_load_error_page_choices' ) );
		// add_filter('acf/load_field/name=landing_post_type', array( __CLASS__, 'acf_load_post_types' ) );
		// add_filter('acf/load_field/name=choose_the_section_menu', array( __CLASS__, 'acf_load_menus_for_landing_subnavs' ) );
	}


	public static function verify_acf_activated() {
		if ( ! class_exists( 'acf' ) ) {
			new Admin_Notification( 'Advanced Custom Fields must be installed and activated to support the full range of customizations', 'warning' );
		}
	}

	/**
	 * Adds Settings admin menu page via ACF
	 **/
	public static function add_acf_options_page() {

		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page( array(
				'page_title'  => 'Infrastructure Options',
				'menu_title'  => 'Infrastructure Options',
				'menu_slug'   => 'infrastructure-options',
				'capability'  => 'publish_posts',
				'redirect'    => false,
				'icon_url'    => 'dashicons-images-alt2',
				)
			);

			acf_add_options_sub_page( array(
				'page_title' 	=> 'Other Options Page',
				'menu_title'	=> 'Other Options Page',
				'menu_slug' 	=> 'login-page-options',
				'capability'	=> 'publish_posts',
				'parent_slug'	=> 'infrastructure-options',
				)
			);
		}
	}

	public static function add_acf_json_load_point( $paths ) {
		$paths[] = plugin_dir_path( __FILE__ ) . 'acf-json';

		return $paths;
	}

	public static function acf_load_error_page_choices( $field ) {
		$field['choices'] = array();

		$choices_args = array(
			'post_type' => 'page',
		);
		$choices = new \WP_Query( $choices_args );
		$choices = $choices->posts;

		if ( is_array( $choices ) ) {
			foreach ( $choices as $choice ) {
				$field['choices'][ $choice->ID ] = $choice->post_title;
			}
		}
		return $field;
	}

	public static function acf_load_post_types( $field ) {
		$field['choices'] = array();

		$args = array(
		   'public'   => true,
		   '_builtin' => false,
		);
		$post_types = get_post_types( $args, 'objects', 'and' );

		$field['choices']['none'] = 'None';
		foreach ( $post_types as $post_type ) {
			$field['choices'][ $post_type->name ] = $post_type->label;
		}
		return $field;
	}

	public static function acf_load_menus_for_landing_subnavs( $field ) {
		$menus = wp_get_nav_menus();
		$field['choices'][0] = 'None';
		foreach ( $menus as $menu ) {
			$menu_name = $menu->name;
			$menu_id = $menu->term_id;
			$field['choices'][ $menu_id ] = $menu_name;
		}
		return $field;
	}
}
