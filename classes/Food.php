<?php 

require_once __DIR__ .'/product.php';

class Food extends Product {

    public $experetion;

    public function __construct(
        //parametri obbligatori 
        $name,
        $experetion,
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
        
        $this->experetion = $experetion;
        
    }
}