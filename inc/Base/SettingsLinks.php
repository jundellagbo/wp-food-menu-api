<?php
/** 
 * @package WpFoodMenuApi
*/
namespace Inc\Base;
use \Inc\Base\BaseController;

class SettingsLinks extends BaseController
{
    public function register() {
        add_filter( 'plugin_action_links_' . $this->plugin_name, array( $this, 'settings_link' ) );
    }

    public function settings_link( $links ) {
        $settings_link = '<a href="options-general.php?page=wp-food-menu-api">Check API Configuration</a>';
        array_push( $links, $settings_link );
        return $links;
    }
}