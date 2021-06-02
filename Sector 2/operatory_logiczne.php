<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERATORY LOGICZNE</title>
</head>
<body>
    <?php

        // 0- FALSE, 1- TRUE

        $zm = true;
        $zm2 = false;

        var_dump((54>7) and (6>-4));

        /*
            AND - i - && - KONIUNKCJA(połączenie)
            Jeżeli dwa zdania są prawdziwe zachodzi koniunkcja
            wyr1 wyr2 wynik
            0     0    0
            0     1    0
            1     0    0
            1     1    1

            OR - lub - || - ALTERNATYWA
            wyr1 wyr2  wynik
             0    0      0
             1    0      1
             0    1      1
             1    1      1

             XOR (exclusive or) - wyłączna alternatywa
             wyr1  wyr2  wynik
              0     0     0
              1     0     1
              0     1     1
              1     1     0
        */

    ?>
</body>
</html>