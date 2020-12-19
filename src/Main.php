<?php

namespace test;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase{
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
        switch($cmd->getName()){
            case "test":
                if($sender instanceof Player){
                    $sender->sendMessage("pog it works");
                }
                 break;
        }
        return true;
    }
}