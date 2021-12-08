<?php
/**
 * @package Lists all registered styles & scripts + their handle
 * @todo    Place in functions.php
**/

global $enqueued_scripts;
global $enqueued_styles;

add_action( 'wp_print_scripts', 'troubleshoot_list_scripts', 999 );
function troubleshoot_list_scripts(){
    global $wp_scripts;
    global $enqueued_scripts;
    $enqueued_scripts = array();
    foreach ( $wp_scripts->queue as $handle ) {
        $enqueued_scripts[$handle] = $wp_scripts->registered[$handle]->src;
    }
}

add_action( 'wp_print_styles', 'troubleshoot_list_styles', 999 );
function troubleshoot_list_styles(){
    global $wp_styles;
    global $enqueued_styles;
    $enqueued_styles = array();
    foreach ( $wp_styles->queue as $handle ) {
        $enqueued_styles[$handle] = $wp_styles->registered[$handle]->src;
    }
}


/**
 * Get your results
**/
global $enqueued_scripts;
var_dump( $enqueued_scripts );
global $enqueued_styles;
var_dump( $enqueued_styles );
