<?php

namespace Egor\Lab5Composer;

use Egor\Lab5Composer\SkilletPizza;
use PizzaStore\PizzaStore;
use PizzaStore\Pizza;

class Pizzeria extends PizzaStore
{
    public function createSnack(string $type): Pizza
    {
        switch ($type) {
            case "пицца в сковородке":
                return new SkilletPizza("Пицца в сковородке", "1000 остравов", ["колбоса", "сыр", "помидоры"]);
                break;
            case "пеппирони":
                return new Peppironi("Пицца пеппирони", "томатный", ["пеппирони", "мацарелла"]);
                break;
            default:
                throw new \InvalidArgumentException("Такого типа пиццы нет");
                break;
        }
    }
}
