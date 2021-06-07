<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasy - dziedziczenie</title>
</head>
<body>
    <?php
        require_once("Punkt3D.php");
/*
        $p = new Punkt(40);

        echo $p->x."<br />";
*/
        $p2 = new Punkt2D(10,50);
        //$p2->setX(20);
        echo $p2->getX()."<br />";
        echo $p2->getY()."<br />";

    ?>
</body>
</html>