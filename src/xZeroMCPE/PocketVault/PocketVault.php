<?php
/**
 * *************************************************************************
 *  * Copyright (c) 2020 Vastle, LLC - All Rights Reserved
 *  *
 *  *
 *  * @author      @xZeroMCPE (Andre)
 *  * @site        https://vastle.net
 *  *
 *  **************************************************************************
 */

namespace xZeroMCPE\PocketVault;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use xZeroMCPE\PocketVault\Provider\ProviderManager;

class PocketVault extends PluginBase
{

    public $providerManager;
    public static $instance;


    public function onEnable()
    {
        self::$instance = $this;
        $this->setup();
    }

    public static function getInstance(): PocketVault
    {
        return self::$instance;
    }

    public function log(string $color, string $message)
    {
        $this->getLogger()->info($color . "[ PocketVault ] " . $message);
    }

    public function setup()
    {
        $this->providerManager = new ProviderManager();
        $this->log(TextFormat::GREEN, "Loaded all providers");
    }

    public function getProviderManager(): ProviderManager
    {
        return $this->providerManager;
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        $sender->sendMessage(TextFormat::GREEN . "[ PocketVault ] Created by @xZeroMCPE\nCan be downloaded via https://github.com/xZeroMCPE/PocketVault");
        return true;
    }
}