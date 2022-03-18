<?php
namespace Acme\Pizzas\HNPizzas;

use Acme\Pizzas\Base\Pizza;

class HNGreekPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "HN The best Greek pizza";
        $this->dough = "HN Thin dough";
        $this->sauce = "HN Chilli sauce";
        $this->toppings[] = "Tomato";
        $this->toppings[] = "Potato";
    }
}