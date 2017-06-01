<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );


class Post_Types {
	/*
            [add_new_item] => Add New Page
            [edit_item] => Edit Page
            [new_item] => New Page
            [view_item] => View Page
            [view_items] => View Pages
            [search_items] => Search Page
	*/
	public static function init() {
		// add_action( 'init', array( __CLASS__, 'register_panel' ) );
		add_action( 'init', array( __CLASS__, 'register_customer' ) );
		add_action( 'init', array( __CLASS__, 'register_industries' ) );
		add_action( 'init', array( __CLASS__, 'register_competitor' ) );
		add_action( 'init', array( __CLASS__, 'register_pitching' ) );
		add_action( 'init', array( __CLASS__, 'register_position' ) );
		add_action( 'init', array( __CLASS__, 'register_objections' ) );
		add_action( 'init', array( __CLASS__, 'register_use_cases' ) );
		add_action( 'init', array( __CLASS__, 'register_wins' ) );
		// add_action( 'init', array( __CLASS__, 'categories_to_pages' ) );
	}

	public static function register_panel() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Home Panels', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Home Panel', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Home Panels', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Home Panels', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Home Panels', 'new-relic-playbooks-wp' );
		$labels['add_new_item']        = __( 'Add New Home Panel', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Home Panels', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Home Panels', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-id';
		$args['taxonomies']           = array();
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'panel',
		);
		$args['rest_base']           = __( 'panel', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_panel', $args );
	}

	public static function register_customer() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Customers', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Customer', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Customers', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Customers', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Customers', 'new-relic-playbooks-wp' );
		$labels['add_new_item']        = __( 'Add New Customer', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Customers', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Customers Types', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-id';
		$args['taxonomies']           = array();
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'customer',
		);
		$args['rest_base']           = __( 'customer', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_customer', $args );
	}

