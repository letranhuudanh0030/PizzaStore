<?php
require('./vendor/autoload.php');

use Acme\Stores\DNPizzaStore;
use Acme\Stores\HCMPizzaStore;
use Acme\Stores\HNPizzaStore;

$HCMPizzaStore = new HCMPizzaStore();
echo $HCMPizzaStore->orderPizza("cheese");

$HNPizzaStore = new HNPizzaStore();
echo $HNPizzaStore->orderPizza("cheese");

$DNPizzaStore = new DNPizzaStore();
echo $DNPizzaStore->orderPizza("cheese");

