<?php

declare(strict_types=1);

namespace VaxPex;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\utils\Config;

class LanguageSystem
{
	public static function translate(string $path, string $lang, string $k, bool $nested){
		if(!is_file($path . $lang . ".json")){
			throw new \ErrorException("$lang is not a known language");
		}else{
			$config = new Config($path . $lang . ".json");
			return $nested === true ? $config->getNested($k) : $config->get($k);
		}
	}
}
