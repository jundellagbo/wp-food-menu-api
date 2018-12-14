<?php
/** 
 * @package WpFoodMenuApi
*/
namespace Inc\Base;

class BaseController
{
    public $plugin_dir, $plugin_url, $plugin_name;

    public function __construct() {
        $this->plugin_dir = plugin_dir_path( dirname( __FILE__, 2 ) );
        $this->plugin_url = plugin_dir_url( dirname(__FILE__, 2 ) );
        $this->plugin_name = plugin_basename( dirname(__FILE__, 3 ) ) . '/wp-food-menu-api.php';
    }
}