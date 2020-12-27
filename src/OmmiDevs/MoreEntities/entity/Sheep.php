<?php

declare(strict_types=1);

namespace OmmiDevs\MoreEntities\entity;

use pocketmine\entity\Animal;
use pocketmine\item\Item;

class Sheep extends Animal
{
    const NETWORK_ID = self::SHEEP;

    public $width = 0.9;
    public $height = 1.4;

    public function getName(): string
    {
        return "Sheep";
    }

    public function getDrops(): array
    {
        $random = rand(1,2);
        $drops = [];
        array_push($drops, Item::get(Item::WOOL, 0, 1));
        if($this->isOnFire()){
            array_push($drops, Item::get(Item::MUTTON_COOKED, 0, $random));
        }else{
            array_push($drops, Item::get(Item::MUTTON_RAW, 0, $random));
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