	public static function register_industries() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Industries', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Industry', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Industry types', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Industries', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Industries', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Industries', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Industry Types', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-building';
		$args['taxonomies']           = array();
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'industries',
		);
		$args['rest_base']           = __( 'industries', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_industries', $args );
	}
	public static function register_pitching() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Pitching', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Pitching', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Pitching', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Pitching To', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Pitching', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Pitching', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Pitching post-type', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-filter';
		$args['taxonomies']           = array();
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'pitching',
		);
		$args['rest_base']           = __( 'pitching', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_pitching', $args );
	}

	public static function register_position() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Position', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Position', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Positions', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Positioning Against', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Position', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Position', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Position post-type', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-filter';
		$args['taxonomies']           = array();
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'position',
		);
		$args['rest_base']           = __( 'position', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_position', $args );
	}

	public static function register_competitor() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Competitor', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Competitor', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Competitors', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Competitors', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Competitors', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Competitor', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Competitor post-type', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-filter';
		$args['taxonomies']           = array();
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'competitor',
		);
		$args['rest_base']           = __( 'competitor', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_competitor', $args );
	}

	public static function register_objections() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Objections', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Objections', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Objections', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Objections', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Objections', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Objections', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Objections post-type', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-filter';
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'objections',
		);
		$args['rest_base']           = __( 'objections', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_objections', $args );
	}

	public static function register_use_cases() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Use Cases', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Use Case', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Use Cases', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Use Cases', 'new-relic-playbooks-wp' );
		$labels['add_new_item']          = __( 'Add New Use Case', 'new-relic-playbooks-wp' );
		$labels['edit_item']             = __( 'Edit Use Case', 'new-relic-playbooks-wp' );
		$labels['new_item']              = __( 'New Use Case', 'new-relic-playbooks-wp' );
		$labels['view_item']             = __( 'View Use Cases', 'new-relic-playbooks-wp' );
		$labels['view_items']            = __( 'View Use Cases', 'new-relic-playbooks-wp' );
		$labels['search_items']          = __( 'Search Use Cases', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Use Cases', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Use Cases', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Use Cases post-type', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-filter';
		$args['taxonomies']           = array();
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'use_cases',
		);
		$args['rest_base']           = __( 'use_cases', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_use_cases', $args );
	}

	public static function register_wins() {
		$labels = Post_Types::get_label_defaults();
		$labels['name']                  = _x( 'Customer Win', 'Post Type General Name', 'new-relic-playbooks-wp' );
		$labels['singular_name']         = _x( 'Customer Win', 'Post Type Singular Name', 'new-relic-playbooks-wp' );
		$labels['all_items']             = __( 'All Customer Wins', 'new-relic-playbooks-wp' );
		$labels['menu_name']             = __( 'Customer Wins', 'new-relic-playbooks-wp' );
		$labels['name_admin_bar']        = __( 'Customer Win', 'new-relic-playbooks-wp' );

		$args = Post_Types::get_args_defaults();
		$args['label']               = __( 'Customer Win', 'new-relic-playbooks-wp' );
		$args['description']         = __( 'Customer Win post-type', 'new-relic-playbooks-wp' );
		$args['labels']              = $labels;
		$args['menu_icon']           = 'dashicons-filter';
		$args['rewrite']             = array(
			'with_front' => false,
			'slug' => 'wins',
		);
		$args['rest_base']           = __( 'wins', 'new-relic-playbooks-wp' );

		register_post_type( 'new_relic_wins', $args );
	}

	private static function get_label_defaults() {
		return array(
			'name'                  => _x( 'Pages', 'Post Type General Name', 'new-relic-playbooks-wp' ),
			'singular_name'         => _x( 'Page', 'Post Type Singular Name', 'new-relic-playbooks-wp' ),
			'menu_name'             => __( 'Pages', 'new-relic-playbooks-wp' ),
			'name_admin_bar'        => __( 'Page', 'new-relic-playbooks-wp' ),
			'archives'              => __( 'Page Archives', 'new-relic-playbooks-wp' ),
			'parent_item_colon'     => __( 'Parent Page:', 'new-relic-playbooks-wp' ),
			'all_items'             => __( 'All Pages', 'new-relic-playbooks-wp' ),
			'add_new_item'          => __( 'Add New Page', 'new-relic-playbooks-wp' ),
			'add_new'               => __( 'Add New', 'new-relic-playbooks-wp' ),
			'new_item'              => __( 'New Page', 'new-relic-playbooks-wp' ),
			'edit_item'             => __( 'Edit Page', 'new-relic-playbooks-wp' ),
			'update_item'           => __( 'Update Page', 'new-relic-playbooks-wp' ),
			'view_item'             => __( 'View Page', 'new-relic-playbooks-wp' ),
			'search_items'          => __( 'Search Page', 'new-relic-playbooks-wp' ),
			'not_found'             => __( 'Not found', 'new-relic-playbooks-wp' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'new-relic-playbooks-wp' ),
			'featured_image'        => __( 'Featured Image', 'new-relic-playbooks-wp' ),
			'set_featured_image'    => __( 'Set featured image', 'new-relic-playbooks-wp' ),
			'remove_featured_image' => __( 'Remove featured image', 'new-relic-playbooks-wp' ),
			'use_featured_image'    => __( 'Use as featured image', 'new-relic-playbooks-wp' ),
			'insert_into_item'      => __( 'Insert into page', 'new-relic-playbooks-wp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this page', 'new-relic-playbooks-wp' ),
			'items_list'            => __( 'Pages list', 'new-relic-playbooks-wp' ),
			'items_list_navigation' => __( 'Pages list navigation', 'new-relic-playbooks-wp' ),
			'filter_items_list'     => __( 'Filter pages list', 'new-relic-playbooks-wp' ),
		);
	}

	private static function get_args_defaults() {
		return array(
			'label'                 => __( 'Page', 'new-relic-playbooks-wp' ),
			'description'           => __( 'Page Description', 'new-relic-playbooks-wp' ),
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes' ),
			'taxonomies'            => array( 'category' ),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 25,
			'menu_icon'             => 'dashicons-admin-page',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			// 'has_archive'           => true,
			'has_archive'           => false,
			'rewrite'               => array(
				'with_front' => false,
				'slug' => 'page',
			),
			'exclude_from_search'   => false,
			'query_var'             => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
			'rest_base'             => 'pages',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		);
	}


	private static function unset_element_from_array( $element, $array ) {
		$comments_key = array_search( $element, $array );
		if ( false !== $comments_key ) {
			unset( $array[ $comments_key ] );
		}
		return $array;
	}
	public static function categories_to_pages() {
		register_taxonomy_for_object_type( 'category', 'page' );
		add_post_type_support( 'page', 'excerpt' );
	}
}
