<?php
/**
 * @package Settings for wp-config
 * @todo    Place in `wp-config.php`
**/

// Debugging
define('WP_DEBUG',         false);
define('WP_DEBUG_LOG',     false);
define('WP_DEBUG_DISPLAY', false);
define('SAVEQUERIES',      false);



// Automatic Database Repair
// Don't need to login when enabled
// Then go to: http://example.com/wp-admin/maint/repair.php
define('WP_ALLOW_REPAIR', true);



// Disable Updates
define('WP_AUTO_UPDATE_CORE', false);

// Disable post revisions
define('WP_POST_REVISIONS',   false);

// Disable automatic trash deletion
// (int) Days: default is 30
define('EMPTY_TRASH_DAYS',    999999);

// Disable File Editing
define('DISALLOW_FILE_EDIT', true);



// Need to enter FTP info to update WordPress?
define('FTP_USER', 'username');
define('FTP_PASS', 'password');
define('FTP_HOST', 'localhost');



// Block External Requests
define('WP_HTTP_BLOCK_EXTERNAL', true);

// Allow external Request
define('WP_ACCESSIBLE_HOSTS', 'rpc.pingomatic.com');



// Multisite Stuff
define('WP_ALLOW_MULTISITE', true);
$base = '/wp/';
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'example.com');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
