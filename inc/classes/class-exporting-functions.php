<?php
namespace PBrx_Site_Customizer\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class Exporting_Functions {
	public static function init() {
		// add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_slide_out_scripts' ) );
		// add_shortcode( 'slide-out-content', array( __CLASS__, 'slide_out_content_function' ) );
	}

	public static function get_all_published_urls() {
		$postTypes = get_post_types([
			'public' => true,
			'exclude_from_search' => false,
		]);

		$query = new \WP_Query([
			'post_type' => array_values( $postTypes ),
			'post_status' => 'publish',
			'posts_per_page'    => -1,
		]);

		return $query->get_posts();
	}

	public static function push_published_urls_to_csv() {
		$posts = self::get_all_published_urls();

		$results_array = array();

		// loop over the input array
		foreach ( $posts as $index => $post ) {
			$results_array[ $index ]['title'] = $post->post_title;
			$results_array[ $index ]['url'] = get_the_permalink( $post->ID );
		}

		$f = fopen( 'php://memory', 'w' );
		fputcsv( $f, array( 'title', 'url' ) );

		foreach ( $results_array as $array ) {
			fputcsv( $f, array_values( $array ) );
		}

		fseek( $f, 0 );

		header( 'Content-Type: application/csv' );
		header( 'Content-Disposition: attachement; filename="export.csv";' );

		fpassthru( $f );

		exit;
	}

	public static function slide_out_content_function() {
		$post_id = get_the_ID();

	}

}
