<?php

declare(strict_types=1);

namespace App\RealOOP\Zoo\Interfaces;

interface IFlyable extends ISwimable
{
    public function abilityToFly() : string;
}