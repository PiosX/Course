<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cwiczenia</title>
</head>
<body>
    <?php
        function tabliczka($wiersz, $kolumny)
        {
            for($i=1;$i<=$wiersz;$i++)
            {
                for($j=1;$j<=$kolumny;$j++)
                {
                    echo ($i*$j)." ";
                }
                echo "<br />";
            }
        }

        tabliczka(10,10);

        function potegi($a, $w)
        {
            $podstawa_pot = $a;
            for($i=1;$i<=$w-1;$i++)
            {
                $podstawa_pot *= $a;
            }
            echo $podstawa_pot;
        }

        potegi(2,10);
        echo "<br />";

        function choinka($a,$ilosc)
        {
            for($k=1;$k<=$ilosc;$k++)
            {           
                for($l=0;$l<$a;$l++)
                {
                    for($m=0;$m<=$l;$m++)
                    {
                        echo "*";
                    }
                    echo "<br />";
                } 
            }
        }

        choinka(8,3);
    ?>
</body>
</html>