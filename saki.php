<?php

class saki extends \pocketmine\plugin\PluginBase{
    public function onCommand(\pocketmine\command\CommandSender $sender, \pocketmine\command\Command $cmd, strig $label, array $args): bool{
        switch ($cmd->getName()){
            case "saki":
            $server = \pocketmine\Server::getInstance();
            $server->broadcast("<★".$sender."★> 私さきだよJKだよ");
            break;
            case "lol":
            $server = \pocketmine\Server::getInstance();
            $server->broadcast("<★".$sender."★> lol");
            break;
            case "dane":
            $server = \pocketmine\Server::getInstance();
            $server->broadcast("<★".$sender."★> 私さきだよJKだよ");
            break;
        }
        return true;
    }
}
?>
