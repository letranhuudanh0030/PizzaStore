<?php
namespace Acme\Pizzas\DNPizzas;

use Acme\Pizzas\Base\Pizza;

class DNCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "DN The best cheese pizza";
        $this->dough = "DN Very thin dough";
        $this->sauce = "DN Very spicy sauce";
        $this->toppings[] = "Black olives";
        $this->toppings[] = "Chesse";
    }
}