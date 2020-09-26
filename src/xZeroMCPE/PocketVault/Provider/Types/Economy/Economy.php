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

interface Economy
{
    public function getBalance(Player $player) : int;

    public function addMoney(Player $player, int $money) : void;

    public function takeMoney(Player $player, int $money) : void;

    public function setMoney(Player $player, int $money) : void;

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
    public function topMoney(int $sort = 0, $limit = 25) : array;

    //Returns the currency symbol. I.e; $
    public function getCurrencySymbol() : string;
    //Returns the name of the currency in singular form.
    public function getCurrencyNameSingular() : string;
    //Returns the name of the currency in plural form.
    public function getCurrencyNamePlural() : string;
}