# LanguageSystem
you can use it as api

# API
```php
// Import this
use VaxPex\LanguageSystem;

//Example
//You need to add test to the both of lang files on the data of the plugin
if(LanguageSystem::getPlayerLang($player) == "de_DE"){
  $player->sendMessage("de", LanguageSystem::translateString("test"));
}elseif(LanguageSystem::getPlayerLang($player) == "ru_RU"){
  $player->sendMessage("ru", LanguageSystem::translateString("test"));
}else{
  $player->sendMessage("test");
}
```
