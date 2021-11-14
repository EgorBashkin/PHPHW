<?php

abstract class Product {

    protected static $cost = 100;
    abstract public function getTotalCost();
   
}



class DigitalProduct extends Product {

    public function getTotalCost() {
        return self::$cost/2;
    }

}



class PeiceProduct extends Product {

    public function getTotalCost() {
        return self::$cost;
    }

}




class WeightProduct extends Product {
    
    protected  $qty;

    public function __construct($qty) {
        $this->qty = $qty;
    }

    public function getTotalCost() {
        return $this->qty * self::$cost;
    }
}

$prod1 = new DigitalProduct();
$prod2 = new PeiceProduct();
$prod3 = new WeightProduct(5);
//$prod3-> $qty(5);


echo $prod1->getTotalCost();
echo $prod2->getTotalCost();
echo $prod3->getTotalCost();


?>