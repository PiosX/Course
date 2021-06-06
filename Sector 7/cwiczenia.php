<?php
        setcookie('FirstTime', 1, time()+10);

        ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nazwaPliku = "test2.txt";
        $wskaznik = fopen($nazwaPliku, "r+");

        if($wskaznik)
        {
            if(!isset($_COOKIE['FirstTime']))
            {

            //$wypisz = fread($wskaznik, filesize($nazwaPliku));
            //echo $wypisz;

            //while($linia = fgets($wskaznik))
                //echo $linia."<br />";
            $licznik = fread($wskaznik, filesize($nazwaPliku));
            $licznik++;

            rewind($wskaznik);
            fwrite($wskaznik, $licznik);

            echo $licznik;
            echo "Witaj nowy użytkowniku.";
            }
        }else{
            echo "Nie ma takiego pliku.";
        }

        fclose($wskaznik);
    ?>
</body>
</html>

<?php
    ob_end_flush();
?>