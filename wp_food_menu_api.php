<?php
/** 
 * @package WpFoodMenuApi
*/
/*
Plugin Name:  WP Food Menu API
Plugin URI:   https://www.facebook.com/jundell.ictned.ph
Description:  Retrieve your post's data with API.
Version:      1.0
Author:       Jundell Agbo
Author URI:   https://www.facebook.com/jundell.ictned.ph
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/

defined( 'ABSPATH' ) or die( 'WP RESTful API Plugin not found.' );

class WpRestful
{

    public function flush() {
        flush_rewrite_rules();
    }
	
	public function do_restful_register() {
		add_action( 'rest_api_init', array( $this, 'wp_restful_api_register' ) ); 
    }

    public function wp_restful_api_register() {
        register_rest_route( 'wp-restful/v1', '/api', array(
            'methods'   => 'GET',
            'callback'  => array( $this, 'wp_restful_retrieve' )
        ) );
    }

    public function wp_restful_retrieve( $request ) {

        $posts_data = array();
        $post_type = $request->get_param( 'post_type' );
        $paged = $request->get_param('page') != null ? (int)$request->get_param('page') : 1;
        $per_page = $request->get_param('perpage');

        $posts = get_posts( array(
                'post_type' => array( $post_type ),
                'paged' => $paged,
                'posts_per_page' => $per_page
            )
        );
        
        foreach( $posts as $post ) {
            $id = $post->ID; 
            $post_thumbnail = ( has_post_thumbnail( $id ) ) ? get_the_post_thumbnail_url( $id ) : null;
            $posts_data[] = (object) array(
                'id' => $id,
                'thumbnail' => $post_thumbnail,
                'price' => get_post_custom_values( 'price', $id )[0],
                'title' => $post->post_title,
                'description' => $post->post_content
            );
        }

        $total = count( get_posts( array( 'post_type' => array( $post_type ) ) ) );

        return [ 
            'data' => $posts_data,
            'meta' => [
                'page' => $paged,
                'per_page' => $per_page,
                'paginate' => ceil($total/$per_page),
                'total' => $total
            ]
        ];
    }
}

if( class_exists( 'WpRestful' ) ) {
    $wp_restful = new WpRestful();
    $wp_restful->do_restful_register();

    // activation
    register_activation_hook( __FILE__, array( $wp_restful, 'flush' ) );

    // deactivation
    register_deactivation_hook( __FILE__, array( $wp_restful, 'flush' ) );

    // uninstall
    register_uninstall_hook( __FILE__, array( $wp_restful, 'flush' ) );
}