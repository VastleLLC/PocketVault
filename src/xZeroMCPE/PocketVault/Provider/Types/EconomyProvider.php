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

namespace xZeroMCPE\PocketVault\Provider\Types;


use pocketmine\Player;
use xZeroMCPE\PocketVault\Provider\Provider;
use xZeroMCPE\PocketVault\Provider\ProviderName;

class EconomyProvider extends Provider
{
    public $name = ProviderName::ECONOMY;

    public function getBalance(Player $player) : int {
        return 0;
    }

    public function addMoney(Player $player, int $money) {

    }

    public function takeMoney(Player $player, int $money) {

    }

    /**
     * Returns a list of players
     * that have the most money
     * @param int $sort
     * 0 - highest to lowest,
     * 1 - lowest to highest
     * @param int $limit
     * The limit on the number of
     * result it returns
     * @return array
     */
    public function topMoney(int $sort = 0, $limit = 25) : array {
        return [];
    }

}