<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- zmienne</title>
</head>
<body>
    <?php
        $szerokosc = 4;
        $wysokosc = 2;
        echo $szerokosc;
        /*zmienne z małej litery, bez spacji, można polskie znaki ale nie warto, wielkość liter ma znaczenie */
        echo "<br />----------------------<br />";
        var_dump($szerokosc); //pokazuje informacji o zmiennej 
        echo "<br />----------------------<br />";

        $tekst = "abcd";
        echo $tekst;
        echo "<br />----------------------<br />";
        var_dump($tekst); //pokazuje informacji o zmiennej 
        echo "<br />----------------------<br />";

        echo $tekst[0];

        echo "<br /><br /><br /><br />";
        echo "szerokość wynosi: $szerokosc <br />";
        echo "szerokość wynosi: $wysokosc<br />";
        echo 'aby stworzyć zmienną w php korzystamy z konstrukcji: $nazwa_zmiennej<br />'; //wyświetla wszystko jako tekst
        echo "szerokość wynosi: \$szerokosc \\n <br />";

        echo ord(1)."<br />";
        echo chr(49)."<br />";

        $zm = 4.93512135;

        echo "<br />----------------------<br />";
        var_dump($zm);
        echo "<br />----------------------<br />";

        echo (int)($zm)."<br />";
        echo round($zm, 2)."<br /><br /><br />";

        $czy_wyslano_wiadomosc = true; //false

        echo $czy_wyslano_wiadomosc;

        $czy_dostarczono_paczke = false;

        echo $czy_dostarczono_paczke."<br />";

        define("NAZWA_GRY", "Mroczna Gra"); //stała krtórej nie można zmienić

        echo NAZWA_GRY;
    ?>
</body>
</html>