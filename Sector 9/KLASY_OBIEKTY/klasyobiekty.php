<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasy - obiekty</title>
</head>
<body>
    <?php
    /*
        require_once("class.time.php");

        $a = new Time();
        $b = new Time("America/Atka");
        $c = new Time("Australia/Yancowinna");

        echo $a->setFutureTime(5)."<br />";
        echo $b->setFutureTime(10)."<br />";

        echo $a->futureTime."<br />";
        $b->setFutureTime(2);
        echo $b->futureTime."<br />";

        echo $a."<br />";
        echo $b."<br />";
        echo $c."<br />";

        $a->setFutureTime("4");
        echo $a->futureTime."<br />";
        echo $a->timeZone."<br />";
        echo $b->timeZone."<br />";
    */
        require_once("class.cwiczenia.php");

        $a = new Cwiczenia();
        $b = new Cwiczenia("Australia/Yancowinna");

        echo $a->getCurrentTime()."<br />";
        echo $b->setFutureTime("6")."<br />";
        echo $b;
    ?>
</body>
</html>