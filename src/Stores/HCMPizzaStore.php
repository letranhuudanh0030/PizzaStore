<?php
namespace Acme\Stores;

use Acme\Pizzas\HCMPizzas\HCMCheesePizza;
use Acme\Pizzas\HCMPizzas\HCMGreekPizza;
use Acme\Pizzas\HCMPizzas\HCMPepperoniPizza;
use Acme\Stores\Base\PizzaStore;

class HCMPizzaStore extends PizzaStore
{
    public function createPizza(string $type) {
        switch ($type) {
            case "cheese":
                return new HCMCheesePizza();
            case "greek":
                return new HCMGreekPizza();
            case "pepperoni":
                return new HCMPepperoniPizza();
            default:
                echo "Not found $type! \n";
                return;
        }
    }
}