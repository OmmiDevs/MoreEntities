<?php

declare(strict_types=1);

namespace OmmiDevs\MoreEntities\entity;

use pocketmine\entity\Monster;

class ZombiePigman extends Monster
{
    const NETWORK_ID = self::ZOMBIE_PIGMAN;

    public $width = 0.6;
    public $height = 1.95;

    public function getName(): string
    {
        return "ZombiePigman";
    }

    public function getDrops(): array
    {
        return [];
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