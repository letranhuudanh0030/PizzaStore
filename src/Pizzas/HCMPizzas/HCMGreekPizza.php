<?php
namespace Acme\Pizzas\HCMPizzas;

use Acme\Pizzas\Base\Pizza;

class HCMGreekPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "HCM The best Greek pizza";
        $this->dough = "HCM Thin dough";
        $this->sauce = "HCM Chilli sauce";
        $this->toppings[] = "Tomato";
        $this->toppings[] = "Potato";
    }
}