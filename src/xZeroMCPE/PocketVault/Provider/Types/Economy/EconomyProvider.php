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

namespace xZeroMCPE\PocketVault\Provider\Types\Economy;


use pocketmine\Player;
use xZeroMCPE\PocketVault\Provider\Provider;
use xZeroMCPE\PocketVault\Provider\ProviderName;

abstract class EconomyProvider extends Provider implements Economy {
    public $name = ProviderName::ECONOMY;

    public function getCurrencySymbol(): string
    {
        return "$";
    }

    public function getCurrencyNameSingular(): string
    {
        return "dollar";
    }

    public function getCurrencyNamePlural(): string
    {
        return "dollars";
    }
}