<?php
namespace Acme\Pizzas\DNPizzas;

use Acme\Pizzas\Base\Pizza;

class DNGreekPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "DN The best Greek pizza";
        $this->dough = "DN Thin dough";
        $this->sauce = "DN Chilli sauce";
        $this->toppings[] = "Tomato";
        $this->toppings[] = "Potato";
    }
}