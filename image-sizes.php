<?php
/**
 * @package 
 * @todo    Place in functions.php file
**/

global $_wp_additional_image_sizes;
print '<pre>';
print_r($_wp_additional_image_sizes);
print '</pre>';


// Example Output
// Array(
//     [1536x1536] => Array
//         (
//             [width] => 1536
//             [height] => 1536
//             [crop] => 
//         )

//     [2048x2048] => Array
//         (
//             [width] => 2048
//             [height] => 2048
//             [crop] => 
//         )

//     [featured-700] => Array
//         (
//             [width] => 700
//             [height] => 210
//             [crop] => 1
//         )

//     [featured-960] => Array
//         (
//             [width] => 960
//             [height] => 250
//             [crop] => 1
//         )
// )
