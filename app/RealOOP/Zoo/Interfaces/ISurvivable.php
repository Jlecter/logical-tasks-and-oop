<?php

declare(strict_types=1);

namespace App\RealOOP\Zoo\Interfaces;

interface ISurvivable
{
    public function eat() : string;
    public function sleep() : string;
    public function move(int $speed) : string;
}