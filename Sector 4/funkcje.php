<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <?php
       
       function nazwaFunkcji()
       {
           echo "tralalala";
           echo "tralalala";
           echo "nie ma tralalala";
           echo "tralalala";
           echo "tralalala<br />";
       }
       $g = 10;
       function getHigherValue($a, $b = 0)
       {
           return ($a > $b ? $a : $b);
       }

       $zm = 10;
       $zm2 = 20;
       function changeValue(&$valueToChange, $value) //PRZEZ REFERENCJE CZYLI ODWOŁANIE SIĘ
       {
           $valueToChange = $value;
       }

        changeValue($zm, 50);

        //echo $zm;
        $a = 50;
        $b = 100;
        echo getHigherValue($a, $b);
    ?>
</body>
</html>