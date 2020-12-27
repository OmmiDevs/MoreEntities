<?php

declare(strict_types=1);

namespace OmmiDevs\MoreEntities\entity;

use pocketmine\entity\Entity;
use pocketmine\item\Item;

class Guardian extends Entity
{
    const NETWORK_ID = self::GUARDIAN;

    public $width = 0.85;
    public $height = 0.85;

    public function getName(): string
    {
        return "Guardian";
    }

    public function getDrops(): array
    {
        $random = rand(0,3);
        $drops = [];
        array_push($drops, Item::get(Item::PRISMARINE_SHARD, 0, $random));
        array_push($drops, Item::get(Item::PRISMARINE_CRYSTALS, 0, $random));
        if($this->isOnFire()){
            array_push($drops, Item::get(Item::COOKED_FISH, 0, $random));
        }else{
            array_push($drops, Item::get(Item::RAW_FISH, 0, $random));
        }
        return $drops;
    }

    public function getMaxHealth(): int
    {
        return 20;
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}