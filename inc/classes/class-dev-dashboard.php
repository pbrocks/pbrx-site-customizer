<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class Dev_Dashboard {

	public static function init() {
		add_action( 'admin_menu', array( __CLASS__, 'main_dev_menu' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'dmq_load_scripts' ) );
		add_shortcode( 'info-balloon-shortcode', array( __CLASS__, 'info_balloon_shortcode' ) );
	}

	public static function dmq_load_scripts() {
		wp_enqueue_style( 'diagnostic', plugins_url( '../css/diagnostic.css', __FILE__ ) );
		wp_enqueue_script( 'jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
		wp_enqueue_script( 'diagnostic', plugins_url( '../js/window-size.js',  __FILE__ ), array( 'jquery' ) );

		$script = plugins_url( '../js/hide-show.js', __FILE__ );
		wp_enqueue_script( 'hide-show',	$script, array( 'jquery', 'jquery-ui' ), false, false );
	}

	public static function info_balloon_shortcode() {
	?><div class="info-balloon">
		<img src="<?php echo plugins_url( '../images/info-balloon.png', __FILE__ ); ?>" id="pbrx-trigger" class="white-bg"/>
		</div>
	<?php
	}

	public static function one2_show_template() {
		echo '<div class="the-debug-bar"><div class="salmon-js" id="the-debug-bar"></div></div>';
	}

	public static function main_dev_menu() {
		add_menu_page( 'Dev Dashboard', 'Dev Dashboard', 'edit_posts', 'dev-dashboard.php',  array( __CLASS__, 'dev_menu_page' ), 'dashicons-tickets', 11 );
	}

	public static function dev_menu_page() {
		global $menu, $submenu;

			echo '<h3>You are viewing this menu from a ';
			echo Setup_Functions::detect_mobile_device();
			echo ' device</h3>';
			$menu = 'primary';
			$menu_object = wp_get_nav_menu_object( $menu );
			$menu_name = 'primary';

			$locations = get_nav_menu_locations();
			$menu = $menu_object;
			$menuitems = wp_get_nav_menu_items( $menu->term_id, array(
				'order' => 'DESC',
			) );

			$theme_mod = get_theme_mods();
			var_dump( $theme_mod );
?>
<nav>
<ul class="main-nav">
<?php
$count = 0;
$submenu = false;
foreach ( $menuitems as $item ) :
	$link = $item->url;
	$title = $item->title;
	$menu_id = $item->ID;

	// item does not have a parent so menu_item_parent equals 0 (false)
	if ( ! $item->menu_item_parent ) :
		// save this id for later comparison with sub-menu items
		$parent_id = $item->ID;
?>

<li class="item">
	<a href="<?php echo $link; ?>" class="title">
		<?php echo $title; ?>
	</a> => 
<?php echo $menu_id; ?>
<?php endif; ?>

<?php if ( $parent_id == $item->menu_item_parent ) : ?>

	<?php if ( ! $submenu ) : $submenu = true; ?>
	<ul class="sub-menu">
	<?php endif; ?>

	    <li class="item">
	        <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
	    </li>

	<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ) : ?>
	</ul>
	<?php $submenu = false;
endif; ?>

<?php endif; ?>


<?php $count++;
endforeach; ?>

</ul>
</nav>
<?php
			echo '<pre>';
			echo 'You can find this file in  <br>';
			echo '<br>ACF path =>' . plugin_dir_path( __FILE__ ) . 'acf-json<br>';
			echo plugins_url( '/', __FILE__ );
			echo '<br>';
			echo '</pre>';

			echo '<pre><h2>This is the Menu Obj</h2>';
			print_r( $menu_object );
			echo '</pre>';

			echo '<pre><h2>This is the Submenu</h2>';
			print_r( $submenu );
			echo '</pre>';
	}
}
