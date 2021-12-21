<?php
/**
 * @package Target a Specific Site
 * @todo    Place in `wp-config.php` with one of the options defined (below) and then add 
 * @todo    your logic to your theme like the example.
**/


/**
 * @uses If it's not defined, by default it will return `production`.
 * @uses Other possible options are:  [production, staging, development, local]
 **/
define( 'WP_ENVIRONMENT_TYPE', 'development' );


/**
 * Example
**/
if(wp_get_environment_type() === 'staging') {
    // Do stuff
} else {
    // Do something else
}
