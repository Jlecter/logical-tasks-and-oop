<?php

declare(strict_types=1);

namespace App\InterestingFunctions;

/**
 * Function to get mirror string.
 *
 * @param string $string
 * @return string
 */
function getMirrorOfString(string $string) : string {
    $reverseAlphabet = "zyxwvutsrqponmlkjihgfedcba";
    $length = mb_strlen($string);
    $answer = "";
    for ($i = 0; $i < $length; $i++){
        $answer = $answer.$reverseAlphabet[
           ord($string[$i])- ord('a')
        ];
    }
    return $answer;
}

$str = "developer";
$answer = getMirrorOfString($str);
echo $answer;

/**
 * Dev comment: Sorry, firstly read as lower string. But I can't yet come up with an algorithm for solving strings of different registers.
 */