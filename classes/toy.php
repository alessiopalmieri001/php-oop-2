<?php 

require_once __DIR__ .'/product.php';

class Toy extends Product {

    public $material;

    public function __construct(
        //parametri obbligatori 
        $name,
        $material,
        //parametri opzionali
        $image = null,
        $price = null,
        $quantity = null,
        $description = null,
        $category = null,
    )
    {
        //richiamo parametri super classe
        parent::__construct(
            $name,
            $image,
            $price,
            $quantity,
            $description,
            $category
        );
        
        $this->material = $material;
        
    }
}