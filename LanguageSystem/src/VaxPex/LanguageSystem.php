<?php

declare(strict_types=1);

namespace VaxPex;

use pocketmine\event\Listener;
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
		if(!is_file(self::getInstance()->getDataFolder().$lang.".json")){
			throw new \ErrorException("cant find {$lang} as a known language");
		}else{
			$config = new Config(self::getInstance()->getDataFolder() . "{$lang}.json");
			return $config->getNested($k);
		}
	}
}
