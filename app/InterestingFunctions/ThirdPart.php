<?php

declare(strict_types=1);

namespace App\InterestingFunctions;

use RecursiveArrayIterator;
use RecursiveIteratorIterator;

/**
 * Function to get sum of all array elements, the array can be a nested array.
 *
 * @param array $array
 * @return int
 */
function getSum(array $array) : int {
    $sum = 0;
    $iteratorObj = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
    foreach($iteratorObj as $value) {
        $sum += $value;
    }
    return $sum;
}

/**
 * Function analog without iterator but with standard function is_array().
 * @param $array
 * @return int|mixed
 */
function getSumRecursive($array){
    $sum = 0;
    foreach($array as $key => $value){
        if (is_array($value)){
            $sum += getSumRecursive($value);
        }else {
            $sum += $value;
        }
    }
    return $sum;
}

$array = [
  [1, 2], 3, 4, [10, [15, 25]]
];
echo getSum($array) . '<br>';
echo getSumRecursive($array);