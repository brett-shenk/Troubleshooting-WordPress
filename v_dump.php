<?php
/**
 * @package Smarter var_dump function
 * @todo    Place in functions.php
 * 
 * @param mixed[]   $output     Get more info about the array, variable or object
 * @param bool      $hide       Optional. Weather its visible on the page or not
**/

function v_dump( $output, $hide = true ){
    if($hide){
        echo '<!--';
    }

    echo '<pre>';
    var_dump( $output );
    echo '</pre>';

    if($hide){
        echo '-->';
    }
}
