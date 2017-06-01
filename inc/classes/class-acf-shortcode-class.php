<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class ACF_Shortcode_Class {

	public static function init() {
		add_action( 'admin_init', array( __CLASS__, 'verify_acf_activated' ) );

		add_shortcode( 'you-can-say', array( __CLASS__, 'you_can_say_shortcode' ) );

	}


	public static function verify_acf_activated() {
		if ( ! class_exists( 'acf' ) ) {
			new Admin_Notification( 'Advanced Custom Fields must be installed and activated to support the full range of customizations', 'warning' );
		}
	}

	/**
	 * Adds Settings admin menu page via ACF
	 **/
	public static function you_can_say_shortcode() {
		if ( have_rows( 'customer_objections', 'option' ) ) : ?>
			<h2>Objections</h2>
		<ul class="customer-objections-ul">
		<?php while ( have_rows( 'customer_objections', 'option' ) ) : the_row(); ?>
			<li class="customer-objections-li">
				<div class="customers-might-ask">
					<?php the_sub_field( 'customers_might_ask' ); ?>
				</div>
				<div class="you-can-say">
					<?php the_sub_field( 'you_can_say' ); ?>
				</div>
			</li>
		<?php endwhile; ?>
		</ul>
	<?php
		endif;
	}

	public static function add_acf_json_load_point( $paths ) {
		$paths[] = plugin_dir_path( __FILE__ ) . 'acf-json';

		return $paths;
	}
}
