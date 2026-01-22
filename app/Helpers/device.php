<?php

/**
 * Created by UniverseCode.
 */

namespace App\Helpers;




if (!function_exists('isMobileDevice')) {
    function isMobileDevice()
    {
        return preg_match(
            '/android|iphone|ipad|ipod|blackberry|iemobile|opera mini/i',
            request()->header('User-Agent')
        );
    }
}