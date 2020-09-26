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

namespace xZeroMCPE\PocketVault\Provider;


use xZeroMCPE\PocketVault\PocketVault;
use xZeroMCPE\PocketVault\Provider\Types\EconomyProvider;

class ProviderManager
{
    /** @var Provider[] */
    private $providers = [];

    /**
     * @return Provider[]
     */
    public function getProviders()
    {
        return $this->providers;
    }

    public function addProvider(Provider $provider) {
        if(isset($this->getProviders()[$provider->getName()])) {
            throw new \Exception("The provider you wish to add already exists");
        } else {
            PocketVault::getInstance()->getLogger()->info("[ PocketVault ] Added new provider: " . $provider->getName());
            $this->providers[$provider->getName()] = $provider;
            $provider->onRegistered();
        }
    }

    public function removeProvider(string $name) : bool {

        if(isset($this->getProviders()[$name])) {
            unset($this->providers[$name]);
            return true;
        }

        return false;
    }

    public function hasProvider(string $name) : bool {
        return isset($this->getProviders()[$name]);
    }

    public function getProvider(string $name) : ?Provider {
        if(!$this->hasProvider($name)) {
            return null;
        }
        return $this->getProvider($name);
    }
}