<?php

namespace WelcomeOwner;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\permission\ServerOperator;
use pocketmine\Player;
use pocketmine\Server;

class MainClass extends PluginBase implements Listener{
	public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
		if(!file_exists($this->getDataFolder() . "config.yml")){
			@mkdir($this->getDataFolder());
			file_put_contents($this->getDataFolder() . "config.yml",$this->getResource("config.yml"));
		}
	}
    public function onJoin(PlayerJoinEvent $event){
		  $player = $event->getPlayer();
          $owner = $this->getConfig()->get("Owner");
	  	$name = $player->getDisplayName();
	  	if($name == $owner){
		  	$this->getServer()->broadcastMessage("The server owner has joined the game.");
	  	}else{
			
	  	}
    }
}
