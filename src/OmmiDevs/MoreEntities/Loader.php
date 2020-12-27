<?php

/**
 * Plugin Created By Ommi-Developers
 *
 * Codsxblastin, WhyMadDev and BigIce
 */

declare(strict_types=1);

namespace OmmiDevs\MoreEntities;

use pocketmine\plugin\PluginBase;
use pocketmine\entity\Entity;
use OmmiDevs\MoreEntities\entity\Sheep;
use OmmiDevs\MoreEntities\entity\Pig;
use OmmiDevs\MoreEntities\entity\ZombiePigman;
use OmmiDevs\MoreEntities\entity\Phantom;
use OmmiDevs\MoreEntities\entity\ShulkerBullet;
use OmmiDevs\MoreEntities\entity\ArmorStand;
use OmmiDevs\MoreEntities\entity\Dolphin;
use OmmiDevs\MoreEntities\entity\Guardian;

class Loader extends PluginBase
{

    public function onEnable()
    {
        # Normal Animals
        Entity::registerEntity(Sheep::class);
        Entity::registerEntity(Pig::class);

        # Monsters
        Entity::registerEntity(ZombiePigman::class);
        Entity::registerEntity(Phantom::class);

        # Swimming Animals
        Entity::registerEntity(Guardian::class);
        Entity::registerEntity(Dolphin::class);

        # Other Entities
        Entity::registerEntity(ShulkerBullet::class); # Important for something gotta make sure this works!
        Entity::registerEntity(ArmorStand::class);
    }

}
