<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory Arytmetyczne</title>
</head>
<body>
    <?php
        $zm = 10;
        $zm2 = 20;
        $imie = "Arkadiusz";
        $nazwisko = "Nowak";
/*
        echo $zm + $zm2;
        echo "<br />------------------<br />";
        echo $zm - $zm2;
        echo "<br />------------------<br />";
        echo $zm * $zm2;
        echo "<br />------------------<br />";
        echo $zm / $zm2;
        echo "<br />------------------<br />";
        echo 5 % 4; //mod- modulo / reszta z dzielenia
        echo "<br />------------------<br />";
        echo 5 % 2; 
        echo "<br />------------------<br />";
        echo $imie." ".$nazwisko;
        echo "<br />------------------<br />";
        echo "<br />------------------<br />";
*/
        $a = 10;
        echo "<br />------------------<br />";
        $a += 2; // $a = $a + 2;
        echo $a;
        echo "<br />------------------<br />";

        $i = 5;
      
        //POSTINKREMENTACJA $i++

        echo ++$i; //PREIMKREMENTACJA
        echo "<br />------------------<br />";
        echo $i;

        //POSTDEKREMENTACJA $i--
        //PREDEKREMENTACJA --$i
    ?>
</body>
</html>