<?php
namespace Acme\Pizzas\HCMPizzas;

use Acme\Pizzas\Base\Pizza;

class HCMCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "HCM The best cheese pizza";
        $this->dough = "HCM Very thin dough";
        $this->sauce = "HCM Very spicy sauce";
        $this->toppings[] = "Black olives";
        $this->toppings[] = "Cheese";
    }
}