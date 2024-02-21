<?php 

require_once __DIR__ .'/product.php';

class PetBed extends Product {

    public $width;
    public $height;

    public function __construct(
        //parametri obbligatori 
        $name,
        $width,
        $height,
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
        
        $this->width = $width;
        $this->height = $height;
        
    }

}