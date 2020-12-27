<?php

declare(strict_types=1);

namespace OmmiDevs\MoreEntities\entity;

use pocketmine\entity\Entity;

class ArmorStand extends Entity
{
    const NETWORK_ID = self::ARMOR_STAND;

    public $width = 0.5;
    public $height = 1.975;

    public function getName(): string
    {
        return "ArmorStand";
    }

    public function getDrops(): array
    {
        return [];
    }

    public function getMaxHealth(): int
    {
        return 1;
    }

    public function getXpDropAmount(): int
    {
        return 0;
    }
}