<?php
/** 
 * @package WpFoodMenuApi
*/
namespace Inc\Api;
use Inc\Api\Products;

class Category extends Products
{
    public function register() {
        add_action( 'rest_api_init', array( $this, 'api' ) ); 
    }

    public function api() {
        register_rest_route( 'wp-food-menu/v1/product/category', '/api', array(
            'methods'   => 'GET',
            'callback'  => array( $this, 'retrieve' )
        ) );

        register_rest_route( 'wp-food-menu/v1/categories', '/api', array(
            'methods'   => 'GET',
            'callback'  => array( $this, 'categories' )
        ) );
    }

    public function get_taxonomy( $category ) {
        return array(
            array(
                'taxonomy' => $category->taxonomy,
                'field' => 'id',
                'terms' => $category->term_id
            )
        );
    }

    public function retrieve( $request ) {
        if($request->get_param('cat_id') === null) {
            return [ 'data' => 0 ];
        }

        $data = array();
        $paged = $request->get_param('page') != null ? (int)$request->get_param('page') : 1;
        $cat_id = $request->get_param('cat_id');
        $categories = get_term_by( 'id', $cat_id, 'food-menu-category' );
        $total = count( get_posts( array( 'post_type' => 'food-menu', 'number_posts' => -1, 'tax_query' => $this->get_taxonomy( $categories ) ) ) );
        $per_page = $request->get_param('perpage') != null ? (int)$request->get_param('perpage') : $total;
        $products = get_posts(
            array(
                'paged' => $paged,
                'posts_per_page' => $per_page,
                'post_type' => 'food-menu',
                'tax_query' => $this->get_taxonomy( $categories )
            )
        );

        $data[] = (object) array(
            'term_id' => $categories->term_id,
            'name' => $categories->name,
            'term_taxonomy_id' => $categories->term_taxonomy_id,
            'taxonomy' => $categories->taxonomy,
            'description' => $categories->description,
            'count' => $categories->count,
            'products' => $this->json( $products )
        );
        
        return [
            'data' => !$total ? [] : $data,
            'meta' => [
                'page' => $paged,
                'per_page' => $per_page,
                'paginate' => (int)ceil($total/$per_page),
                'total' => $total
            ]
        ];
    }

    public function categories() {
        $categories = get_terms( array( 'taxonomy' => 'food-menu-category', 'hide_empty' => 0 ) );
        $data = array();
        foreach( $categories as $cat ) {
             $data[] = (object) array(
                'term_id' => $cat->term_id,
                'name' => $cat->name,
                'term_taxonomy_id' => $cat->term_taxonomy_id,
                'taxonomy' => $cat->taxonomy,
                'description' => $cat->description,
                'count' => $cat->count
            );
        }
        return $data;
    }
}