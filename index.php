<?php

declare(strict_types=1);

use App\RealOOP\Zoo\Entities\Shark;
use App\RealOOP\Zoo\Entities\Trout;

require_once 'vendor/autoload.php';

// side effect: change ini settings
ini_set('error_reporting', E_ALL);

$logOfActions = [];
$swimableAnimals = [];
$swimableAnimals[] = new Shark();
$swimableAnimals[] = new Trout();

/**
 * @param  array $swimableAnimals
 * @return void
 */
function letsSwim(array $swimableAnimals) : void {
    foreach ($swimableAnimals as $swimableAnimal) {
        $animal = get_class($swimableAnimal);
        $logOfActions[$animal] = 'How many limbs I have' . $swimableAnimal->countLimbs();
        $logOfActions[$animal] = 'Can I swim?'           . $swimableAnimal->abilityToSwim();
    }
}

letsSwim($swimableAnimals);
var_dump($logOfActions);