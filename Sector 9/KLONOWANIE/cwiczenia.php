<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Student1
    {
        public $imie;
        public $oczy1;

        function __construct($imie,$kolor)
        {
            $this->imie = $imie;
            $this->oczy1 = new Oczy1($kolor);
        }
        function __clone()
        {
            $this->oczy1 = clone $this->oczy1;
        }
    }
    class Oczy1
    {
        public $kolor;

        function __construct($kolor)
        {
            $this->kolor = $kolor;
        }
    }
    /*
        $a = 50;
        $b = $a;

        $b = 70;
    */  
    $a = new Student1("Piotr","brązowe");
    $b = clone $a;
    
    $b->imie = "Janusz";

    echo $a->imie."<br />";
    echo $b->imie."<br />";

    $b->oczy1->kolor = "niebieskie";

    echo $a->oczy1->kolor."<br />";
    echo $b->oczy1->kolor."<br />";
    ?>
</body>
</html>