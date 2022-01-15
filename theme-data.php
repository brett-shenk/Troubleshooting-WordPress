<?php
/**
 * @package Displaying Theme Data with WordPress
 * @todo    Use where needed
**/

// Functions to use
wp_get_theme();


// Example
$my_theme = wp_get_theme();
echo esc_html( $my_theme->get( 'TextDomain' ) );
// output:  mytheme


// Example Output
var_dump( wp_get_theme() );
// object(WP_Theme)[916]
//     public 'update' => boolean false
//     private 'theme_root' => string 'home/path/wp-content/themes' (length=77)
//     private 'headers' => 
//         array (size=11)
//             'Name' => string 'mytheme' (length=7)
//             'ThemeURI' => string 'http://example.com/' (length=22)
//             'Description' => string 'Description' (length=11)
//             'Author' => string 'Something Here' (length=14)
//             'AuthorURI' => string 'http://example.com/' (length=22)
//             'Version' => string '1.0.0' (length=5)
//             'Template' => string '' (length=0)
//             'Status' => string '' (length=0)
//             'Tags' => string 'custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready' (length=98)
//             'TextDomain' => string 'mytheme' (length=7)
//             'DomainPath' => string '' (length=0)
//     private 'headers_sanitized' => null
//     private 'name_translated' => null
//     private 'errors' => null
//     private 'stylesheet' => string 'mytheme' (length=7)
//     private 'template' => string 'mytheme' (length=7)
//     private 'parent' => null
//     private 'theme_root_uri' => null
//     private 'textdomain_loaded' => null
//     private 'cache_hash' => string 'ca9dd01f01f2a5cb4616a776eff52690' (length=32)
