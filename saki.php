<?php

class saki extends \pocketmine\plugin\PluginBase{
    public function onCommand(\pocketmine\command\CommandSender $sender, \pocketmine\command\Command $cmd, strig $label, array $args): bool{
        switch ($cmd->getName()){
            case "saki":
            \pocketmine\Server::getInstance()->broadcast("<".$sender."> 1145141919810");
        }
    }
}
?>