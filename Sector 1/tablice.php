<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice</title>
</head>
<body>
    <?php

        $nazwa_tab[0] = 10;
        $nazwa_tab[1] = 20;

        echo $nazwa_tab[0]."<br />".$nazwa_tab[1]."<br />";

        $liczby[0] = 1;
        $liczby[1] = 10;
        $liczby[2] = 100;

        //echo $liczby[0]."<br />";

        $tab[] = "cos";
        $tab[] = 56;
        echo $tab[0]."<br />";
        echo $tab[1]."<br />";

        echo "<pre>";
        print_r($tab); //wypisanie tablicy z indeksami
        echo "</pre>";

        //tablica asocjacyjna(skojarzenie czegoś z czymś)
        //$czlowiek["imie"] = "Arkadiusz";
        //$czlowiek["nazwisko"] = "Nowak";

        //echo "<pre>";
        //print_r($czlowiek); 
        //echo "</pre>";

        $tab2 = array("imie" =>'Wiola', 'nazwisko' => 'Kowalska');

        echo "<pre>";
        print_r($tab2); 
        echo "</pre>";

        $a[0] = 1;
        $a[1] = 2;
        $a[2] = 3;
        $a[3] = 4;

        $czlowiek["imie"][0] = "Arkadiusz";
        $czlowiek["nazwisko"][0] = "Nowak";

        $czlowiek["imie"][1] = "Wiola";
        $czlowiek["nazwisko"][1] = "Kowalska";

        $czlowiek["imie"][2] = "Wiola";
        $czlowiek["nazwisko"][2] = "Kowalska";

        $czlowiek2[0]["imie"] = "Arkadiusz";
        $czlowiek2[0]["nazwisko"] = "Nowak";

        $czlowiek2[1]["imie"] = "Wiola";
        $czlowiek2[1]["nazwisko"] = "Kowalska";

        $czlowiek2[2]["imie"] = "Arkadiusz";
        $czlowiek2[2]["nazwisko"] = "Nowak";
        /* 
             [imie]  [nazwisko]
            -----------------
            |       |       |
        [0] |  Ark..|  Nowak|
            |       |       |
            -----------------
            |       |       |
        [1] |  Wiola| Kowa..|
            |       |       |
            ----------------- */
            echo "<pre>";
            print_r($czlowiek);
            echo "</pre>";
            
            echo "<pre>";
            print_r($czlowiek2);
            echo "</pre>";
    ?>
</body>
</html>