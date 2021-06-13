<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Łączenie tabel</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "") or die("Brak połączenia z bazą danych");

        mysqli_select_db($conn, "kursmysql") or die("Brak połączenia z bazą danych.");
        mysqli_set_charset($conn, "utf8");
        //INNER JOIN- wewnętrzne łączenie jest opcjonalne wystarczy JOIN
        //LEFT JOIN wybiera wszystkich klientow nawet jesli nie maja zamowienia i daje im wartosc NULL, Po lewej stronie jest tabela klienci
        //LEFT JOIN wybiera wszystkie rekordy z lewej tabeli i łączy z prawą
        //RIGHT JOIN jest podobne do left
        //LEFT OUTER JOIN - zewnetrzne polaczenie
        //laczenie wiekszej ilosci tabel to w nawiasie
        //SELECT k.id AS id_klienta, k.login, z.kwota FROM klienci k, zamowienia z WHERE k.id = z.id_klienta
        $query = "
        SELECT k.id AS id_klienta, k.login, z.kwota FROM klienci k LEFT JOIN zamowienia z ON k.id = z.id_klienta
        ";

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