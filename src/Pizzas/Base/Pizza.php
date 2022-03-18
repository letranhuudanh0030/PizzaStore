<?php
namespace Acme\Pizzas\Base;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    public function prepare(): void {

        print "Preparing {$this->name} \n";
        print "Tossing dough... \n";
        print "Adding sauce... \n";
        print "Adding toppings: \n";
        foreach ($this->toppings as $key => $topping){
            print "\t$key: $topping \n";
        }
    }

    public function bake(): void {
        print "Baking {$this->name} in 30 mins \n";
    }

    public function cut(): void {
        print "Cutting {$this->name} \n";
    }

    public function box(): void {
        print "Boxing {$this->name} \n";
        print "------------------------\n";
    }
}
