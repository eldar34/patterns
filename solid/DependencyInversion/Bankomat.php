<?php


namespace Solid\DependencyInversion;

use Solid\DependencyInversion\GetMoney;

class Bankomat implements GetMoney
{
    public function getMoney()
    {
        // TODO: Implement getMoney() method.
        echo '<br>Get money from Bankomat';
    }
}