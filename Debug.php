<?php namespace Gothbarbie\Debug;
/**
 * Debug
 * Helper-class
 */
class Debug
{
    public static function printr( $data )
    {
        return echo '<pre>' , print_r( $data ) , '</pre>';
    }

    public static funtion vardump( $data )
    {
        return echo '<pre>' , var_dump( $data ) , '</pre>';
    }
}
