<?php

namespace HelloOwner;

use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;

class MainClass extends PluginBase implements Listener {
  public function onEnable(){
    $this->saveDefaultConfig();
  }
  public function onDisable(){
    //empty
  }
  
  public function onJoin(PlayerJoinEvent $event){
    $name = $player->getName();
    $owner = $this->getConfig->get("Owner");
    $coowner = $this->getConfig->get("CoOwner");
    if($name == $owner){
      $this->broadcastMessage("The server Owner has joined the game.");
    }elseif($name == $coowner){
      $this->broadcastMessage("The server Co Owner has joined the game.");
    }
  }
}
