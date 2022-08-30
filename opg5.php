<!-- starten af denne side er i opg5 header -->
    <?php
        include 'opg5header.php';
    ?>

    <main>
        <h2>Main</h2>
        <h1>Random H1</h1>

        <?php
            // functions kan oprettes hvor som helst i dokumentet
            function stringToArray($string) {
                $array = explode(" ", $string);
                return($array);
            }
            print_r(stringToArray("Den der gemmer til natten, gemmer til katten"));
        ?>
    </main>

    <?php
        include 'opg5footer.php';
    ?>
<!-- slutningen af html dokumentet er i opg5 footer -->