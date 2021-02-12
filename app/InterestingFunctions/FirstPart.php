<?php

declare(strict_types=1);

namespace App\InterestingFunctions;

/**
 * Custom string reverse function without standard PHP functions(only isset, mb_strlen).
 *
 * @param string $string
 * @return string
 */
function customStringReverseFunction(string $string) : string {
    $reversedString = '';
    $stringLength = mb_strlen($string);
    for ($i = $stringLength; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }
    return $reversedString;
}

echo customStringReverseFunction('Developer');

