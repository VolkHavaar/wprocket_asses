<?php 
// Adjust path if needed as we're using server cronjob
$path = preg_replace('/wp-content.*$/','',__DIR__);
// Load WordPress.
require($path.'wp-load.php');

// Clear cache
if ( function_exists( 'rocket_clean_domain' ) ) {
	rocket_clean_domain();
 }

// Clear minified CSS and JavaScript files.
if ( function_exists( 'rocket_clean_minify' ) ) {
	rocket_clean_minify();
}
