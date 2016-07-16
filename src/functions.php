<?php

/**
 * String functions
 *
 * @package   Baguette\StrFunctions
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 BaguetteHQ
 * @license   Apache-2.0
 */

if (!function_exists('str_start_with')) {
    /**
     * @param  string $haystack
     * @param  string $needle
     * @return bool
     */
    function str_start_with($haystack, $needle)
    {
        return isset($needle) && strncmp($haystack, $needle, strlen($needle)) === 0;
    }
}

if (!function_exists('str_end_with')) {
    /**
     * @param  string $haystack
     * @param  string $needle
     * @return bool
     */
    function str_end_with($haystack, $needle)
    {
        return $needle === '' || substr_compare($haystack, $needle, -strlen($needle)) === 0;
    }
}
