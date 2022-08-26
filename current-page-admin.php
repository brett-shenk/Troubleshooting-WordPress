<?php
/**
 * @package Check for Admin
 * @todo    Place as necessary
**/

if( is_admin() ){
    // WordPress Admin Only
}

if( isset( $_GET['elementor-preview'] ) ){
    // Elementor Preview Only
}

// TinyMCE Editor Only
add_action('before_wp_tiny_mce', 'custom_function');
add_action('after_wp_tiny_mce', 'custom_function');
