<?php
namespace Acme\Pizzas\DNPizzas;

use Acme\Pizzas\Base\Pizza;

class DNPepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "DN The best pepperoni pizza";
        $this->dough = "DN Thick dough";
        $this->sauce = "DN Sweet sauce";
        $this->toppings[] = "Tomato";
    }
}