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
            //$wypisz = fread($wskaznik, filesize($nazwaPliku));
            //echo $wypisz;

            //while($linia = fgets($wskaznik))
                //echo $linia."<br />";
            $licznik = fread($wskaznik, filesize($nazwaPliku));
            $licznik++;

            rewind($wskaznik);
            fwrite($wskaznik, $licznik);

            echo $licznik;
        }else{
            echo "Nie ma takiego pliku.";
        }

        fclose($wskaznik);
    ?>
</body>
</html>