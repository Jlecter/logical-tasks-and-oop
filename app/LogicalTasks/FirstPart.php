<?php

declare(strict_types=1);

namespace App\LogicalTasks;

/**
 * Function to remove duplicate parentheses.
 *
 * @param string $string
 * @return string|string[]|null
 */
function truncateParenthesis(string $string) : string {
    return preg_replace('/(\)){2,}/', '$1', $string);
}

echo truncateParenthesis(':))) :))))))');
