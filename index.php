<?php

require_once __DIR__ . '/vendor/autoload.php';

use Solid\SingleResponsible\Product;
use Solid\SingleResponsible\AlertMessage;

use Solid\DependencyInversion\Work;
use Solid\DependencyInversion\Bankomat;
use Solid\DependencyInversion\HighRankinMale;

/*spl_autoload_register(function ($class_name) {

    if (!class_exists($class_name)) {
        require_once 'solid/SingleResponsible/' . $class_name . '.php';
    }

});*/




$message = new AlertMessage();

$firstProduct = new Product($message);
$firstProduct->setPrice(45);

$object = new Work();
$object2 = new Bankomat();
$hight = new HighRankinMale($object2);

$hight->man->getMoney();
