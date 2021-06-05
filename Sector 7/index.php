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
        /*  FILE
            $wskaznik = fopen("nazwaPLiku.txt", "TRYB OTWARCIA")

            r - (read) - otwiera nam plik do odczytu; ustawia nam wskaźnik (uchwyt pliku) na początek; wymaga aby plik już ybł stworzony
            r+ -robi to co wyżej plus pozwala zapisywać

            w - (write) - otwiera plik do zapisu; ustawia wskaźnik na początku pliku. Usuwa dotychczasową zawartość pliku, jeżeli plik nie istnieje to go tworzy.
            w+ - robi to co wyżej plus pozwala odczytywać

            a - (attach-dołączyć) - otwiera plik do zapisu; ustawia wskaźnik na koniec pliku, jeśli plik nie istnieje to go tworzy
            a+ = robi to co wyżej plus pozwala odczytywać
        */
        $nazwaPliku = "test.txt";
        $wskaznik = @fopen($nazwaPliku, "r+"); //or die("Nie ma takiego pliku.");

        if($wskaznik) //(!$wskaźnik)   ($wskaźnik == NULL)
        {
            //$tresc = fread($wskaznik, filesize($nazwaPliku));

            //echo "<pre>".$tresc."</pre>";
            /*
            while($linia = fgets($wskaznik))
                echo $linia."<br />"; */
            //fwrite($wskaznik, "2\n");
            $licznik = (int)fread($wskaznik, filesize($nazwaPliku));
            $licznik++;

            rewind($wskaznik); //ustawia wskaźnik spowrotem na poczatek
            fwrite($wskaznik, $licznik);
        }
        else{
            echo "Nie ma takiego pliku.";
        }

        @fclose($wskaznik);
    ?>
</body>
</html>