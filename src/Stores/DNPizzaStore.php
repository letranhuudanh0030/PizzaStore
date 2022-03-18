<?php
namespace Acme\Stores;

use Acme\Pizzas\DNPizzas\DNCheesePizza;
use Acme\Pizzas\DNPizzas\DNGreekPizza;
use Acme\Pizzas\DNPizzas\DNPepperoniPizza;
use Acme\Stores\Base\PizzaStore;

class DNPizzaStore extends PizzaStore
{
    public function createPizza(string $type) {
        switch ($type) {
            case "cheese":
                return new DNCheesePizza();
            case "greek":
                return new DNGreekPizza();
            case "pepperoni":
                return new DNPepperoniPizza();
            default:
                echo "Not found $type! \n";
                return;
        }
    }
}