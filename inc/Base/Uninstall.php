<?php
/** 
 * @package WpFoodMenuApi
*/
namespace Inc\Base;

class Uninstall
{
    public static function uninstall() {
        flush_rewrite_rules();
    }
}