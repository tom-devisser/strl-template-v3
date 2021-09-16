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
strl_dump( $variable ) {
	echo '<pre>'; // phpcs:ignore
	var_dump( $variable ); // phpcs:ignore
	echo '</pre>';
}
