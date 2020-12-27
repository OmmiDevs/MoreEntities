<?php

declare(strict_types=1);

namespace OmmiDevs\MoreEntities\entity;

use pocketmine\entity\Entity;

class ShulkerBullet extends Entity
{
    const NETWORK_ID = self::SHULKER_BULLET;

    public $width = 0.3125;
    public $height = 0.3125;

    public function getName(): string
    {
        return "ShulkerBullet";
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