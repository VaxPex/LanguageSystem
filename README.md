<a href="https://youtu.be/Omu-hsC5ghQ">Video</a>
# API
```php
// Import this
use VaxPex\LanguageSystem;

//Example
if(LanguageSystem::getPlayerLang($player) == "de_DE"){
  //You need to add test to the de_DE.json file
  $player->sendMessage(LanguageSystem::translateString($this->getDataFolder(), "de_DE", "test"));
}elseif(LanguageSystem::getPlayerLang($player) == "ru_RU"){
  //You need to add test to the ru_RU.json file
  $player->sendMessage(LanguageSystem::translateString($this->getDataFolder(), "ru_RU", "test"));
}else{
  $player->sendMessage("test");
}
```
#### You can also add any lang you want at any path
