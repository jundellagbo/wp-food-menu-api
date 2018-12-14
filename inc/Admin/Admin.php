<?php
/** 
 * @package WpFoodMenuApi
*/
namespace Inc\Admin;
use \Inc\Base\BaseController;

class Admin extends BaseController
{
    public function register() {
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
        add_action( 'admin_init', array( $this, 'required' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    public function add_admin_pages() {
        add_menu_page( 'WP Food Menu API', 'Food Menu API', 'manage_options', 'wp-food-menu-api', array( $this, 'admin_index' ), '
    dashicons-editor-code', 110 );
    }

    public function admin_index() {
        require_once $this->plugin_dir . 'templates/admin.php';
    }

    public function required() {
        if ( ! is_plugin_active('tlp-food-menu/tlp-food-menu.php') ) {
            add_action( 'admin_notices', array( $this, 'notice' ) );
        }
    }

    public function notice() {
        require_once $this->plugin_dir . 'templates/notice.php';
    }

    public function enqueue() {
        wp_enqueue_style( 'wpfmstyle', $this->plugin_url . 'assets/style.css'  );
        wp_enqueue_script( 'wpfmstyle', $this->plugin_url . 'assets/script.js'  );
    }
}