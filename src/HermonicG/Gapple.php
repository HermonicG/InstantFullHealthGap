<?php

namespace HermonicG;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;

class Gapple extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("Gapple Enabled!");
        $this->initListener();
    }

    public function initListener() {
        $this->getServer()->getPluginManager()->registerEvents(new GappleListener($this, $this->getServer()), $this);
    }

    public function onDisable(): void {
        $this->getLogger()->info("Gapple Disabled");
    }
}