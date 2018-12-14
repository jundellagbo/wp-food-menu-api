<?php
/** 
 * @package WpFoodMenuApi
*/
namespace Inc\Api;

class Products
{

    public function register() {
        add_action( 'rest_api_init', array( $this, 'api' ) ); 
    }

    public function api() {
        register_rest_route( 'wp-food-menu/v1/products', '/api', array(
            'methods'   => 'GET',
            'callback'  => array( $this, 'retrieve' )
        ) );

        register_rest_route( 'wp-food-menu/v1/product', '/api', array(
            'methods'   => 'GET',
            'callback'  => array( $this, 'product' )
        ) );
    }

    public function product( $request ) {
        if($request->get_param('id') === null) {
            return 0;
        }
        $data = array();
        $product = get_post( $request->get_param('id') );
        $data[] = $product;
        return $this->json($data);
    }

    public function retrieve( $request ) {
        $posts_data = array();
        $paged = $request->get_param('page') != null ? (int)$request->get_param('page') : 1;
        $total = count(get_posts( array( 'post_type' => 'food-menu', 'numberposts' => -1 ) ) ) ;
        $per_page = $request->get_param('perpage') != null ? (int)$request->get_param('perpage') : $total;
        $posts = get_posts( array(
                'post_type' => array( 'food-menu' ),
                'paged' => $paged,
                'posts_per_page' => $per_page,
                'search' => 'Light'
            )
        );

        $posts_data = $this->json( $posts );

        return [ 
            'data' => !$total ? [] : $posts_data,
            'meta' => [
                'page' => $paged,
                'per_page' => $per_page,
                'paginate' => (int)ceil($total/$per_page),
                'total' => $total
            ]
        ];
    }

    public function json( $posts ) {
        $posts_data = array();
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
        return $posts_data;
    }
}