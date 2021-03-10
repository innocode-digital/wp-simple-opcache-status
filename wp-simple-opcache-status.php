<?php
/**
 * Plugin Name: Simple OPcache Status
 * Description: Shows status information about the cache.
 * Plugin URI: https://github.com/innocode-digital/wp-simple-opcache-status
 * Version: 1.0.0
 * Author: Innocode
 * Author URI: https://innocode.com
 * Tested up to: 5.7
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

use Innocode\SimpleOPcacheStatus;

if ( ! function_exists( 'innocode_simple_opcache_status' ) ) {
    function innocode_simple_opcache_status( array $info ) : array {
        $opcache_status = SimpleOPcacheStatus\get_opcache_status();

        if ( ! $opcache_status ) {
            return $info;
        }

        $info['opcache'] = $opcache_status;

        return $info;
    }
}

add_filter( 'debug_information', 'innocode_simple_opcache_status' );
