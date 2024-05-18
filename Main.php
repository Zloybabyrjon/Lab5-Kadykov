<?php

require_once 'vendor/autoload.php';

use Egor\Lab5Composer\Pizzeria;

$store = new Pizzeria();
$store->orderPizza("пицца в сковородке");
print "-------------" . PHP_EOL;
$store = new Pizzeria();
$store->orderPizza("Пеппирони");
print "-------------" . PHP_EOL;
