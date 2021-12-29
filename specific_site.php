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




/**********************************************************************************/
/**
 * @package Other Useful Functions
 * @todo    A collection of other useful functions for finding what site you are on.
**/


/**
 * Theme URL
 * @uses Return your current theme directory.
 * @uses If using a child theme, will return that.
**/
define( 'THEME_DIR',  get_stylesheet_directory_uri() );

// Example
echo THEME_DIR;
// Will output: https://domain.com/wp-content/themes/your-theme-child




/**
 * Theme Parent URL
 * @uses Return your current theme directory.
 * @uses If using a child theme, this will return your parent theme.
**/
define( 'PARENT_THEME',  get_template_directory() );

// Example
echo PARENT_THEME;
// Will output: https://domain.com/wp-content/themes/your-theme




/**
 * Absolute Theme URL
 * @uses Return your current directory.
 * @uses Some functions don't like relative paths.
**/
define( 'THEME_ABS',  dirname( __FILE__ ) );

// Example
echo THEME_ABS;
// Will output: /dom12345/wp-content/themes/your-theme-child




/**
 * Site URL
 * @uses Returning the domain of the site in URL format.
 * @uses Note the lack of trailing slash. Adding it inside home_url('/') will add it.
**/

// Example
echo esc_url( home_url() );
// Will output: https://domain.com
