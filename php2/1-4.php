<?php

class Product {
    
    public $id;
    public $name;
    public $color;
    public $price;
    public $description;
    public $category;
        public function __construct($id, $name, $color, $price, $description, $category)
        {
             
             $this->id = $id;
             $this->name = $name;
             $this->color = $color;
             $this->price = $price;
             $this->idescription = $description;
             $this->category = $category;
     
        }
        function view(){

            echo "
            <h2>Карточка товара</h2>
            <p>$this->id</p>
            <p>$this->name</p>
            <p>$this->color</p>
            <p>$this->price</p>
            <p>$this->idescription</p>
            <p>$this->category</p>" ;
        }

        function discount(){
                

        }
}


$product = new Product(10, 'Phone', 'black', 500, 'Some description', 'Electronic');
$product -> view();

?>
