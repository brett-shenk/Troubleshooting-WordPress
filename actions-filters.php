<?php
/**
 * @package List all actions & filters
 * @todo    Place temporarily in functions.php view the page and get your results
 * @todo    then remove it. This is very taxing and will output a massive JSON array
**/

add_action( 'all', 'troubleshoot_all_actions' );
function troubleshoot_all_actions() {
    static $pre = [];
    $filter = current_filter();
    
    // The filter your looking for
    if( 'pre_' === substr( $filter, 0, 4 ) ) {
        $pre[] = $filter;
    }
    if( 'shutdown' === $filter ) {
        var_dump( $pre );
    }
}
