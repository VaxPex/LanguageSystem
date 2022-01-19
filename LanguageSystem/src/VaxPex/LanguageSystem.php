<?php

declare(strict_types=1);

namespace VaxPex;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\utils\Config;

class LanguageSystem
{

	public static function getPlayerLanguage(Player $player)
	{
		return $player->getLocale();
	}

	/**
	 * @throws \ErrorException
	 */
	public static function translateString($path, string $lang, string $k){
		if(!is_file($path . $lang . ".json")){
			throw new \ErrorException("{$lang} is not a known language");
		}else{
			$config = new Config($path . $lang . ".json");
			return $config->getNested($k);
		}
	}
}
