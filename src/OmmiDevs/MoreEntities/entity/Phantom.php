<?php

declare(strict_types=1);

namespace OmmiDevs\MoreEntities\entity;

use pocketmine\entity\Monster;
use pocketmine\item\Item;

class Phantom extends Monster
{
    const NETWORK_ID = self::PHANTOM;

    public $width = 0.9;
    public $height = 0.5;

    public function getName(): string
    {
        return "Phantom";
    }

    public function getDrops(): array
    {
        $random = rand(1, 2);
        $drops = [];
        array_push($drops, Item::get(Item::PHANTOM_MEMBRANE, 0, $random));
        if($this->isOnFire()){
            array_push($drops, Item::get(Item::PHANTOM_MEMBRANE, 0, 0));
        }
        return $drops;
    }

    public function getMaxHealth(): int
    {
        return 10;
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}