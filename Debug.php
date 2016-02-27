<?php namespace Gothbarbie\Debug;
/**
 * Debug
 * Helper-class
 */
class Debug
{
    public static function printr( $data )
    {
        echo '<pre>' , print_r( $data ) , '</pre>';
    }

    public static function vardump( $data )
    {
        echo '<pre>' , var_dump( $data ) , '</pre>';
    }
}
