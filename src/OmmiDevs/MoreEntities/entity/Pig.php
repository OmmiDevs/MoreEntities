<?php

declare(strict_types=1);

namespace OmmiDevs\MoreEntities\entity;

use pocketmine\entity\Animal;
use pocketmine\item\item;

class Pig extends Animal
{
    const NETWORK_ID = self::PIG;

    public $width = 0.9;
    public $height = 0.9;

    public function getName(): string
    {
        return "Pig";
    }

    public function getDrops(): array
    {
        $random = rand(1,2);
        $drops = [];
        if($this->isOnFire()){
            array_push($drops, Item::get(Item::COOKED_PORKCHOP, 0, $random));
        }else{
            array_push($drops, Item::get(Item::RAW_PORKCHOP, 0, $random));
        }
        return $drops;
    }

    public function getMaxHealth(): int
    {
        return 8;
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}