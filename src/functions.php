<?php

namespace Innocode\SimpleOPcacheStatus;

/**
 * @return array|null
 */
function get_opcache_status() : ?array {
    if (
        ! function_exists( 'opcache_get_status' ) ||
        false === ( $status = opcache_get_status() )
    ) {
        return null;
    }

    $fields = [];

    foreach ( $status as $name => $value ) {
        if ( is_bool( $value ) ) {
            $value = $value
                ? __( 'Yes', 'innocode-simple-opcache-status' )
                : __( 'No', 'innocode-simple-opcache-status' );
        }

        if ( $name == 'scripts' ) {
            foreach ( $value as $script => $details ) {
                $value[ $script ] = print_r( $details, true );
            }
        }

        $fields[] = [
            'label'   => $name,
            'value'   => $value,
            'private' => $name == 'scripts',
        ];
    }

    return [
        'label'       => __( 'OPcache', 'innocode-simple-opcache-status' ),
        'description' => __( 'Shows status information about the cache.', 'innocode-simple-opcache-status' ),
        'fields'      => $fields,
    ];
}
