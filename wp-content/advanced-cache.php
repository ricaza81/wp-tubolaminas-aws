<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = '/home/ubuntu/wp-tubolaminas-aws/wp-content/cache/wp-rocket/';
$rocket_config_path = '/home/ubuntu/wp-tubolaminas-aws/wp-content/wp-rocket-config/';

if ( file_exists( '/home/ubuntu/wp-tubolaminas-aws/wp-content/plugins/wp-rocket/inc/front/process.php' ) ) {
	include( '/home/ubuntu/wp-tubolaminas-aws/wp-content/plugins/wp-rocket/inc/front/process.php' );
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}