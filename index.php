<?php
    require_once __DIR__.'/classes/Category.php';
    require_once __DIR__.'/classes/product.php';

    $dogsCategori = new Category('🐶');
    $catsCategori = new Category('🐱');

    $prodotto = new Product(
        'Prodotto',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjcQzcpit0Rl9stqDWWF0SK4F7MCWuNjp6FA&usqp=CAU',
        8.99,
        30,
        'product',
        $dogsCategori
    )
    

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>
                            SHOOP
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        <main>
        <div class="container">
                <div class="row">
                <div class="col-12">
                        <h2>
                            Prodotti
                        </h2>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo $prodotto->image;  ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3>
                                    <?php echo $prodotto->name;  ?>
                                </h3>
                                <ul>
                                    <li>
                                    <?php echo $prodotto->category->name;  ?>
                                    </li>
                                    <li>
                                        € <?php echo $prodotto->price;  ?>
                                    </li>
                                    <li>
                                        disponibilità : <?php echo $prodotto->quantity;  ?>
                                    </li>

                                </ul>
                                <p>
                                    <?php echo $prodotto->description;  ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>