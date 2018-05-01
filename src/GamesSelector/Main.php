<?php

namespace GamesSelector;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\inventory\BaseInventory;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\inventory\Inventory;
use pocketmine\event\player\PlayerInteractEvent;
class Main extends PluginBase implements Listener {
	
public function onEnable(): void {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Plugin has been enabled.");
}
      public function onJoin(PlayerJoinEvent $ev) {
	      $player = $ev->getPlayer();
	      $player->getInventory()->clearAll();
	      $inventory = $player->getInventory();
              $player->getInventory()->setItem(2, Item::get(347)->setCustomName("§a§lGames Selector\n§5§lSelect a Game to play!\n(§bTap me!)"));
      }
      public function onInteract(PlayerInteractEvent $ev) {
	   $player = $ev->getPlayer();
           $name = $player->getName();
       $item = $ev->getItem();
          if($item->getCustomName() == "§a§lGames Selector!\n§5Select a Game to play!\n(§bTap me!)"){
              
            $player->getInventory()->clearAll();
            $player->getInventory()->setSize(9);
            $player->getInventory()->setItem(0, Item::get(397, 3)->setCustomName("§6Murder§bMystery\n§bThere's one murder, one bystanderd, and everyone else is innocent.\n§aObjectives:\n§bMurder - §3Has to kill everyone to win.\n§cBystanderd - §4Has a gun, they're suppose to kill the murderer to win.\n§dInnocent - §5Make sure you don't get killed.\n§dComing Soon!"));
            $player->getInventory()->setItem(2, Item::get(261)->setCustomName("§6Sky§bWars\n§bYou're in the sky, you have to:\n§cLoot chests, Get good loot\n§dand kill players!\n§eLast man standing wins!\n§1Coming Soon."));
            $player->getInventory()->setItem(4, Item::get(260)->setCustomName("§6Survival§bGames\n§bYou're in a survival area, filled with chests\n§cFilled with Loot\n§dYour objective is to\n§eKill the players.\n§1Last man standing wins.\n§2Coming soon."));
            $player->getInventory()->setItem(6, Item::get(322)->setCustomName("§6U§bH§cC\n§bUHC = UltraHardCore.\n§cYou're in a survival map\n§dbut things get extremly hard.\n§eThere's no: Regeneration\n§1When you die, you get banned\n§2until the game is over.\n§3Coming Soon"));
            
          }elseif($item->getCustomName() == "§6Murder§bMystery\n§bThere's one murder, one bystanderd, and everyone else is innocent.\n§aObjectives:\n§bMurder - §3Has to kill everyone to win.\n§cBystanderd - §4Has a gun, they're suppose to kill the murderer to win.\n§dInnocent - §5Make sure you don't get killed.\n§dComing Soon!"){
			$name->sendMessage("§c§lNew Game Coming Soon!");
	  
      }elseif($item->getCustomName() == "§6Sky§bWars\n§bYou're in the sky, you have to:\n§cLoot chests, Get good loot\n§dand kill players!\n§eLast man standing wins!\n§1Coming Soon."){
			$name->sendMessage("§c§lNew Game Coming Soon!");
		  
      }elseif($item->getCustomName() ==  "§6Survival§bGames\n§bYou're in a survival area, filled with chests\n§cFilled with Loot\n§dYour objective is to\n§eKill the players.\n§1Last man standing wins.\n§2Coming soon."){
			$name->sendMessage("§c§lNew Game Coming Soon!");
		  
      }elseif($item->getCustomName() == "§6U§bH§cC\n§bUHC = UltraHardCore.\n§cYou're in a survival map\n§dbut things get extremly hard.\n§eThere's no: Regeneration\n§1When you die, you get banned\n§2until the game is over.\n§3Coming Soon"){
		  	$name->sendMessage("§c§lNew Game Coming Soon!");
		}
	    return true;
      }
}
