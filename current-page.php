<?php
/**
 * @package Only On This Page
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
