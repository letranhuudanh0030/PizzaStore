<?php
namespace Acme\Pizzas\HNPizzas;

use Acme\Pizzas\Base\Pizza;

class HNCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "HN The best cheese pizza";
        $this->dough = "HN Very thin dough";
        $this->sauce = "HN Very spicy sauce";
        $this->toppings[] = "Black olives";
        $this->toppings[] = "Chesse";
    }
}