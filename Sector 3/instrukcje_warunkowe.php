<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrukcje Warunkowe</title>
</head>
<body>
    <?php
        /*
            Jeśli(warunek1)
                instrukcja1;
            Jeśli w innym przypadku(warunek2)
                instrukcja2;
            Calkowicie w innym wypadku, gdy warunki nie sa spelnione
                instrukcja3;
        */

        $a = 5;
        $b = "5";
/*
        if($a > $b)
            echo "a jest wieksze od b";
        else if($a < $b)
            echo "b jest wieksze od a";
        else 
        {
            echo "a jest równe b<br />";
            if($a === $b)
                echo "a jest tego samego typu co b";
        }
*/
        if(!((5>7 && 7>4) || (10==10)))
            echo "prawda";

        if($a == $b)
        {
            $a += 5;
            echo "a jest równe b<br />";
            if($a > $b)
                echo "a jest wieksze od b";
            else if($a < $b)
                echo "b jest wieksze od a";
        }

        
    ?>
</body>
</html>