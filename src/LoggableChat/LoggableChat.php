<?php

namespace LoggableChat;

use pocketmine\plugin\PluginBase;

class LoggableChat extends PluginBase {
	
	public $listener;
	
	public function onLoad() {
		
	}
	
	public function onEnable() {
		$this->listener = new EventListener($this);
		$this->getServer()->getPluginManager()->registerEvents($this->listener, $this);
	}
	
	public function onDisable() {
		
	}
	
}