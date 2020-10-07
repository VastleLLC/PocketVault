# PocketVault

<p align="center">
  <img src="https://proxy.spigotmc.org/163fce9910904fe8b5c8e068e48ed7a46aa43dd9?url=https%3A%2F%2Fi.imgur.com%2Fq1xA4HN.png">
</p>

**PocketVault** is a Economy, Chat, Permissions API to give developers easy access to hook into these
systems without having to depending on the individual plugin them self,
PocketVault attempts to solve to simplify the process for both the user and the developer.


Retrieves someones balance using the PocketVault economy provider API
```
// Get an instance of the PocketVault
$vault = PocketVault::getInstance();

/**
* Assuming $player is instance of a /pocketmine/Player object
*/
$money = $vault->getProviderManager()->getProvider(ProviderName::ECONOMY)->getBalance($player);

/**
* This is just something basic, something more advance would include checking if the server
* have a economy plugin registered/if it's enabled or not, if not, yield something else.
*/
```

## Other
You can check out the <a href="https://github.com/xZeroMCPE/PocketVault/wiki">WIKI</a> for more information how to implement PocketVault into your plugin