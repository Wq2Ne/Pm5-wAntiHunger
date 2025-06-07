<?php

namespace wq2ne\AntiHunger;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("wAntiHunger enabled");
    }

    public function AntiHunger(PlayerExhaustEvent $event)
    {
        $event->cancel();
    }

}


