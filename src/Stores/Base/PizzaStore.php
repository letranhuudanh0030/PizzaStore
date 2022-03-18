<?php
namespace Acme\Stores\Base;

abstract class PizzaStore
{
    public function orderPizza(string $type){
//        $pizza = null;
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
    }

    abstract protected function createPizza(string $type);


}
