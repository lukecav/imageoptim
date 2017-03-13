
<?php
/*
Plugin Name: wp-usergen-cli
Plugin URI:  https://github.com/jonathanbossenger/imageoptim
Description: A WP-CLI addon command that will optimize site images using jpegoptim and optipng.
Version: 1.0.0
Author:      Jonathan Bossenger and Luke Cavanagh
Author URI:  https://github.com/jonathanbossenger/imageoptim
License:     GPLv2+
*/
/**
 * Load extension if WP CLI exists.
 *
 * @return void
 * @since 1.0.0
 */
 function wp_imageoptim_cli_load() {
	if ( defined( 'WP_CLI' ) && WP_CLI ) {
		include dirname(__FILE__) . '/cli.php';
	}
}
add_action( 'plugins_loaded', 'wp_imageoptim_cli_load' );
