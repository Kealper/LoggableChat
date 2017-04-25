<?php

namespace LoggableChat;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCommandPreprocessEvent;

class EventListener implements Listener {
	
	private $plugin;
	
	public function __construct(LoggableChat $plugin) {
		$this->plugin = $plugin;
	}
	
	public function onPlayerCommandPreprocessEvent(PlayerCommandPreprocessEvent $event) {
		$message = $event->getMessage();
		if (substr($message, 0, 1) === "/") {
			$this->plugin->getServer()->getLogger()->info($event->getPlayer()->getDisplayname() . " issued server command: " . $message);
		} else {
			$this->plugin->getServer()->getLogger()->info($event->getPlayer()->getDisplayname() . ": " . $message);
		}
	}
	
}