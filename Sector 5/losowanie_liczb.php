<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenia z pętli- losowanie </title>
</head>
<body>
    <?php

        $cytaty = array("Jestem przekonany, że Bóg nie gra w kości", "Nie wiem jaka broń będzie używana podczas Trzeciej Wojny Światowej, ale myślę, że Czwarta będzie na kije i kamienie.", "Wyobraźnia jest ważniejsza od wiedzy. Wiedza jest ograniczona, a wyobraźnia otacza cały świat.");

        $random_number = rand(0,count($cytaty)-1);
        echo $cytaty[$random_number]."<br />";

        $sciezki_obrazkow = array("zdj1.jpg", "zdj2.png", "zdj3.jpg");

        $random_number1=rand(0,count($sciezki_obrazkow)-1);
        echo "<img src='$sciezki_obrazkow[$random_number1]' />";
    ?>
</body>
</html>