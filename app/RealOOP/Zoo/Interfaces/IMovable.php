<?php

declare(strict_types=1);

namespace App\RealOOP\Zoo\Interfaces;

interface IMovable extends ISurvivable
{
    public function countLimbs() : string;
}