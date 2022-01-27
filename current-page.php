<?php
/**
 * @package Only on this page
 * @todo    Place where needed
**/

// Get page URL and break it into an array we can use.. without blanks
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$url = array_filter( $url );

// Get the last URL of the array. AKA the page they were on
$single_url = array_slice($url, -1)[0];


/**
 * The output for a URL like:
 * https://<your-site-domain.com>/my-account/my-membership/
**/

// var_dump( $single_url );
// string(13) "my-membership"

// var_dump( $url );
// array(3) {
//     [0]=>
//     string(26) "<your-site-domain.com>"
//     [1]=>
//     string(10) "my-account"
//     [2]=>
//     string(13) "my-membership"
// }


$url_index = array_search('<your-site-domain.com>', $url);
if($url_index !== FALSE){
	unset($url[$url_index]);
}
$url = array_values( $url );

// var_dump( $url );
// array(3) {
//     [0]=>
//     string(10) "my-account"
//     [1]=>
//     string(13) "my-membership"
// }




/**********************************************************************************/
/**
 * @package More Path variables
 * @todo    Place where needed
**/

// server protocol
$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';

// domain name
$domain = $_SERVER['SERVER_NAME'];

// server port
$port = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";

// put them all together to get the complete base URL
$url = "${protocol}://${domain}${disp_port}";

echo $url; // = http://example.com/




/**********************************************************************************/
/**
 * @package Even More Path variables
 * @todo    Place where needed
**/

// Get file paths
echo 'basename(dirname(__FILE__)) = ' . basename(dirname(__FILE__)) . "\n"; // = simple-ajax-chat
echo '$_SERVER["PHP_SELF"] = '        . $_SERVER["PHP_SELF"]        . "\n"; // = /wp-admin/plugins.php
echo '$_SERVER["DOCUMENT_ROOT"] = '   . $_SERVER["DOCUMENT_ROOT"]   . "\n"; // = /var/www/path/example.com/httpdocs
echo 'dirname(__FILE__) = '           . dirname(__FILE__)           . "\n"; // = /var/www/path/example.com/httpdocs/wp-content/plugins/simple-ajax-chat
echo 'getcwd() = '                    . getcwd()                    . "\n"; // = /var/www/path/example.com/httpdocs/wp-admin
echo '__FILE__ = '                    . __FILE__                    . "\n"; // = /var/www/path/example.com/httpdocs/wp-content/plugins/simple-ajax-chat/simple-ajax-chat.php

// Get plugin paths
echo 'dirname(plugin_basename(__FILE__)) = ' . dirname(plugin_basename(__FILE__)) . "\n"; // = simple-ajax-chat
echo 'plugin_basename(dirname(__FILE__)) = ' . plugin_basename(dirname(__FILE__)) . "\n"; // = simple-ajax-chat
echo 'plugin_basename(__FILE__) = '          . plugin_basename(__FILE__)          . "\n"; // = simple-ajax-chat/simple-ajax-chat.php
echo 'WP_PLUGIN_DIR = '                      . WP_PLUGIN_DIR                      . "\n"; // = /var/www/path/example.com/httpdocs/wp-content/plugins
echo 'plugin_dir_path(__FILE__) = '          . plugin_dir_path(__FILE__)          . "\n"; // = /var/www/path/example.com/httpdocs/wp-content/plugins/simple-ajax-chat/

// Get plugin URLs
echo 'plugins_url()'                                   . plugins_url()                                   . "\n"; // = http://example.com/wp-content/plugins
echo 'plugin_dir_url(__FILE__) = '                     . plugin_dir_url(__FILE__)                        . "\n"; // = http://example.com/wp-content/plugins/simple-ajax-chat/
echo 'plugins_url("images/wp.png", __FILE__)'          . plugins_url('images/wp.png', __FILE__)          . "\n"; // = http://example.com/wp-content/plugins/simple-ajax-chat/images/wp.png
echo 'plugins_url("images/wp.png", dirname(__FILE__))' . plugins_url('images/wp.png', dirname(__FILE__)) . "\n"; // = http://example.com/wp-content/plugins/images/wp.png
