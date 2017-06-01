<?php
/*
* Plugin Name: PBrx Site Customizer
* Description: Plugin to customize a WordPress site using namespacing, classes, and functions combining to help customize the MultiSite environment
* Plugin URL: https://github.com/pbrocks/pbrx-site-customizer
* Version: 0.8.2
* Author: @pbrocks
Text Domain: pbrx-site-customizer
*/

namespace PBrx_Site_Customizer;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

// Autoloader will let us call classes directly rather than requiring the files first
require_once( 'autoload.php' );

inc\classes\AJAX_Stuff::init();
// inc\classes\ACF_Shortcode_Class::init();
// inc\classes\Admin_Menus::init();
inc\classes\Dev_Dashboard::init();
// inc\classes\Diagnostic_Message::init();
inc\classes\Exporting_Functions::init();
// inc\classes\Logging_Helpers::init();
// inc\classes\Post_Types::init();
inc\classes\PBrx_Slick_Slider::init();
inc\classes\Setup_Functions::init();
// inc\classes\WP_Logging::init();

