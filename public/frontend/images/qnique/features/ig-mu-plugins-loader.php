<?php
/*
Plugin Name:  MU-Plugins Loader
Description: This is a plugin loader which scans all plugin folders in MU-PLUGINs directory and loads all plugin bootstrap files in those folders. For this to work, a plugin's bootstrap file should be named same as plugin folder name with a '.php' extension
Version: 1.0.0
Author: phillip madsen
Author URI: http://www.affordableprogrammer.com
License: GNU GPL 2
*/

function ig_mu_plugins_loader() {
	if( ! defined( 'WPMU_PLUGIN_DIR' ) ) {
		return;
	}

	$mu_plugins_dirs = array_filter( scandir( WPMU_PLUGIN_DIR ) );

	$non_dirs = array(
		'.',
		'..',
		'.DS_Store',
		);

	//strip out non-dirs
	for( $i = 0; $i < count( $non_dirs ); $i++ ) {
		$not_dir_key = array_search( $non_dirs[ $i ], $mu_plugins_dirs );

		if( $not_dir_key !== false ) {
			unset( $mu_plugins_dirs[ $not_dir_key ] );
		}

		unset( $not_dir_key );
	}

	unset( $non_dirs );

	if( empty( $mu_plugins_dirs ) ) {
		return;
	}

	sort( $mu_plugins_dirs );

	//load up mu-plugins from each valid directory
	foreach( $mu_plugins_dirs as $dir ) {
		$plugin_dir = trailingslashit( WPMU_PLUGIN_DIR ) . $dir;
		$plugin_file = trailingslashit( $plugin_dir ) . $dir . '.php';

		if( is_dir( $plugin_dir ) && file_exists( $plugin_file ) ) {
			require_once( $plugin_file );
		}

		unset( $plugin_file, $plugin_dir );
	}
}

ig_mu_plugins_loader();


//EOF

function colourBrightness($hex, $percent) {
  // Work out if hash given
	$hash = '';
	if (stristr($hex,'#')) {
		$hex = str_replace('#','',$hex);
		$hash = '#';
	}
  /// HEX TO RGB
	$rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
  //// CALCULATE
	for ($i=0; $i<3; $i++) {
    // See if brighter or darker
		if ($percent > 0) {
      // Lighter
			$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
		} else {
      // Darker
			$positivePercent = $percent - ($percent*2);
			$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
		}
    // In case rounding up causes us to go to 256
		if ($rgb[$i] > 255) {
			$rgb[$i] = 255;
		}
	}
  //// RBG to Hex
	$hex = '';
	for($i=0; $i < 3; $i++) {
    // Convert the decimal digit to hex
		$hexDigit = dechex($rgb[$i]);
    // Add a leading zero if necessary
		if(strlen($hexDigit) == 1) {
			$hexDigit = "0" . $hexDigit;
		}
    // Append to the hex string
		$hex .= $hexDigit;
	}
	return $hash.$hex;
}

// if (!function_exists('html_minify_buffer')){
// 	function html_minify_buffer($html)
// 	{
// 	// Duplicate library may be in use elsewhere
// 		if (!function_exists('absolute_to_relative_url'))
// 		{
// 			require_once 'absolute-to-relative-urls.php';
// 		}

// 	//return new HTML_Minify($html);
// 	}

// }

// ob_start('html_minify_buffer');