<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class Setup_Functions {
	public static function init() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'wp_admin_style' ) );
		// add_action( 'wp_enqueue_scripts',  array( __CLASS__, 'nr_playbooks_scripts' ) );
		add_shortcode( 'full-width-slider', array( __CLASS__, 'slick_slider_shortcode' ) );
		add_shortcode( 'slick-slider-shortcode3', array( __CLASS__, 'slick_slider_shortcode3' ) );
		add_shortcode( 'slick-slider-shortcode2', array( __CLASS__, 'slick_slider_shortcode2' ) );
		add_shortcode( 'slick-slider-shortcode1', array( __CLASS__, 'slick_slider_shortcode1' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'slick_slider_scripts' ) );
		// add_action( 'wp_footer', array( __CLASS__, 'one2_show_template' ) );
	}



	public static function slick_slider_scripts() {
		wp_enqueue_style( 'slick-slider', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
		wp_enqueue_script( 'slick-slider', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js' );
		wp_enqueue_style( 'slick-slider-custom', plugins_url( '../css/slick-slider-custom.css', __FILE__ ) );
		wp_enqueue_style( 'slick-slider-default', plugins_url( '../lib/slick/slick.css', __FILE__ ) );
		wp_enqueue_style( 'slick-slider-default', plugins_url( '../lib/slick/slick-theme.css', __FILE__ ) );
		// wp_enqueue_script( 'slick-slider-carousel', plugins_url( '/../js/slick-slider-carousel.js',__FILE__ ), array( 'jquery' ) );
		wp_enqueue_script( 'slider', plugins_url( '../js/slick-slider-settings4.js', __FILE__ ), array( 'jquery' ), false, true );

	}

	public static function slick_slider_shortcode() {
		?>

<section class="full-width-slider">
		<div class="container">
			<h2>Placeholder slider</h2>
			<ul class="slickslide">
					<li>
					<div class="frame">
						<img src="http://placehold.it/400x300/033"  title="Slide" alt="Slide" />
						</div>

					<div class="frame">
						<img src="http://placehold.it/400x600/711"  title="Slide" alt="Slide" />
						</div>
					</li>
					<li>
					<div class="frame">
						<img src="http://placehold.it/400x300/500"  title="Slide" alt="Slide" />
						</div>

					<div class="frame">
						<img src="http://placehold.it/400x600/300"  title="Slide" alt="Slide" />
						</div>
					</li>

					<li>
					<div class="frame">
						<img src="http://placehold.it/400x300/088"  title="Slide" alt="Slide" />
						</div>

					<div class="frame">
						<img src="http://placehold.it/400x600/611"  title="Slide" alt="Slide" />
						</div>
					</li>
			</ul>
		</div>
</section>
		<?php
	}

	public static function slick_slider_shortcode3() {
		?><style type="text/css">
		</style>
		<h2>Slider demo</h2>
		<div class="slider fade">
			<div>
				<div class="image">
					<img src="http://kenwheeler.github.io/slick/img/fonz1.png"/>
				</div>
			</div>
			<div>
				<div class="image">
					<img src="http://kenwheeler.github.io/slick/img/fonz2.png"/>
				</div>
			</div>
			<div>
				<div class="image">
					<img src="http://kenwheeler.github.io/slick/img/fonz3.png"/>
				</div>
			</div>
		</div>
		<?php
	}

	public static function slick_slider_shortcode2() {
		?><style type="text/css">
			.single-item div {
				background-color: #ccc;
			}
			.slick-slider .slick-track,
			.slick-slider .slick-list {  }
			.slick-track {
				background-color: red;
			}			
		</style>
		<div class="single-item" style="background-color: #ccc;">
			<div><img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" alt=""></div>
			<div><img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" alt=""></div>
			<div><img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" alt=""></div>
			<div><img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" alt=""></div>
			<div><img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" alt=""></div>
			<div><img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" alt=""></div>
		</div>
	<?php
	}

	public static function slick_slider_shortcode1() {
?>
		<p style="text-align:center; background-color: #72a8fa; padding: 2rem;">
			<div id="outer-container">
				<div class="image-container">
					<div class=".centering-image">
						<img src="http://placekitten.com/1200/400" />
					</div>
				</div>
			</div>
		</p>
<br>
<h2>In a frame</h2>
<div class="container ">
	<div class="row ">
		<div id="carousel-slider" class="carousel">
							<div class="item one"></div>
					<div class="item two"></div>

		</div>
	</div>
</div>
		<!-- <img src="http://placehold.it/600x400/fa8072/72fac4?text=size+=+600x400" /> -->
		<!-- Standard carousel where Slick calculated the best widths to fit. -->
		<div class="container ">
			<div class="row ">
				<div id="carousel" class="carousel col-md-12 ">
					<div class="item one"></div>
					<div class="item two"></div>
					<div class="item three"></div>
					<div class="item four"></div>
					<div class="item five"></div>
					<div class="item six"></div>
					<div class="item seven"></div>
					<div class="item eight"></div>
					<div class="item nine"></div>
					<div class="item ten"></div>
				</div>
				<div class="triangle"></div>

			<div class="item">
				<img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" />
			</div>
			<div class="slider">
				<img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" />
			</div>

<br>
<h2>In a frame</h2>
<div class="frame">
	<img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" />
</div>
<br>
<h2>Proporional Image</h2>
<img src="https://paul.barthmaier.rocks/demo/images/floating-beauty.jpg" />

<?php
	}


	public static function wp_admin_style() {
		wp_register_style( 'admin-css', plugins_url( '../css/admin.css', __FILE__ ) );
		wp_enqueue_style( 'admin-css' );
		wp_register_style( 'admin-js', plugins_url( '../js/admin.js',  __FILE__ ) );
		wp_enqueue_style( 'admin-js' );
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
