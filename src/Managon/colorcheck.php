<?php

namespace Managon;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class colorcheck extends PluginBase{

public function onEnable(){ $this->getLogger()->info("Loaded! By Managon");}


public function onCommand(CommandSender $sender, Command $command, $label, array $args){
      if(isset($args[0])){
      switch ($args[0]) {
        case 1:
        $sender->sendMessage("§b=======COLOR PAGE1========\n(セクションは自分で変換)");
        $sender->sendMessage("§0Black:      セクション0");
        $sender->sendMessage("§1Dark_Blue:  セクション1");
        $sender->sendMessage("§2Dark_Green: セクション2");
        $sender->sendMessage("§3Dark_Aqua:  セクション3");
        $sender->sendMessage("§4Dark_Red:   セクション4");
        $sender->sendMessage("§b==========================");
        break;
        case 2:
        $sender->sendMessage("§b=======COLOR PAGE2========\n(セクションは自分で変換)");
        $sender->sendMessage("§5Dark_Purple:セクション5");
        $sender->sendMessage("§6Gold:       セクション6");
        $sender->sendMessage("§7Gray:       セクション7");
        $sender->sendMessage("§8Dark_Gray:  セクション8");
        $sender->sendMessage("§9Blue:       セクション9");
        $sender->sendMessage("§b==========================");
        break;
        case 3:
        $sender->sendMessage("§b=======COLOR PAGE3========\n(セクションは自分で変換)");
        $sender->sendMessage("§aGreen:      セクションa");
        $sender->sendMessage("§bAqua:       セクションb");
        $sender->sendMessage("§cRed:        セクションc");
        $sender->sendMessage("§dLightpurple:セクションd");
        $sender->sendMessage("§eYellow:     セクションe");
        $sender->sendMessage("§fWhite:      セクションf");
        $sender->sendMessage("§b==========================");
        break;
        default:
        $sender->sendMessage("§c無効なページです。");
     }
    }else{
        $sender->sendMessage("§b=======COLOR PAGE1========\n(セクションは自分で変換)");
        $sender->sendMessage("§0Black:      セクション0");
        $sender->sendMessage("§1Dark_Blue:  セクション1");
        $sender->sendMessage("§2Dark_Green: セクション2");
        $sender->sendMessage("§3Dark_Aqua:  セクション3");
        $sender->sendMessage("§4Dark_Red:   セクション4");
        $sender->sendMessage("§b==========================");
  }
}
}
