<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opgave 3</title>
</head>
<body>

    <?php
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        echo $actual_link;

        echo "<br>";

        $favFruit = "banana";

        switch ($favFruit) {
            case "apple":
                echo "Apples are great";
                break;
            case "banana":
                echo "I also like bananas";
                break;
            case "jackfruit":
                echo "That's just weird";
                break;
            default:
                echo "OK... whatever...";
                break;
        }
    ?>
    
</body>
</html>