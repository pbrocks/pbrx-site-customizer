<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class Front_Page_Functions {
	public static function init() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_slide_out_scripts' ) );
		add_shortcode( 'slide-out-content', array( __CLASS__, 'slide_out_content_function' ) );
	}

	public static function enqueue_slide_out_scripts() {
		wp_enqueue_style( 'home-page', plugins_url( '/../css/home-page.css', __FILE__ ) );
		wp_enqueue_script( 'home-page', plugins_url( '/../js/home-page.js',__FILE__ ), array( 'jquery' ) );

		wp_enqueue_style( 'slide-out-content', plugins_url( '/../css/slide-out-content.css', __FILE__ ) );
		wp_enqueue_script( 'slide-out-content', plugins_url( '/../js/slide-out-content.js',__FILE__ ), array( 'jquery' ) );

		// wp_enqueue_style( 'animate', plugins_url( __FILE__ ) . '/../css/animate.css' );
	}


	public static function slide_out_content_function() {
		$post_id = get_the_ID();
		?>
		<nav class="nav-side">
			<!-- <a href="#" class="nav-toggle"></a> -->
			<div class="slide-out-content">
				<p>Side content Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque, libero accumsan tempus convallis, neque urna eleifend elit, a malesuada orci massa sed turpis.</p>
				<h3><?php echo $post_id; ?></h3>
				<p> Nulla scelerisque non augue ac imperdiet. Integer condimentum vitae leo sed fermentum. Nullam tincidunt nisl eget porta auctor. Morbi vestibulum bibendum pulvinar. Nunc condimentum tempor dolor, eu pretium nisi </p>
			</div>
		</nav><a class="trigger-side" style="cursor: pointer;"><img class="trigger-side" src="http://new-relic-playbooks.dev/wp-content/uploads/2017/03/info-ballon.png">View Qualification Questions</a>
		<button class="trigger-side"></button>
		<?php
	}

	public static function one2_show_template() {
		$clickme = '<div class="the-debug-bar"><button id="clickme" class="the-debug-button">Click Me</button><div id="the-debug-bar"></div></div>';

		return $clickme;
	}

	public static function echo_one2_show_template() {
		echo '<div class="the-debug-bar"><button id="clickme" class="the-debug-button">Click Me</button><div id="the-debug-bar"></div></div>';
	}


	/**
	 * Enqueue scripts and styles.
	 */
	public static function nr_playbooks_scripts() {

	}

	public static function detect_mobile_device() {
		$detect_device = '';
		if ( wp_is_mobile() ) {
			$detect_device = 'mobile';
		} else {
			$detect_device = 'desktop';
		}
		return $detect_device;
	}
}
