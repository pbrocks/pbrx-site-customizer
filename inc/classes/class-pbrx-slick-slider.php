<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class PBrx_Slick_Slider {

	public static function init() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'slick_slider_scripts' ) );
		add_shortcode( 'slick-slider-php-shortcode', array( __CLASS__, 'slick_slider_php_shortcode' ) );
		add_shortcode( 'slick-slider-shortcode', array( __CLASS__, 'slick_slider_shortcode' ) );

	}


	public static function slick_slider_scripts() {
		wp_enqueue_style( 'slick-slider', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
		wp_enqueue_style( 'slick-slider', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css' );
		wp_enqueue_script( 'slick-slider', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js' );

		wp_enqueue_style( 'slick', plugins_url( '/../css/slick.css', __FILE__ ) );
		wp_enqueue_script( 'slick', plugins_url( '../js/slick.js', __FILE__ ), array( 'jquery' ), false, true );

	}


	/**
	 * Adds Settings admin menu page via ACF
	 **/
	public static function slick_slider_shortcode() {
		?>
		<div class="container">
			<div id="slick">
				<div>
					<div class="img--holder" style="background-image: url(http://images.unsplash.com/photo-1449023859676-22e61b0c0695?dpr=1&auto=format&fit=crop&w=767&h=431&q=80&cs=tinysrgb&crop=&bg=);"></div>
				</div>
				<div>
					<div class="img--holder" style="background-image: url(http://images.unsplash.com/photo-1481873098652-b87c7a2fd98c?dpr=1&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=&bg=);"></div>
				</div>
				<div>
					<div class="img--holder" style="background-image: url(http://images.unsplash.com/photo-1487241281672-301e0f542588?dpr=1&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=&bg=);"></div>
				</div>
			</div><!-- /#slick -->
		</div><?php
	}

	/**
	 * Adds Settings admin menu page via ACF
	 **/
	public static function slick_slider_php_shortcode() {
		$dir = plugins_url( '/../images/*.jpeg', __FILE__ );
		$img_array = array(
			'http://images.unsplash.com/photo-1449023859676-22e61b0c0695?dpr=1&auto=format&fit=crop&w=767&h=431&q=80&cs=tinysrgb&crop=&bg=',
			'http://images.unsplash.com/photo-1481873098652-b87c7a2fd98c?dpr=1&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=&bg=',
			'http://images.unsplash.com/photo-1487241281672-301e0f542588?dpr=1&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=&bg=',
			);
		// get the list of all files with .jpg extension in the directory and safe it in an array named $images
		$img_array = glob( $dir );
		// extract only the name of the file without the extension and save in an array named $find
		foreach ( $img_array as $image ) :
			echo "<img src='" . $image . "' /><br>";
endforeach;
		/*
		?>
		<div class="container">
			<div id="slick">
				<div>
					<div class="img--holder" style="background-image: url(http://images.unsplash.com/photo-1449023859676-22e61b0c0695?dpr=1&auto=format&fit=crop&w=767&h=431&q=80&cs=tinysrgb&crop=&bg=);">
					</div>
				</div>
				<div>
					<div class="img--holder" style="background-image: url(http://images.unsplash.com/photo-1481873098652-b87c7a2fd98c?dpr=1&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=&bg=);"></div>
				</div>
				<div>
					<div class="img--holder" style="background-image: url(http://images.unsplash.com/photo-1487241281672-301e0f542588?dpr=1&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=&bg=);"></div>
				</div>
			</div><!-- /#slick -->
		</div><?php */
	}
}
