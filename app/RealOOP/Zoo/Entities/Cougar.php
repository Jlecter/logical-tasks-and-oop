<?php

declare(strict_types=1);

namespace App\RealOOP\Zoo\Entities;

use App\RealOOP\Zoo\Abstracts\Animal;
use App\RealOOP\Zoo\Interfaces\ISwimable;

class Cougar extends Animal implements ISwimable
{
    public function move($currentSpeed) : string
    {
        return "Your current speed $currentSpeed miles per hour";
    }

    public function countLimbs() : string
    {
        return "You have {$this->legs} limbs";
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