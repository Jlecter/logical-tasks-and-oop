<?php

declare(strict_types=1);

namespace App\LogicalTasks;

// Recommend for testing MAX_AVAILABLE = 5000
define('MAX_AVAILABLE', 999999);

/**
 * Function to get all lucky numbers from 000001 to 999999.
 *
 * @return array
 */
function getAllLuckyNumbers() : array {
    $arrayOfLuckyNumbers = [];
    for ($i = 1; $i <= MAX_AVAILABLE; $i++) {
        $str = (string) $i;
        if (strlen($str) < 6) {
            for ($k = strlen($str); $k < 6; $k++) {
                $str = '0' . $str;
            }
        }
        $part1 = (int) $str[0] + (int) $str[1] + (int) $str[2];
        $part2 = (int) $str[3] + (int) $str[4] + (int) $str[5];

        if ($part1 === $part2) {
            $arrayOfLuckyNumbers[] = $str;
        }
    }
    return $arrayOfLuckyNumbers;
}

var_dump(getAllLuckyNumbers());