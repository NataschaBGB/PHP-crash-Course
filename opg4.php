<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opgave 4</title>
</head>
<body>
    
    <?php
        $i = 1;

        echo "while loop";
        echo "<br>";
        while ($i <= 10)
        {
            echo $i;
            $i++;
        }

        echo "<br>";
        echo "<br>";        

        echo "for loop";
        echo "<br>";
        for ($i = 1; $i <= 10; $i++)
        {
            echo $i;
        }

        echo "<br>";
        echo "<br>";

        echo "foreach";
        echo "<br>";
        $classMates = array("Asbjørn", "Eddy", "Mark", "Mathias", "Natascha", "Sebastian", "William");
        foreach ($classMates as $value)
        {
            echo "$value <br>";
        }

        echo "<br>";
        echo "<br>";

        echo "nested loop";
        for ($i = 0; $i < 6; $i++)
        {
            for ($j = 0; $j < $i; $j++)
            {
                echo " * ";
            }
            echo "<br>";
        }

    ?>



</body>
</html>