<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle zagnieżdżone</title>
</head>
<body>
    <?php
        //Tabliczka mnożenia
        function tabliczka_mnozenia($wiersz,$kolumna)
        {
            echo "<table>";
            for($i=1;$i<=$wiersz;$i++)
            {
                echo "<tr>";
                for($j=1;$j<=$kolumna;$j++)
                echo "<td>".($i*$j)."</td>";

                echo "<tr>";
            }
            echo "</table>";
        }
        tabliczka_mnozenia(5,20);

        //Potęgowanie
        function power($a, $w)
        {
            $podstawa_potegi = $a;
            
            //for($i=0;$i<$w-1;$i++)
            while(--$w)
                $a *= $podstawa_potegi;

            return $a;
        }

        echo power(2,5);
    ?>
</body>
</html>