<?php

namespace Erlangb\BetfairBundle\Service;


use Betfair\BetfairFactory;

class Betfair
{
    private $appKey;
    private $username;
    private $paswword;

    protected $betfair;

    public function __construct($appKey, $username, $password)
    {
        $this->appKey = $appKey;
        $this->username = $username;
        $this->paswword = $password;

        $this->betfair = BetfairFactory::createBetfair($appKey, $username, $password);
    }

    /**
     * @param $appKey
     * @param $username
     * @param $password
     * @return \Betfair\Betfair
     */
    public function createBetfair($appKey, $username, $password)
    {
        $this->betfair = BetfairFactory::createBetfair($appKey, $username, $password);
        return $this->getBetfair();
    }

    /**
     * @return \Betfair\Betfair
     */
    public function getBetfair()
    {
        return $this->betfair;
    }
} 