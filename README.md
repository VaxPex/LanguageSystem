<img src="https://youtu.be/Omu-hsC5ghQ">

# Example
```php
// Import this
use VaxPex\LanguageSystem;

//Example
if(LanguageSystem::getPlayerLang($player) == "de_DE"){
  $player->sendMessage(LanguageSystem::translateString("de_DE", "test")); //You need to add test to the de_DE.json file
}elseif(LanguageSystem::getPlayerLang($player) == "ru_RU"){
  $player->sendMessage(LanguageSystem::translateString("ru_RU", "test")); //You need to add test to the ru_RU.json file
}else{
  $player->sendMessage("test");
}
```
#### You can also add any lang you want at the plugin_data/LanguageSystem
