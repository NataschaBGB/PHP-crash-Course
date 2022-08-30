<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opgave 6</title>
</head>
<body>


    <?php

        $ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown'];
        print_r("shaun has a " . $ninjasOne['shaun'] . " belt");

        echo "<br>";
        echo "<br>";

        $products = [
            ['name' => 'shiny star', 'price' => 20],
            ['name' => 'green shell', 'price' => 10],
            ['name' => 'red shell', 'price' => 15],
            ['name' => 'gold coin', 'price' => 5],
            ['name' => 'lightning bolt', 'price' => 40],
            ['name' => 'banana skin', 'price' => 2]
        ];

        foreach ($products as $product)
        {
            echo $product['name'] . ': ' . $product['price'];
            echo '<br>';
            
        }

    ?>

    <main>

                <?php
                                    // åben loop i det første php statement
                    foreach ($products as $product) { ?>

                    <!-- for hver article -->
                    <article>
                        <h1>
                            <?php
                            // loop igennem dit array og sæt 'name' ind i h1
                                echo $product['name'];
                            ?>
                        </h1>

                        <p>
                            <?php
                            // loop igennem dit array og sæt 'price' ind i p
                                echo "Koster: " . $product['price'] . " kr.";
                            ?>
                        </p>
                    </article>

    <!-- luk loop i en ny php statement -->
                <?php } ?>

    </main>
    
</body>
</html>