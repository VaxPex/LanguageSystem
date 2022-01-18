<?php

declare(strict_types=1);

namespace VaxPex;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class LanguageSystem extends PluginBase{

	public function onEnable(){
		$this->saveKnownLanguages();
	}

	public function saveKnownLanguages(){
		$list = ["de_DE.json", "ru_RU.json"];
		foreach($list as $item => $asstr){
			$this->saveResource($asstr);
		}
	}

	public static function getPlayerLanguage(Player $player)
	{
		return $player->getLocale();
	}

	/**
	 * @throws \ErrorException
	 */
	public static function translateString(string $lang, string $k){
		if(!is_file($lang . ".json")){
			throw new \ErrorException("{$lang} is not a known language");
		}else{
			$config = new Config($lang . ".json");
			return $config->getNested($k);
		}
	}
}
