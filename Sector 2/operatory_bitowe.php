<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory bitowe</title>
</head>
<body>
    <?php
        /*
            126 = 1 * 10 ^2 + 2 * 10 ^1 + 6 * 10 ^0 = 100+20+6= 126
            1010 = 1 * 2 ^3 + 0 * 2 ^2 + 1 * 2 ^1 + 0 * 2 ^0= 8 + 2 =10
            1010 = 2 ^1 + 2 ^3 = 10    
        */

            // 2 - 0010
            //10 - 1010

            //AND - KONIUNKCJA
            //0010
            //1010
            //0010 - 2

            echo 2 & 10;

            echo "<br />";
            // | - ALTERNATYWA
            //0010
            //1010
            //1010 - 10

            echo 2 | 10;

            echo "<br />";
            // ^ - XOR
            //0010
            //1010
            //1000 - 8

            echo 2 ^ 10;

            echo "<br />";
            // ~ - NOT
            //1010
            //0101 - 5

            echo ~10;

            echo "<br />";

            //0101 - 5
            //0010{1} -2   //ta jedynka została przesunięta poza zero
            echo 5 >> 1;

            echo "<br />";
            //0101 - 5
            //1010
            //00000000000000000 10100
            echo 5 << 2;
    ?>
</body>
</html>