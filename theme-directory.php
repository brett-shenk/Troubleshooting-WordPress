<?php
/**
 * @package Various methods to get to the site's directory.
 * @todo    Place in functions.php as define constant's or use the standalone functions.
**/

/**
 * Absolute path
 * 
 * @uses If using a child theme, it will get that directory.
**/
define( 'THEME_DIR',  get_stylesheet_directory_uri() );
// Ex: https://dev.artistsnetwork.com/wp-content/themes/buddyboss-theme-child

/**
 * Relative path
 * 
 * @uses Will get the current relative directory of the file you are in.
 * @uses Some functions don't like to be used as absolute paths.
**/
define( 'THEME_REL',  dirname( __FILE__ ) );
// Ex: /dom38860/wp-content/themes/buddyboss-theme-child

/**
 * Site URL
 * 
 * @uses Note the lack of trailing slash. Adding it inside home_url('/') will add it.
**/
// esc_url( home_url() );
// EX: https://dev.artistsnetwork.com
