<a href="https://youtu.be/Omu-hsC5ghQ">Video</a>
# API
```php
// Import this
use VaxPex\LanguageSystem;

//Example
if($player->getLocale() == "de_DE"){
  //You need to add create de_DE.json and put test to the file
  $player->sendMessage(LanguageSystem::translate(/*path*/$this->getDataFolder(), /*langname*/"de_DE", /*whattoget*/"test"));
}elseif($player->getLocale() == "ru_RU"){
  //You need to add create ru_RU.json and put test to the file
  $player->sendMessage(LanguageSystem::translate(/*path*/$this->getDataFolder(), /*langname*/"ru_RU", /*whattoget*/"test"));
}else{
  //Not a known language or it can be used for eng
  $player->sendMessage("test");
}
```
#### You can also add any lang you want at any path
