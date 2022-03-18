<?php
namespace Acme\Stores;

use Acme\Pizzas\HNPizzas\HNCheesePizza;
use Acme\Pizzas\HNPizzas\HNGreekPizza;
use Acme\Pizzas\HNPizzas\HNPepperoniPizza;
use Acme\Stores\Base\PizzaStore;

class HNPizzaStore extends PizzaStore
{
    public function createPizza(string $type) {
        switch ($type) {
            case "cheese":
                return new HNCheesePizza();
            case "greek":
                return new HNGreekPizza();
            case "pepperoni":
                return new HNPepperoniPizza();
            default:
                echo "Not found $type! \n";
                return;
        }
    }
}