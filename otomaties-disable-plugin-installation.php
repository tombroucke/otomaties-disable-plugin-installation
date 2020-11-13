<?php
/**
 * Plugin Name:     Otomaties Disable Plugin Installation
 * Description:     Disable plugin installation.
 * Author:          Tom Broucke
 * Author URI:      https://tombroucke.be
 * Text Domain:     otomaties-disable-plugin-installation
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package Otomaties\Disable_Plugin_Installation
 */

add_filter(
	'user_has_cap',
	function( $allcaps, $cap, $args, $user ) {
		global $pagenow;
		if ( 'plugin-install.php' != $pagenow ) {
			$allcaps['install_plugins'] = 0;
		}
		return $allcaps;
	},
	10,
	4
);
