<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje agregujące, klauzule HAVING i GROUP BY</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "") or die("Brak połączenia z bazą danych");

        mysqli_select_db($conn, "kursmysql1") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");

        $query = "
            SELECT id_klienta, avg(kwota)
            FROM zamowienia 
            GROUP BY id_klienta DESC
        ";

        //SELECT id_klienta, sum(kwota) FROM zamowienia GROUP BY id_klienta
        //SELECT id_klienta, sum(kwota) laczna_kwota FROM zamowienia GROUP BY id_klienta HAVING laczna_kwota>10
        /*
            SELECT id_klienta, sum(kwota) laczna_kwota 
            FROM zamowienia 
            WHERE kwota<8
            GROUP BY id_klienta DESC
            HAVING laczna_kwota<10

        */
        /*
            SELECT sum(z.kwota) laczna_kwota, k.login
            FROM zamowienia z JOIN klienci k
            ON k.id = z.id_klienta
            GROUP BY id_klienta DESC
            HAVING laczna_kwota>10

        */
        //sum -> sumuje wszystkie wartosci
        //avg -> wylicza srednia wszystkich wartosci
        //max i min -> wyswitela najwieksza i najmniejsza wartosc
        //count ->wyswietla ile jest rekordow
        $result = mysqli_query($conn, $query) or die("Błąd zapytania");

        if(mysqli_num_rows($result)>0)
        {
            echo mysqli_num_rows($result);

            while($row = mysqli_fetch_assoc($result))
            {
                var_dump($row);
            }
        }
        mysqli_close($conn);
    ?>
</body>
</html>