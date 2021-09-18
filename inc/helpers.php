<?php
/**
 * Various helper functions to make your life easier.
 *
 * @package strl
 * @since 1.0.0
 */

/**
 * A preformatted version of var_dump().
 *
 * @param mixed $variable The variable you'd like to dump.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_dump( $variable ) {
	echo '<pre>';
	var_dump( $variable ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_var_dump
	echo '</pre>';
}
