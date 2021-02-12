<?php

declare(strict_types=1);

namespace App\RealOOP\Zoo\Entities;

use App\RealOOP\Zoo\Abstracts\Fish;
use App\RealOOP\Zoo\Interfaces\ISwimable;

class Shark extends Fish implements ISwimable
{
    public function move($currentSpeed) : string
    {
        return "Your current speed $currentSpeed miles per hour";
    }

    public function countLimbs() : string
    {
        return "You have {$this->flippers} limbs";
    }

    public function eat() : string
    {
        return 'You started eating...';
    }

    public function sleep() : string
    {
        return 'You fell asleep';
    }

    public function abilityToSwim() : string
    {
        return 'You can swim';
    }
}