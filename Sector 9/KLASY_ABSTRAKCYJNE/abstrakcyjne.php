<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasy abstrakcyjne</title>
</head>
<body>
    <?php
        /*require_once("AnimalAbstract.php");
        require_once("Dog.php");
        require_once("Cat.php");

        $p = new Dog();
        $p->eat("meat");
        $p->eat("pea");

        $p2 = new Cat();
        $p2->eat("fish");
        $p2->eat("fish");*/

        require_once("ExampleAbstract.php");
        require_once("Delphin.php");

        $c = new Delphin();

        echo $c->eat("fish");
    ?>
</body>
</html>