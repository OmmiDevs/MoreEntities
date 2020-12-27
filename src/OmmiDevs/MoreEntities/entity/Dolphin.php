<?php

declare(strict_types=1);

namespace OmmiDevs\MoreEntities\entity;

use pocketmine\entity\Entity;

class Dolphin extends Entity
{
    const NETWORK_ID = self::DOLPHIN;

    public $width = 0.9;
    public $height = 0.6;

    public function getName(): string
    {
        return "Dolphin";
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
        return 2;
    }
}