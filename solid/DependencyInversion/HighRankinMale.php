<?php


namespace Solid\DependencyInversion;

use Solid\DependencyInversion\GetMoney;


class HighRankinMale
{
    public $man;

    public function __construct(GetMoney $man)
    {
        $this->man = $man;
    }
}