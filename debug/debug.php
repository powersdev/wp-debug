<?php
/**
 * Debug Plugin.
 *
 * @package powersdev
 * @subpackage debug
 */

if ( ! class_exists( 'Powersdev\Debug\Plugin' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';

	new Powersdev\Debug\Plugin();
}
