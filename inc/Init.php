<?php
/** 
 * @package WpFoodMenuApi
*/
namespace Inc;

final class Init
{
    /** 
     * Store all classes inside array
     * @return array list of classes
    */
    public static function get_services() {
        return [
            Admin\Admin::class,
            Base\SettingsLinks::class,
            Api\Products::class,
            Api\Category::class
        ];
    }

    /**
     * Loop through classes, initialize
     */
    public static function register_services() {
        foreach( self::get_services() as $class ) {
            $service = self::instantiate( $class );
            if( method_exists( $service, 'register' ) ) {
                $service->register();
            }
        }
    }

    /**
     * Instantiate classes through loop
     * @return instatiate classes
     */
    private static function instantiate( $class ) {
        return new $class;
    }
}