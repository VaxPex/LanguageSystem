<a href="https://youtu.be/Omu-hsC5ghQ"><img src="https://images.app.goo.gl/h6T1qbc7bcp5DhuQ6"></a>

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
