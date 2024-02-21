<?php
    require_once __DIR__.'/classes/Category.php';
    require_once __DIR__.'/classes/product.php';

    $dogsCategori = new Category('Cani');
    $catsCategori = new Category('Gatti');

    $frisbee = new Product(
        'frisbee',
        null,
        8.99,
        30,
        'frisbee',
        $dogsCategori
    )
    

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            ciao
        </h1>
    </body>
</html>