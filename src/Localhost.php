<?php
/**
 * Localhost
 *
 * @since   1.0.0
 * @package Localhost
 */

namespace Localhost;

/**
 * Localhost.
 *
 * @since 1.0.0
 */
class Localhost {

	/**
	 * Localhost initializer.
	 *
	 * @param Array $whitelist Local IPs List.
	 * @return Boolean
	 * @since 1.0.0
	 */
	public static function isIt( $whitelist = [ '127.0.0.1', '::1' ] ) {
			$ip = isset( $_SERVER['REMOTE_ADDR'] ) ? $_SERVER['REMOTE_ADDR'] : '';
			return in_array( $ip, $whitelist, true );
	}
}
