# Troubleshooting WordPress

A collection of functions to help troubleshoot various things on WordPress. It ranges from helping you debug a script to targeting a specific page that doesn't have a specific function to hook into.

PHP: 5.6+<br>
WordPress 5.0+<br>
Tested with: WordPress 5.8

# Content

### [All Scripts and Styles](registered-style-script.php)
Lists all registered styles & scripts + their handle. You can use this handle to async / defer the script, or remove it. The script / css must be registered to be listed here.

### [Image Sizes](image-sizes.php)
Display all additional wordpress image sizes. Doesn't show default sizes [thumbnail, medium, large].

### [Only On This Page](current-page.php)
While using WordPress chances are you will need something on a specific page. Here's a handy snippet!

### [Check for Admin](current-page-admin.php)
Show / Hide something for a specific admin / editor.

### [Smarter Var Dump](v_dump.php)
A smarter `var_dump()` function. Write less code!

### [Specific Site](specific_site.php)
Get a specific site for 1 reason or another. For example get a different category ID for Production, Staging and Development.

### [Theme Directory](theme-directory.php)
Various methods to get to the site's directory.

### [Theme Data with WordPress](theme-data.php)
The function and how to use theme data in your WordPress Theme.

### [WP Config](wp-config.php)
Tips and tricks for the wp-config.php file of WordPress.
