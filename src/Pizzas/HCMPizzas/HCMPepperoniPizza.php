<?php
namespace Acme\Pizzas\HCMPizzas;

use Acme\Pizzas\Base\Pizza;

class HCMPepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "HCM The best pepperoni pizza";
        $this->dough = "HCM Thick dough";
        $this->sauce = "HCM Sweet sauce";
        $this->toppings[] = "Tomato";
    }
}