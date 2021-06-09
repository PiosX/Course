<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klonowanie/kopiowanie</title>
</head>
<body>
    <?php
        class Student
        {
            public $imie;
            public $oczy;
            function __construct($imie, $kolor)
            {
                $this->imie = $imie;
                $this->oczy = new Oczy($kolor);
            }
            function __clone()
            {
                $this->oczy = clone $this->oczy;
            }
        }
        class Oczy
        {
            public $kolor;

            function __construct($kolor)
            {   
                $this->kolor = $kolor;
            }
        }

        $a = new Student("Arkadiusz", "niebieskie");

        $b = clone $a;

        $b->imie = "Wiola";
        $b->oczy->kolor = "brązowy";
        echo $a->imie."<br />";
        echo $b->imie."<br />";

        echo $a->oczy->kolor."<br />";
        echo $b->oczy->kolor."<br />";


    /*
        $a = 50;
        $b = &$a;

        $b = 70;

        echo $a."<br />";
        echo $b."<br />";
    */

    ?>
</body>
</html>