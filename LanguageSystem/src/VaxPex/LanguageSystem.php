<?php

declare(strict_types=1);

namespace VaxPex;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\SingletonTrait;

class LanguageSystem extends PluginBase implements Listener{

	use SingletonTrait;

	public function onLoad(){
		self::setInstance($this);
	}

	public function onEnable(){
		$this->saveKnownLanguages();
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public static function getPlayerLanguage(Player $player)
	{
		return $player->getLocale();
	}

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		if(self::getPlayerLanguage($player) == "de_DE"){
			$player->sendMessage(self::translateString("de", "lang_change") . ": " . self::getPlayerLanguage($player));
		}else
		if(self::getPlayerLanguage($player) == "ru_RU"){
			$player->sendMessage(self::translateString("ru", "lang_change") . ": " . self::getPlayerLanguage($player));
		}else
		$player->sendMessage("Your language has been changed to: " . $player->getLocale());
	}

	public function saveKnownLanguages(){
		$list = ["de_DE.json", "ru_RU.json"];
		foreach($list as $item => $asstr){
			$this->saveResource($asstr);
		}
	}

	public static function translateString(string $lang, string $k){
		if($lang == "de"){
			$config = new Config(self::getInstance()->getDataFolder() . "de_DE.json");
			return $config->get($k);
		}
		if($lang == "ru"){
			$config = new Config(self::getInstance()->getDataFolder() . "ru_RU.json");
			return $config->get($k);
		}
	}
}