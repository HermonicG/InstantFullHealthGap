<?php

namespace HermonicG;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\item\Item;
use pocketmine\item\ItemTypeIds;

class GappleListener implements Listener {
    public function onGapple(PlayerItemConsumeEvent $event)
    {
        $player = $event->getPlayer();
        $item = $event->getItem();

        if ($item = ItemTypeIds::GOLDEN_APPLE) {
            $player->setMaxHealth(20);
            $player->setHealth(20);
        }
    }
}