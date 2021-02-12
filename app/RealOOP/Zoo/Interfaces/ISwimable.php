<?php

declare(strict_types=1);

namespace App\RealOOP\Zoo\Interfaces;

interface ISwimable extends IMovable
{
    public function abilityToSwim() : string;
}