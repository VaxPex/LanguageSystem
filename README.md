# LanguageSystem
you can use it as api

# Example
```php
// Import this
use VaxPex\LanguageSystem;

//Example
if(LanguageSystem::getPlayerLang($player) == "de_DE"){
  $player->sendMessage(LanguageSystem::translateString("de", "test")); //You need to add test to the de_DE.json file
}elseif(LanguageSystem::getPlayerLang($player) == "ru_RU"){
  $player->sendMessage(LanguageSystem::translateString("ru", "test")); //You need to add test to the de_DE.json file
}else{
  $player->sendMessage("test");
}
```
