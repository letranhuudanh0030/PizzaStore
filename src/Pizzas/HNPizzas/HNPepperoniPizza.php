<?php
namespace Acme\Pizzas\HNPizzas;

use Acme\Pizzas\Base\Pizza;

class HNPepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "HN The best pepperoni pizza";
        $this->dough = "HN Thick dough";
        $this->sauce = "HN Sweet sauce";
        $this->toppings[] = "Tomato";
    }
}